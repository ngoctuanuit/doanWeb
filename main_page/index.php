<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('Loction: ../main_page/login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="../css/style4.css">
    <link rel="stylesheet" href="../css/fontawesome-free-6.4.2-web/css/all.min.css">
    <title>T-Shopping</title>
</head>
<body>
    <div class="wrapper">

    <?php 
        include("../admincp/config/config.php");
        include("../main_page/header.php");
        include("../main_page/menu.php");
        include("../main_page/main.php");
        include("../main_page/footer.php");
    ?>
    </div>
</body>
</html>