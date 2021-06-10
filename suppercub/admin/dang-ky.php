
 <?php
			ob_start();//chuyển hướng không bị lỗi
			session_start();
			require "../lib/dbCon.php";
		?>  
	     
	     
	<?php	
	if(isset($_POST['dangky']) ){
	
			$name=$_POST['txtname'];	
			$password=$_POST['txtpass'];
			$password=md5($password);
			$email=$_POST['txtemail'];
				 $qr="
						INSERT INTO user
						VALUES(null,'$name','$password','$email',null)
				";
				mysql_query($qr);
		
	}
	
	
?>


<!doctype html>
<html>
<head>
           <title>Đăng Ký</title>
            <meta charset="utf-8">
           <link type="text/css" rel="stylesheet" href="../css/dang-ky.css"/>
           
</head>

<body>	 
     <script language="javascript">
	    function KT_Name(hoten){
			if(hoten.length<2){
				alert("Tên tài khoản không hợp lệ!!!");
			    return false;
			}else return true;
			
		}
		function KT_Pass(matkhau){
			if(matkhau.length<6){
				alert("Mật khẩu không hợp lệ!!!! ");
			    return false;
			}else return true;
		}
	    function KT_Email(email){
			var bieuthuc =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(!bieuthuc.test(email)){
				alert("email họp lệ! \n vd: s2zzdoremonzzs2@gmail.com");
			    return false;
			}else return true;
		}
		function KT_Dangky(hoten,email,matkhau){
			if(KT_Name(hoten) && KT_Email(email) && KT_Pass(matkhau)){
				alert("Đăng ký thành công! ");
			   
			}else alert("Đăng nhập lại! ");
		}
	
	</script>
     
  
	<form action="" method="post">
         
	     <div id="Dangky">
	        <a href="index.php" title="Trang Chủ"><img src="../images/bieutuong.jpg" class="avatar"></a>
             <h1>Đăng Ký</h1>
             <h3>Những thông tin có đánh dấu (<font size="5px" color="#F32529">*</font>) là bắt buộc nhập.
             </h3>
	         <div>
				 <label for="name"> Tài Khoản (<font  size="5px"color="#F32529">*</font>):  
                 </label>
                 <input type="text1" name="txtname" id="name"  placeholder=" (Không nhỏ hơn 2 ký tự)..."/>
	         </div> 
	         <div>
	         	<label for="pass">Mật Khẩu(<font size="5px" color="#F32529">*</font>): </label>
	         	<input type="password"  name="txtpass" id="pass" placeholder=" (6-23 ký tự)... "/>
	         </div>
	         
	         <div>
	         	<label for="email">Email(<font  size="5px" color="#F32529">*</font>): </label>
	         	<input id="email"  type="text2" name="txtemail" id="email" placeholder="                                   @gamil.com"/>
	         </div>
	         <div>
	            <label for="pass">Giới Tính: </label>
	            <input id="radio" type="radio" name="gioi-tinh" checked="checked"/>Nam
	            <input 
	            id="radio" type="radio" name="gioi-tinh" />Nữ
			 </div>
	         
	         <div>
	         	<label for="notes">Ghi Chú: </label>
	         	<textarea name="notes" cols="40" rows="8"></textarea>
	         </div>
	         <div>
	         	<input  title="Đăng Ký" type="submit" value="Đăng Ký" id="button" name="dangky" onclick="KT_Dangky(txtname.value, txtemail.value, txtpass.value)"/>
	         	
	         	<input title="Reset" type="reset" value="Reset" id="button"/>
	         	
	         </div>
		 
	   </form>	    
	     
	  
</body>
</html>