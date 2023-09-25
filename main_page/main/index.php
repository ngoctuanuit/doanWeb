<?php
         $sql_sp = "SELECT * FROM sanpham SP JOIN danhmuc DM ON SP.id_dm = DM.MADM
         ORDER BY SP.MASP DESC";
         $querysp = mysqli_query($mysqli, $sql_sp);

    
?>
<ul class="list-product">
    <p>Sản phẩm hiện có</p>
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