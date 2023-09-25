<?php
         $sql_sp = "SELECT * FROM sanpham SP
         WHERE SP.id_dm = '$_GET[id]'
         ORDER BY SP.MASP DESC";
         $querysp = mysqli_query($mysqli, $sql_sp);
         $row_title = mysqli_fetch_array($querysp);

         $sql_cat = "SELECT * FROM danhmuc DM
         WHERE DM.MADM = '$_GET[id]' LIMIT 1";
         $query_cate = mysqli_query($mysqli, $sql_cat);
         $row_title = mysqli_fetch_array($query_cate);
?>

<ul class="list-product">
    <h1 style="font: inherit; font-size: 20px;">Trang chủ
        <i class="category_icon fa-solid fa-caret-right"></i>
        <?php echo $row_title['TENDM']?>
    </h1>
    <?php
        while($row_sp = mysqli_fetch_array($querysp)){
    ?>
    <li>
        <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_sp['masp'] ?>">
            <img src="../admincp/modules/qlsp/upload_images/<?php echo $row_sp['hinhanh']?>" alt="" width="100%">
            <p class="name_product"><?php echo $row_sp['tensp']?></p>
            <p class="price_product"><?php echo number_format($row_sp['giasp'], 0,',', '.').'vnd'?></p>
        </a>
    </li>
    <?php
    }
    ?>
    
</ul>