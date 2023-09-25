<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../admincp/css/styleadmincp.css">
    <title>Admincp</title>
</head>
<body>
    <h3 class="admin_tshopping">Admin T-Shopping</h3>
    <div class="wrapper">
        <?php 
            include("../admincp/config/config.php");
            include("../admincp/modules/header.php");
            include("../admincp/modules/menu.php");
            include("../admincp/modules/main.php");
            include("../admincp/modules/footer.php");
        ?>
    </div>

</body>
</html>