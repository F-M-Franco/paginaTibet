<?php 
    ini_set( 'display_errors', true );
    require 'inc/header.php';
    require 'inc/headerDropDown.php';
    require 'inc/InformationFunctionality.php';
?>

<html>

    <head>
        <link rel="stylesheet" href="css\InformationStyles.css">
        <link rel="stylesheet" href="css\Info_Dash_HeaderStyles.css">
    </head>

    <body>
        <header>
            <div class="logotitleBox">
                <img id="logo" src="https://i.imgur.com/6bavdH9.png" alt="logo">
                <label id="title">El Compendio Tibet</label>
            </div>
            
            <nav>
                <form class="optionsBlock" action="InformationTags.php" method="post">
                    <select id="optionDropDown" type="select" name="selectedPage">
                        <option value="0" disabled selected>-Seleccione una opción-</option>
                        <option value="1">Sobre Nosotros</option>  
                        <option value="2">Habitat</option>  
                        <option value="3">Yak</option>  
                        <option value="4">Manul</option> 
                        <option value="5">Buitre</option>  
                        <option value="6">Dashboard</option> 
                        <option value="7">Log Out</option>  
                    </select>
                    <input id="irBtn" type="submit" name="submit" value="Ir">
                </form>
            </nav>

        </header>

        <main>
            <?php echo $fileContent ?? null ?>
        </main>

    </body>

</html>