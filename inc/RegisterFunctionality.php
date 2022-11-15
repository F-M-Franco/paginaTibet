<?php
    if(isset($_POST['submit'])){
        $validToCreateUser=1;
        $userInputs=[
            'username' => filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS),
            'password' => filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS),
            'email' => filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),
            'profilePicture' => "https://i.imgur.com/y23QtAb.png",
            'newsletter' => 0
        ];
        //Username Check
        if(!empty($userInputs['username'])){
            $sql = 'SELECT username FROM usuario WHERE username="'. $userInputs['username'].'"';
            $result=mysqli_query($conn, $sql);
            $usernameFetch=mysqli_fetch_all($result, MYSQLI_ASSOC);
            if($usernameFetch!=NULL){
                $usernameErr="Username ". $userInputs['username'] ." is already in use";
                $validToCreateUser=0;
            }
        }else{
            $usernameErr="Porfavor introduzca un nombre";
            $validToCreateUser=0;
        }
        
        //Profile Picture Check
        if(!empty($_FILES['profilePicture']['name'])){
            $pfpInfo = [
                'fileName' => $_FILES['profilePicture']['name'],
                'fileSize' => $_FILES['profilePicture']['size'],
                'fileTmp'  => $_FILES['profilePicture']['tmp_name'],
                'fileExt' 
            ];
            $targetDir= "uploads/".$pfpInfo['fileName'];
            $pfpInfo['fileExt']=explode('.', $pfpInfo['fileName']);
            $pfpInfo['fileExt']=strtolower(end($pfpInfo['fileExt']));
            $allowedExt=['png','jpg','jpeg'];
            if(in_array($pfpInfo['fileExt'], $allowedExt)){
                if($pfpInfo['fileSize']<=1000000){
                    move_uploaded_file($pfpInfo['fileTmp'], $targetDir);
                    $userInputs['profilePicture']="upload/".$pfpInfo['fileName'];
                }else{
                    $pfpErr="El archivo es muy grande, debe ser de 1MB o menos";
                    $validToCreateUser=0;
                }
            }else{
                $pfpErr="Tipo de archivo incorrecto, use png, jpg o jpeg";
                $validToCreateUser=0;
            }
        }

        //Password Check
        if(empty($userInputs['password'])){
            $passErr="Porfavor introduzca una contraseña";
            $validToCreateUser=0;
        }

        //Email Check
        if(empty($userInputs['email'])){
            $emailErr="Porfavor introduzca un Email";
            $validToCreateUser=0;
        }

        //Newsletter Check
        if(isset($_POST['newsletter'])){
            $userInputs['newsletter']=1;
        }
        if($validToCreateUser==1){
            $_SESSION['username']=$userInputs['username'];
            $sql = 'INSERT INTO usuario (username, mail, password, profileFoto, newsletter) VALUES ("'.$userInputs['username'].'","'.$userInputs['email'].'","'.$userInputs['password'].'","'.$userInputs['profilePicture'].'",'.$userInputs['newsletter'].')';
            if(mysqli_query($conn, $sql)){
                header('Location: DashboardTags.php');
            }else{
                $regErr="Fallo en la base de datos, intente denuevo en 2 minutos";
            }
            
        }
    }
?>