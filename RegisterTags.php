<?php 
    ini_set( 'display_errors', true );
    require 'inc/header.php'; 
    require 'inc/RegisterFunctionality.php'; 
?>

<html>

    <head>
        <link rel="stylesheet" href="css\RegisterStyles.css">
        <script language="javascript">
            function pageBack(){
                window.location = "HomeTags.php"
            }
        </script>
    </head>

    <body>

        <main>

            <div class="wrapper">
                <button id="backBtn" onclick="pageBack()">←</button>
                <p id="labelBackBtn">Ir Atrás</p>
            </div>

            <form action="RegisterTags.php" method="post" enctype="multipart/form-data">

                <div id="logoEspacio">
                    <img id="logo"name="logo" src="https://i.imgur.com/6bavdH9.png" alt="logo">
                </div>

                <h1>Registrar</h1>

                <div class="inputWrapper">
                    <label class="inputLabels">Nombre de usuario</label>
                    <input class="textFields" type="text" name="username" placeholder="Usuario123" minlength="3" maxlength="30">
                    <p class="errorMsg"><?php echo $usernameErr ?? null ?></p>
                </div>

                <div class="inputWrapper">
                    <label class="inputLabels">Email</label>
                    <input class="textFields" type="email" name="email" placeholder="example@example.com">
                    <p class="errorMsg"><?php echo $emailErr ?? null ?></p>
                </div>
                
                <div class="inputWrapper">
                    <label class="inputLabels">Contraseña</label>
                    <input class="textFields" type="password" name="password" placeholder="Usa una contraseña segura" minlength="7">
                <p class="errorMsg"><?php echo $passErr ?? null ?></p>
                </div>

                <div class="inputWrapper">
                    <label class="inputLabels">Foto de perfil</label>
                    <input class="imageFields" type="file" name="profilePicture">
                    <p class="errorMsg"><?php echo $pfpErr ?? null ?></p>
                </div>

                <div id="newsletterFull">
                    <input class="checkboxField" type="checkbox" name="newsletter">
                    <label >Quiero anotarme para el newsletter</label>
                </div>

                <div id="submitBox">
                    <input id="submit" type="submit" name="submit" value="Registrar">
                    <p class="errorMsg"><?php echo $regErr ?? null ?></p>
                </div>
                
            </form>

        </main>

        <script src="js_scripts\backgroundSwitch.js"></script>

    </body>
</html>