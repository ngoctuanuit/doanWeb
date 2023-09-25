<?php
    session_start();
?>
<h1>Gio hang</h1>
<?php
    if(isset($_SESSION['cart'])){
        print_r($_SESSION['cart']);
    }
?>