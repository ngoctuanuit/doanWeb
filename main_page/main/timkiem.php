<?php
    if(isset($_POST['timkiem']))
    {
        $keyword = $_POST['keyword'];
    }
    else{
        $keyword = '';
    }
    $sql_sp = "SELECT * FROM sanpham SP
    WHERE SP.tensp LIKE '%".$keyword."%'";
    $querysp = mysqli_query($mysqli, $sql_sp);
    
?>



<ul class="list-product">
    <div class="title-keyword-product" style="display: flex;">
        <h3 style="font: inherit;">Sản phẩm tìm kiếm:  
        </h3>
        <h3 style="margin-top: 14px; color: 0A68FF;">
            <?php echo ' '.$_POST['keyword']?>
        </h3>

    </div>
    <?php
         while($row_sp= mysqli_fetch_array($querysp)){
    ?>
    <li>
        <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['masp'] ?>">
        <img src="../admincp/modules/qlsp/upload_images/<?php echo $row_sp['hinhanh']?>" alt="" width="100%">
        <p class="name_product"> <?php echo $row_sp['tensp']?></p>
        <p class="price_product"><?php echo number_format($row_sp['giasp'], 0,',', '.').' vnd'?></p>
        </a>
    </li>
    <?php
         }
    ?>
</ul>