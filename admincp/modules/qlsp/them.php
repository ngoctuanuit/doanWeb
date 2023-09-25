<p>Them sp</p>
<table border="1" width="100%", style="boder-collapse: collapse;">
<form method="POST" action="../admincp/modules/qlsp/xuly.php" enctype="multipart/form-data">  
<tr>
    <td>Tên sp</td>
    <td><input type="text" value="" name="tensanpham"></td>
  </tr>
  <!-- <tr>
    <td>Mã sản phẩm</td>
    <td><input type="text" value="" name="masp"></td>
  </tr> -->
  <tr>
    <td>Giá sản phẩm</td>
    <td><input type="text" value="" name="giasp"></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" value="" name="soluong"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" value="" name="hinhanh"></td>
  </tr>
  <tr>
    <td>Tom tat</td>
    <td><textarea rows="10"  name="tomtat" style="resize: none"></textarea></td>
  </tr>
  <tr>
    <td> Nội dung</td>
    <td><textarea rows="10" name="noidung" style="resize: none"></textarea></td>
  </tr>
  <tr>
    <td>Danh muc san pham</td>
    <td>
      <select name="dmsp">
        <?php
            $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY MADM DESC";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
        ?>
         <option value="<?php echo $row_danhmuc['MADM']?>"> <?php echo $row_danhmuc['TENDM']?></option>
        <?php
         }
        ?>

      </select>
    </td>
  </tr>
  <tr>
    <td>Tinh trang</td>
    <td>
      <select name="tinhtrang">
        <option value="1">Kich hoat</option>
        <option value="0">An</option>
      </select>
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
  </tr>
</form>
</table>