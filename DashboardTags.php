<?php 
    ini_set( 'display_errors', true );
    require 'inc/header.php';
    require 'inc/headerDropDown.php';
    require 'inc/DashboardFunctionality.php';
?>

<head>
    <link rel="stylesheet" href="css\DashboardStyles.css"/>
    <link rel="stylesheet" href="css\Info_Dash_HeaderStyles.css"/>
</head>

<body>
    
    <header>

        <div class="logotitleBox">
            <img id="logo" src="https://i.imgur.com/6bavdH9.png" alt="logo">
            <label id="title">El Compendio Tibet</label>
        </div>

        <nav>
            <form class="optionsBlock" action="DashboardTags.php" method="post">
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
        <div class="contentBox">

            <div id="contentBoxSection1">
                <picture class="wrapper"><img id="pfp" src="<?php echo ( $userData[0]["profileFoto"]); ?>" alt="pfp"></picture>
                <p id="nameDisplaySection1"><?php print_r( $userData[0]["username"]); ?></p>
            </div>

            <div id="contentBoxSection2">
                <div class="userInfoBox"> <p> Username: <?php print_r( $userData[0]["username"]); ?> </p> </div>
                <div class="userInfoBox"> <p> Email: <?php print_r( $userData[0]["mail"]);?> </p> </div>
                <div class="userInfoBox"> <p> Password: <?php print_r( $userData[0]["password"]);?> </p></div>
                <div class="userInfoBox"> <p> Creation Date: <?php print_r( $userData[0]["creationDate"]);?> </p> </div>
                <div class="userInfoBox"> <p> Newsletter: <?php print_r( $userData[0]["newsletter"]); ?> </p> </div>
            </div>

        </div>
    </main>

</body>