<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidden</title>
</head>
<body>
    
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