<?php
    $sql_sp = "SELECT * FROM sanpham SP JOIN danhmuc DM 
    ON SP.id_dm = DM.MADM ORDER BY masp DESC";
    $row_sp = mysqli_query($mysqli, $sql_sp);
?>
<p>List sản phẩm</p>
<table width="100%" border="1" style="boder-collapse: collapse;">
  <tr>
    <th>ID</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá sản phẩm</th>
    <th>Số lượng</th>
    <th>Danh muc</th>
    <th>Tóm tắt</th>
    <th>Trạng thái</th>
    <th>Thao tác </th>
  </tr>
  <?php
    $i = 0;
    while($row = mysqli_fetch_array($row_sp)){
        $i++;
   ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensp'] ?></td>
        <td><img src="../admincp/modules/qlsp/upload_images/<?php echo $row['hinhanh']?>" width="100px"></td>
        <td><?php echo $row['giasp'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><?php echo $row['TENDM'] ?></td>
        <td><?php echo $row['tomtat'] ?></td>
        <td><?php  if($row['tinhtrang'] == 1){
          echo 'Kich hoat';
        }
        else{
          echo 'An';
        } ?></td>
        <td>
            <a href="../modules/qlsp/xuly.php?idsp=<?php echo $row['masp'] ?>">Xóa</a> 
          | <a href="?action=qlsp&query=edit&idsp=<?php echo $row['masp'] ?>">Sửa</a>
        </td>
    </tr>
  <?php
    }
  ?>
</table>
