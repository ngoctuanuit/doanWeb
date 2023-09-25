<?php
    $sql_dmsp = "SELECT * FROM danhmuc ORDER BY thutudm DESC";
    $row_dmsp = mysqli_query($mysqli, $sql_dmsp);
?>
<p>Danh mục sản phẩm</p>
<table width="100%" border="1" style="boder-collapse: collapse;">
  <tr>
    <th>ID</th>
    <th>Tên danh mục</th>
    <th>Thao tác</th>
  </tr>
  <?php
    $i = 0;
    while($row = mysqli_fetch_array($row_dmsp)){
        $i++;
   ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['TENDM'] ?></td>
        <td>
            <a href="../modules/qldanhmuc/xuly.php?iddanhmuc=<?php echo $row['MADM'] ?>">Xóa</a> 
          | <a href="?action=qldanhmuc&query=edit&iddanhmuc=<?php echo $row['MADM'] ?>">Sửa</a>
        </td>
    </tr>
  <?php
    }
  ?>
</table>
