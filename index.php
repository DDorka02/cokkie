<?php
    if(!isset($_COOKIE["latogatas"])){
        $_COOKIE["latogatas"] =1;
        $szam =1;
    }
    else if (isset($_COOKIE["felhasznalo"])){
        $szam=$_COOKIE["latogatas"] +1;
    }
    else{
        $szam = $_COOKIE["latogatas"];
    }
    setcookie("felhasznalo", " Dobszay Dorka", time()+5);
    setcookie("latogatas", " $szam", time()+60);
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilus.css">
    <title>Cokkie</title>
</head>
<body>
    <?php
    
    if (isset($_COOKIE["felhasznalo"]) && isset($_COOKIE["felhasznalo"])) {
        echo "Üdvözlünk".$_COOKIE["felhasznalo"]."!";
        echo "Látogatások száma".$_COOKIE["latogatas"]."!";
    }
    else{
        echo "Üdvözlünk vendég!";
    }
 
    
    ?>
    <div class="linkek">
    <a href="url.php">url.php</a>
    <a href="hidden.php">hidden.php</a>
    <a href="session.php">session.php</a></div>
</body>
</html>