<div class="main">
    <?php 
        include("../main_page/sidebar/sidebar.php")
    ?>
    <div class="main-content">
       <?php 
        if(isset($_GET['quanly'])){
            $tmp = $_GET['quanly'];
        }
        else{
            $tmp = "";
        }
        if($tmp == 'danhmucsanpham'){
            include("../main_page/main/danhmuc.php");
        }
        elseif($tmp == 'giohang'){
            include("../main_page/main/giohang.php");
        }
        elseif($tmp == 'tintuc'){
            include("../main_page/main/tintuc.php");
        }
        elseif($tmp == 'login'){
            // include("../main_page/login.php");
        }
        elseif($tmp == 'sanpham')
        {
            include("../main_page/main/sanpham.php");
        }
        elseif($tmp == 'timkiem'){
            include("../main_page/main/timkiem.php");
        }
        else{
            include("../main_page/main/index.php");
        }
       ?> 
    </div>
</div>