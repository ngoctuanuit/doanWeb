<?php 
    include('../../config/config.php');
    $tendm = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];
    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO danhmuc(tendm, thutudm) VALUES('".$tendm."', '".$thutu."')";
        mysqli_query($mysqli, $sql_them);
        header('Location:../../index.php?action=quanlydanhmucsanpham');
    }
    elseif(isset($_POST['suadanhmuc'])){

    }
    elseif(isset($_POST['query'])=='delete'){
        $id = $_GET['iddanhmuc'];
        $sql_delete = "DELETE FROM danhmuc WHERE MADM = '".$id."' ";
        mysqli_query($mysqli, $sql_delete);
        header('Location:../../index.php?action=quanlydanhmucsanpham');
    }
?>