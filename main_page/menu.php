<?php
     $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY MADM DESC";
     $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-free-6.4.2-web/css/all.min.css">
    <title>Document</title>
    <style>
.search-button{
    cursor: pointer;
    height: 32px; 
    margin-top: -10px;
    background-color: #fff;
    margin-left: 0;
    border: none;
    border-radius: 3px;
    color: #0A68FF;
}
.search-button:hover{
    opacity: 0.9;
}
.text-search{
    width: 450px; 
    margin-left: 30px; 
    height: 30px;
    margin-top: -10px;
    border: none;
    border-radius: 3px;
    caret-color: #0A68FF;
    padding-left: 27px;
    background-image: url('https://salt.tikicdn.com/ts/upload/33/d0/37/6fef2e788f00a16dc7d5a1dfc5d0e97a.png');
    background-repeat: no-repeat;
    background-position: 5px center;
    background-size: 4%;
}
.text-search:focus{
    outline: none;

}
.text-search::placeholder{
    font-size: 13px;
}
</style>
</head>
<body>
<div class="menu">
    <ul class="list-menu">
        <li class="category"><a href="index.php">
        <i class="fa-solid fa-house"></i>
            Trang chủ
        </a></li>
        <!-- <?php
            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
        ?>
        <li class="category"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['MADM'] ?>"><?php echo $row_danhmuc['TENDM']?></a></li>
        <?php
        }
        ?> -->
        <li class="category"><a href="index.php?quanly=uudai">
        <i class="fa-solid fa-tag"></i>
        Ưu đãi
        </a></li>
        <li class="category"><a href="index.php?quanly=giohang">
        <i class="fa-solid fa-cart-shopping"></i>
        Giỏ hàng
        </a></li>
        <li class="category"><a href="index.php?quanly=tintuc">
        <i class="fa-regular fa-circle-question"></i>
        Liên hệ
        </a></li>
        <li><a class = "account" href="index.php?quanly=login">
        <i class="fa-solid fa-user"></i>
            Tài khoản: <?php if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
        }
        ?></a></li>
    </ul>
    <p>
        <form action="index.php?quanly=timkiem" method="POST">
            T-Shopping
            <input class="text-search" type="text" style="" placeholder="Nhập sản phẩm..." name="keyword">
            <input class = "search-button" type="submit"  value="Tìm kiếm" name="timkiem">
        </form>
         
    </p>
  
</div>
</body>
</html>

