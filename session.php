<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilus.css">
    <title>Session</title>
</head>
<body>
    <?php echo session_id();?>
    <div class="linkek">
    <a href="url.php">url.php</a>
    <a href="hidden.php">hidden.php</a>
    <a href="index.php">index.php</a></div>
    


</body>
</html>