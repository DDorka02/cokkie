<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilus.css">
    <title>Hidden</title>
</head>
<body>
<div class="linkek">
    <a href="url.php">url.php</a>
    <a href="index.php">index.php</a>
    <a href="session.php">session.php</a></div>
<?php
        $szamlalo = 0;
        if (isset($_POST["szamlalo"])){
            $szamlalo =$_POST["szamlalo"];
        }
        $szamlalo++;
        echo $szamlalo."<br>";
        
    ?>
    <form action="" method="post">
        <input type="hidden" name="szamlalo"value="<?php echo $szamlalo?>">
        <input type="submit" value="Növel">
    </form>
</body>
</html>