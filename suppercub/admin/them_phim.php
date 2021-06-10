
<?php
	
	

	if(isset($_POST["btnthem"])){
		$Ten_phim = $_POST["Ten_phim"];
		$Ten_phim_2= $_POST["Ten_phim_2"];
		$Noi_dung =$_POST["Noi_dung"];
		$So_tap =$_POST["So_tap"];
		$Thoi_luong =$_POST["Thoi_luong"];
		$Dao_dien =$_POST["Dao_dien"];
		$Dien_vien =$_POST["Dien_vien"];
		$Hinh =$_POST["Hinh"];
		$Hinh_2 =$_POST["Hinh_2"];
		$NamSX =$_POST["NamSX"];
		settype($NamSX,"int");
		$MSTL =$_POST["MSTL"];
		settype($MSTL,"int");
		$MSQG =$_POST["MSQG"];
		settype($MSQG,"int");
		$MSLP = $_POST["MSLP"];
		settype($MSLP,"int");
		$Luot_xem = 0;
		$Video =$_POST["Video"];
		
		
		
		
		echo $qr="
			INSERT INTO quan_ly_phim 	VALUES(null,'$Ten_phim','$Ten_phim_2','$Noi_dung','$So_tap','$Thoi_luong','$Dao_dien','$Dien_vien','$Hinh','$Hinh_2','$NamSX','$MSTL','$MSQG','$MSLP','$Luot_xem','$Video')
		";
		mysql_query($qr);
		header("location:index.php?p=listphim");
		move_uploaded_file($_FILES["file"]["tmp_name"],"image/" . $_FILES["file"]["name"]);
	
	}
	
	

?>


		





    <tr>
      <td><form name="form1" method="post" action="">
        <table width="1174">
          <tbody>
            <tr>
              <td align="center" width="785"><h1 align="center">Thêm Phim</h1></td>
            </tr>
          </tbody>
        </table>
        <table align="center" width="633" border="1">
          <tbody>
            <tr>
              <td width="176">Tên Phim:</td>
              <td width="441"><input type="text" name="Ten_phim" id="textfield"></td>
            </tr>
            <tr>
              <td>Tên Tiếng Anh:</td>
              <td><input type="text" name="Ten_phim_2" id="textfield2"></td>
            </tr>
            <tr>
              <td>Nội Dung:</td>
              <td><textarea name="Noi_dung" id="textarea" cols="45" rows="5"></textarea></td>
            </tr>
            <tr>
              <td>Số Tập:</td>
              <td><input type="text" name="So_tap" id="textfield3"></td>
            </tr>
            <tr>
              <td>Thời Lượng:</td>
              <td><input type="text" name="Thoi_luong" id="textfield4"></td>
            </tr>
            <tr>
              <td>Đạo Diễn:</td>
              <td><input type="text" name="Dao_dien" id="textfield5"></td>
            </tr>
            <tr>
              <td>Diễn Viên:</td>
              <td><input type="text" name="Dien_vien" id="textfield6"></td>
            </tr>
            <tr>
              <td>Hình Chính:</td>
              <td><input type="text" name="Hinh" id="textfield7">
                <input  type="file" name="file" id="button2" value="Chọn File"></td>
            </tr>
            <tr>
              <td>Hình Phụ:</td>
              <td><input type="text" name="Hinh_2" id="textfield8">
                <input type="file" name="file" id="button3" value="Chọn File"></td>
            </tr>
            <tr>
              <td>Năm Sản Xuất:</td>
              <td><input type="text" name="NamSX" id="textfield9"></td>
            </tr>
            <tr>
              <td>Thể Loại:</td>
              <td><select name="MSTL" id="select">
               		<?php
				  		$theloai=DanhSachTheLoai();
				  		while($row_theloai=mysql_fetch_array($theloai)){
				  	?>
              		<option value="<?php echo $row_theloai['MSTL']?>"><?php echo $row_theloai['Ten_the_loai']?></option>
              		<?php
						}
				  	?>
                </select></td>
            </tr>
            <tr>
              <td>Quốc Gia:</td>
              <td><select name="MSQG" id="select2">
              		<?php
				  		$quocgia=DanhSachQuocGia();
				  		while($row_quocgia=mysql_fetch_array($quocgia)){
				  	?>
              		<option value="<?php echo $row_quocgia['MSQG']?>"><?php echo $row_quocgia['Ten_quoc_gia']?></option>
              		<?php
						}
				  	?>
              </select></td>
            </tr>
            <tr>
              <td>Loại Phim:</td>
              <td><select name="MSLP" id="select3">
             		<?php
				  		$loaiphim=DanhSachLoaiPhim();
				  		while($row_loaiphim=mysql_fetch_array($loaiphim)){
				  	?>
              		<option value="<?php echo $row_loaiphim['MSLP']?>"><?php echo $row_loaiphim['Ten_loai_phim']?></option>
              		<?php
						}
				  	?>
              </select></td>
            </tr>
            <tr>
              <td>Video:</td>
              <td><input type="text" name="Video" id="textfield12">
              <input  type="file" name="file" id="button2" value="Chọn File"></td></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="btnthem" id="button" value="Thêm"></td>
            </tr>
            
          </tbody>
        </table>
        <p>&nbsp;</p>
      </form></td>
    </tr>

     
      
 