<?php

   session_start();
   include('../../admincp/config/config.php');

   if(isset($_POST['add_to_cart'])){
    $id = $_GET['idsanpham'];
    $soluong = 1;
    $sql = "SELECT * FROM sanpham WHERE masp = '".$id."' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    if($row){
        $new_product = array(array('tensanpham'=>$row['tensp'], 'masp'=>$id, 'soluong'=>$soluong, 'giasp'=>$row['giasp'], 'hinhanh'=>$row['hinhanh']));
        // kiem tra session gio hang ton tai
        if(isset($_SESSION['cart'])){
            $found = false;
            foreach($_SESSION['cart'] as $cart_item){
                if($cart_item['masp'] = $id){
                    $product[] = array(array('tensanpham'=>$cart_item['tensp'], 'masp'=>$cart_item['masp'], 'soluong'=>$cart_item['soluong'] + 1, 'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh']));
                    $found = true;
                }
                else{
                    $product[] = array(array('tensanpham'=>$cart_item['tensp'], 'masp'=>$cart_item['masp'], 'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh']));
                }
            }
            if($found == false){
                $_SESSION['cart'] = array_merge($product, $new_product);
            }
            else{
                $_SESSION['cart'] = $product;
            }
        }
        else{
            $_SESSION['cart'] = $new_product;
        }
    }
    // header('Loaction: index.php?quanly=giohang');
    
   }
   print_r($_GET['idsanpham']);
?>