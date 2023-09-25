<div class="clear"></div>
<div class="main">
    <?php 
        if(isset($_GET['action'])){
            $tmp = $_GET['action'];
        }
        else{
            $tmp = "";
        }
        if($tmp == 'quanlydanhmucsanpham'){
            include("../admincp/modules/qldanhmuc/them.php");
            include("../admincp/modules/qldanhmuc/lietke.php");
        }
        elseif($tmp == 'quanlysanpham'){
            include("../admincp/modules/qlsp/them.php");
            include("../admincp/modules/qlsp/lietke.php");
        }
        else{
            include("../admincp/modules/dashboard.php");
        }
    ?> 
</div>