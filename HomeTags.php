<?php
    ini_set( 'display_errors', true );
    require 'inc/header.php' 
?>

<html>

    <head>
        <link rel="stylesheet" type="text/css" href="css\HomeStyles.css">
        <script language="javascript">
            function pageAcceder(){
                window.location = "LogInTags.php"
            }
            function pageRegistrar(){
                window.location = "RegisterTags.php"
            }
        </script>
    </head>

    <body id="body">

        <section>

            <div class="container">
                <img id="logo"name="logo" src="https://i.imgur.com/6bavdH9.png" alt="logo">
            </div>

            <div class="container">
                <label id="titulo" for="logo">El Compendio Tibet</label>
            </div>

            <div class="container">
                <button id="btnAcceder" onclick="pageAcceder()">Acceder</button>
                <button id="btnRegistrar" onclick="pageRegistrar()">Registrar</button>
            </div>
            
        </section>

        <script src="js_scripts\backgroundSwitch.js"></script>
        
    </body>
</html>