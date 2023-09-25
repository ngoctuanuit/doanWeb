<?php 
    include('../../config/config.php');

    $tensp = $_POST['tensanpham'];
    $giasp = $_POST['giasp'];
    $soluong = $_POST['soluong'];
    $tomtat = $_POST['tomtat'];
    $noidung = $_POST['noidung'];
    $tinhtrang = $_POST['tinhtrang'];

    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;

    $danhmuc = $_POST['dmsp'];
    if(isset($_POST['themsanpham'])){
        $sql_them = "INSERT INTO sanpham(tensp, giasp, soluong, hinhanh, tomtat, noidung, tinhtrang, id_dm) 
        VALUES('".$tensp."', '".$giasp."', '".$soluong."', '".$hinhanh."', '".$tomtat."', '".$noidung."', '".$tinhtrang."', '".$danhmuc."')";
        mysqli_query($mysqli, $sql_them);
        move_uploaded_file($hinhanh_tmp, '../qlsp/upload_images/'.$hinhanh);
        header('Location:../../index.php?action=quanlysanpham');
    }
    elseif(isset($_POST['suasanpham'])){

    }
    // elseif(isset($_POST['query'])=='delete'){
    //     $id = $_GET['iddanhmuc'];
    //     $sql_delete = "DELETE FROM danhmuc WHERE MADM = '".$id."' ";
    //     mysqli_query($mysqli, $sql_delete);
    //     header('Location:../../index.php?action=quanlydanhmucsanpham');
    // }
?>