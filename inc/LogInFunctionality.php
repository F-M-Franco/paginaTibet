<?php
if(isset($_POST['submit'])){
    $validToLogIn=1;
    $userInputs=[
        'username' => filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS),
        'password' => filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS),
    ];
    if (!empty($userInputs['username'])) { 
        $sql = 'SELECT password, username FROM usuario WHERE username="'. $userInputs['username'].'"';
        $result=mysqli_query($conn, $sql);
        $userInfoFetch=mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        if(empty($userInfoFetch)){
            $usernameErr="This user doesn't exist";
            $validToLogIn=0;
        }
        else if($userInfoFetch[0]['password']!=$userInputs['password']){
            $passErr="Incorrect Password";
            $validToLogIn=0;
        }
    } else {
        $usernameErr="Please input a name";
        $validToLogIn=0;
    }
    if($validToLogIn==1){
        $_SESSION['username']=$userInputs['username'];
        header('Location: DashboardTags.php');
    }  
}
?>