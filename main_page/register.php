<?php
    session_start();
    include("../admincp/config/config.php");
    if(isset($_POST['dangky'])){
        $taikhoan = $_POST['taikhoan'];
        $matkhau = $_POST['matkhau'];
        $re_pass = $_POST['re_pass'];
        $sdt = $_POST['sdt'];
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $gioitinh = "Nam";
        $sql = "INSERT INTO dangky_kh(username, password_cus, re_password, name_cus, email,phone_number, gender) VALUES('".$taikhoan."', '".$matkhau."', '".$re_pass."','".$hoten."','".$email."','".$sdt."','".$gioitinh."')";
        $sql_dangky = mysqli_query($mysqli, $sql);
        if($sql_dangky){
            $sql_tk = "INSERT INTO khachhang(tenkh, username, password) VALUES('".$hoten."','".$taikhoan."','".$matkhau."')";
            $sql_login = mysqli_query($mysqli, $sql_tk);

            echo '<p style = "color: blue"> Đăng ký thành công!</p>';
            $_SESSION['dangky'] = $hoten;
            header("Location: ../main_page/login.php");
        }
        // if($sql_dangky){
        //         echo '<script>
        //                 var successMessage = document.getElementById("success-message");
        //                 function showSuccessMessage() {
        //                     successMessage.style.display = "block";
        //                 }
        //                 showSuccessMessage();
        //                 </script>';
        // }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Register </title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #24c6dc, #514a9d);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   /* justify-content: space-between; */
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background:  linear-gradient(135deg, #24c6dc, #514a9d);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background:  linear-gradient(-135deg, #24c6dc, #514a9d);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

/* #success-message {
  background-color: green;
  color: white;
  padding: 10px;
  text-align: center;
  display: none;
} */
     </style>
   </head>
<body>
  <div class="container" style="box-shadow: 1px 1px 10px #fff;">
    <div class="title">Đăng ký</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Tài khoản</span>
            <input type="text" placeholder="Nhập tài khoản" name="taikhoan" required>
          </div>
          <div class="input-box">
            <span class="details">Mật khẩu</span>
            <input type="password" placeholder="Nhập mật khẩu" name="matkhau"required>
          </div>
          <div class="input-box">
            <span class="details">Nhập lại mật khẩu</span>
            <input type="password" placeholder="Nhập mật khẩu" name="re_pass" required>
          </div>
          <div class="input-box">
            <span class="details">Nhập họ và tên</span>
            <input type="text" placeholder="Nhập họ và tên" name="hoten" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Nhập email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Số điện thoại</span>
            <input type="text" placeholder="Nhập số điện thoại" name="sdt" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <span class="gender-title">Giới tính</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Nam</span>
          </label>
          <label for="dot-2" style=" margin-left: 40px;">
            <span class="dot two"></span>
            <span class="female">Nữ</span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="dangky" value="Đăng ký">
        </div>
        <!-- <div id="success-message">
            <p>Đăng ký thành công!</p>
        </div> -->
      </form>
    </div>
  </div>

</body>
</html>