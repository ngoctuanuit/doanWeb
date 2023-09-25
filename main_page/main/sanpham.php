<p>Thông tin sản phẩm</p>
<?php
   $sql_ctsp = "SELECT * FROM sanpham SP JOIN danhmuc DM ON SP.id_dm = DM.MADM
   WHERE SP.masp = '$_GET[id]' LIMIT 1";
    $query_ctsp = mysqli_query($mysqli, $sql_ctsp);
    while($row_ctsp = mysqli_fetch_array($query_ctsp)){
?>
<style>
    .buy-now-btn{
        border-radius: 4px;
        height: 35px;
        background-color: coral;
        color: #fff;
        border-color: bisque;
        text-align: center;
        cursor: pointer;
        margin-left: 15px;
    }
    .buy-now-btn:hover{
        opacity: 0.8;
    }
    .quantity {
        display: flex;
        align-items: center;
    }

    .quantity-input {
        width: 25px;
        text-align: center;
        border-radius: 4px;
        border: 1px solid #ccc;
        height: 21px;
        margin: 0 5px;
    }
    .quantity-input:focus{
        border: 1px solid #3399ff;
    }

    .minus-btn, .plus-btn {
        border-radius: 4px;
        font-size: 18px;
        width: 25px;
        height: 25px;
        background-color: #fff;
        border: 1px solid #ccc;
        cursor: pointer;
    }

    .minus-btn:hover, .plus-btn:hover {
    background-color: #f2f2f2;
    }


</style>
<form method="POST" action="../main_page/main/add_to_cart.php?idsanpham=<?php echo $row_ctsp['masp']?>">
    <div class="wrapper_ctsp">
        <div class="product_img">
            <img width="100%" src="../admincp/modules/qlsp/upload_images/<?php echo $row_ctsp['hinhanh']?>">
        </div>
        <div class="product_detail">
            <h3 style="margin: 0" ><?php echo $row_ctsp['tensp']?></h3>
            <p><?php echo number_format($row_ctsp['giasp'], 0,',', '.').' vnd'?></p>
            <h3 style="font: inherit;"> Còn lại: <?php echo $row_ctsp['soluong']?></h3>
            <div class="quantity">
                <button class="minus-btn">-</button>
                <input type="text" class="quantity-input" value="1">
                <button class="plus-btn">+</button>
            </div>
        </div>     
    </div>
    <div class="add_cart">
        <p><input class="add_to_cart" type="submit" value="Thêm vào giỏ hàng"></p>
        <p><input class="buy-now-btn" type="submit" value="Mua ngay"></p>
    </div>
</form>
<?php
}
?>