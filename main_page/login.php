<?php
	session_start();
	include("../admincp/config/config.php");
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM khachhang WHERE username = '".$username."' AND password = '".$password."' LIMIT 1";
		$row = mysqli_query($mysqli, $sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['login'] = $username;
			header("Location: ../main_page/index.php");
		}
		else{
			echo '<script>alert("Sai tai khoan!")</script>';
			header("Location: ../main_page/login.php");
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_tmp.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Login</title>
	<style type="text/css">
body{
	margin: 0;
    padding: 0
}
img{
width: 100%;
}
.login {
    height: 680px;
    width: 100%;
	background: radial-gradient(#24c6dc, #514a9d);
    position: relative;
	padding-top: 0;
}
.login_box {
	box-shadow: 1px 1px 5px #fff; 
    width: 1050px;
    height: 600px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #fff;
    border-radius: 10px;
    display: flex;
    overflow: hidden;
}
.login_box .left{
  width: 41%;
  height: 100%;
  padding: 25px 25px;
  
}
.login_box .right{
  width: 59%;
  height: 100%  
}
.left .top_link a {
    color: #1fa2ff;
    font-weight: 400;
	text-decoration: none;
	font-size: 15px;
}
.left .top_link{
  height: 20px
}
.left .contact{
	display: flex;
    align-items: center;
    justify-content: center;
    align-self: center;
    height: 100%;
    width: 73%;
    margin: auto;
}
.left .contact .input-text{
	opacity: 0.4;
}
.left h3{
  text-align: center;
  margin-bottom: 40px;
  color: #05a;
  font-size: 20px;
}
.left input {
    border: none;
    width: 80%;
    margin: 15px 0px;
    border-bottom: 1px solid #4f30677d;
    padding: 7px 9px;
    width: 100%;
    overflow: hidden;
    background: transparent;
    font-weight: 600;
    font-size: 14px;
}
.left{
	background: linear-gradient(-45deg, #dcd7e0, #fff);
}
.submit-login {
	cursor: pointer;
    border: none;
    padding: 15px 70px;
    border-radius: 8px;
    display: block;
    margin: auto;
    margin-top: 120px;
    background: radial-gradient(#24c6dc, #514a9d);
    color: #fff;
    font-weight: bold;
    -webkit-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
    -moz-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
    box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
}
.right {
	background: linear-gradient(212.38deg, #1fa2ff 0%, rgba(175, 70, 189, 0.71) 80%),url(https://images.seattletimes.com/wp-content/uploads/2019/01/web-typing-ergonomics.jpg?d=1020x680);
	color: #fff;
	position: relative;
}
.right .right-text{
  height: 70%;
  position: relative;
  transform: translate(0%, 45%);
}
.right-text h2{
  display: block;
  width: 100%;
  text-align: center;
  font-size: 50px;
  font-weight: 500;
}
.right-text h5{
  display: block;
  width: 100%;
  text-align: center;
  font-size: 19px;
  font-weight: 400;
}
.right .right-inductor{
  position: absolute;
  width: 70px;
  height: 7px;
  background: #fff0;
  left: 50%;
  bottom: 70px;
  transform: translate(-50%, 0%);
}
.top_link img {
    width: 13px;
    padding-right: 7px;
    margin-top: -3px;
}
.forget-pass{
    margin: 0;
    float: right;
    font-size: 13px;

}
.forget-pass a{
  text-decoration: none;
  color: #05a;
  font: inherit;
}
</style>
</head>
<section class="login">
	<!-- <form action="" method="POST"> -->
	<div class="login_box">
			<div class="left">
				<div class="top_link">
					<a href="../main_page/register.php"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Đăng ký</a></div>
				<div class="contact">
					<form action="" autocomplete="off"  method="POST">
						<h3>Đăng nhập</h3>
						<input class="input-text" type="text" style = "font: inherit" placeholder="Tên đăng nhập" name="username">
						<input class="input-text" type="password" style = "font: inherit" placeholder="Mật khẩu" name="password">
            <p class="forget-pass"><a href="#">Quên mật khẩu?</a></p>
						<div class="submit-container">
							<button name = "login" class="submit-login">ĐĂNG NHẬP</button>
						</div>
					</form>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>T-Shopping</h2>
					<h5>CÙNG KHÁCH HÀNG TRÊN MỌI NẺO ĐƯỜNG</h5>
				</div>
				<div class="right-inductor"><img src="../images/image_page.png" alt=""></div>
			</div>
		</div>
	<!-- </form> -->

	</section>
	<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>

<!-- https://lh3.googleusercontent.com/fife/ABSRlIoGiXn2r0SBm7bjFHea6iCUOyY0N2SrvhNUT-orJfyGNRSMO2vfqar3R-xs5Z4xbeqYwrEMq2FXKGXm-l_H6QAlwCBk9uceKBfG-FjacfftM0WM_aoUC_oxRSXXYspQE3tCMHGvMBlb2K1NAdU6qWv3VAQAPdCo8VwTgdnyWv08CmeZ8hX_6Ty8FzetXYKnfXb0CTEFQOVF4p3R58LksVUd73FU6564OsrJt918LPEwqIPAPQ4dMgiH73sgLXnDndUDCdLSDHMSirr4uUaqbiWQq-X1SNdkh-3jzjhW4keeNt1TgQHSrzW3maYO3ryueQzYoMEhts8MP8HH5gs2NkCar9cr_guunglU7Zqaede4cLFhsCZWBLVHY4cKHgk8SzfH_0Rn3St2AQen9MaiT38L5QXsaq6zFMuGiT8M2Md50eS0JdRTdlWLJApbgAUqI3zltUXce-MaCrDtp_UiI6x3IR4fEZiCo0XDyoAesFjXZg9cIuSsLTiKkSAGzzledJU3crgSHjAIycQN2PH2_dBIa3ibAJLphqq6zLh0qiQn_dHh83ru2y7MgxRU85ithgjdIk3PgplREbW9_PLv5j9juYc1WXFNW9ML80UlTaC9D2rP3i80zESJJY56faKsA5GVCIFiUtc3EewSM_C0bkJSMiobIWiXFz7pMcadgZlweUdjBcjvaepHBe8wou0ZtDM9TKom0hs_nx_AKy0dnXGNWI1qftTjAg=w1920-h979-ft -->