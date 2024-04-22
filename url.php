<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilus.css">
    <title>Url</title>
</head>
<body>
    <div class="linkek">
    <a href="index.php">index.php</a>
    <a href="hidden.php">hidden.php</a>
    <a href="session.php">session.php</a></div>
    <?php
        $szamlalo = 0;
        if (isset($_GET["szamlalo"])){
            $szamlalo =$_GET["szamlalo"];
        }
        echo $szamlalo."<br>";
        $szamlalo++;
    ?>
    <a href="url.php?szamlalo=<?php echo $szamlalo?>">Növel</a>
    </body>
</html>