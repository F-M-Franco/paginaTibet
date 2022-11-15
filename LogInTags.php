<?php 
    ini_set( 'display_errors', true );
    require 'inc/header.php'; 
    require 'inc/LogInFunctionality.php'; 
?>

<html>
    
    <head>
        <link rel="stylesheet" href="css\LogInStyles.css">
        <script language="javascript">
            function pageBack(){
                window.location = "HomeTags.php"
            }
        </script>
    </head>

    <body>
    <h1><?php echo $linga ?? null ?></h1>
        <main>

            <div class="backBtnWrapper">
                <button id="backBtn" onclick="pageBack()">←</button>
                <p id="labelBackBtn">Ir Atrás</p>
            </div>

            <form action="LogInTags.php" method="post">

                <div id="logoEspacio">
                    <img id="logo"name="logo" src="https://i.imgur.com/6bavdH9.png" alt="logo">
                </div>

                <h1>Acceder</h1>

                <div class="inputWrapper">
                    <label class="inputLabels">Nombre de usuario</label>
                    <input class="textFields" type="text" name="username" placeholder="Usuario123" minlength="3" maxlength="30">
                    <p class="errorMsg"><?php echo $usernameErr ?? null ?></p>
                </div>

                <div class="inputWrapper">
                    <label class="inputLabels">Contraseña</label>
                    <input class="textFields" type="password" name="password" placeholder="Usa una contraseña segura" minlength="7">
                    <p class="errorMsg"><?php echo $passErr ?? null ?></p>
                </div>
                
                <div id="submitBox">
                    <input id="submit" type="submit" name="submit" value="Acceder">
                </div>

            </form>

        </main>

        <script src="js_scripts\backgroundSwitch.js"></script>
        
    </body>
    <html>