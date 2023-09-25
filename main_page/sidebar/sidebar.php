<style>
    html{
        font-family: Helvetica;
        box-sizing: border-box;
    }
    .category__heading{
        font-weight: 400;
        padding-left: 16px;
    }
    .list-category{
        display: flex;
        text-align: center;
    }
    .category_icon{
        margin-right: 10px;
        text-align: center;
        margin-top: 5px; 
    }
    .sidebar{
        box-shadow: 1px 1px 2px #ccc;
        border: none;
        width: 200px;
        margin-top: 19px;
    }
</style>
<div class="sidebar">
    <h3 class="category__heading">
        <i class="category__heading-icon fa-solid fa-list"></i>
        DANH MỤC
    </h3>
    <ul class="list-sidebar">
    <?php
     $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY MADM DESC";
     $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
     while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
    ?>
     <li class="list-category">
        <i class="category_icon fa-solid fa-caret-right"></i>
        <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['MADM'] ?>"><?php echo $row_danhmuc['TENDM']?></a>

    </li>
    <?php
        }
    ?>
       
    </ul>
</div>