

<?php
	$idPhim = $_GET["id"];
	settype($idPhim,"int");
	$row_phim = ChiTietPhim($idPhim);
?>
<?php
	if(isset($_POST["btnSua"])){
		$Ten_phim = $_POST["Ten_phim"];
		$Ten_phim_2 = $_POST["Ten_phim_2"];
		$Noi_dung = $_POST["Noi_dung"];
		$So_tap = $_POST["So_tap"];
		$Thoi_luong = $_POST["Thoi_luong"];
		settype($Thoi_luong,"int");
		$Dao_dien = $_POST["Dao_dien"];
		$Dien_vien = $_POST["Dien_vien"];
		$Hinh = $_POST["Hinh"];
		$Hinh_2 = $_POST["Hinh_2"];
		$NamSX = $_POST["NamSX"];
		settype($NamSX,"int");
		$MSTL = $_POST["MSTL"];
		settype($MSTL,"int");
		$MSQG = $_POST["MSQG"];
		settype($MSQG,"int");
		$MSLP = $_POST["MSLP"];
		settype($MSLP,"int");
		$Luot_xem = $_POST["Luot_xem"];
		settype($Luot_xem,"int");
		$video = $_POST["video"];
		
		$qr = "
				UPDATE quan_ly_phim SET
				Ten_phim ='$Ten_phim',
				Ten_phim_2 ='$Ten_phim_2',
				Noi_dung ='$Noi_dung',
				So_tap ='$So_tap',
				Thoi_luong ='$Thoi_luong',
				Dao_dien ='$Dao_dien',
				Dien_vien ='$Dien_vien',
				Hinh ='$Hinh',
				Hinh_2 ='$Hinh_2',
				NamSX ='$NamSX',
				MSTL ='$MSTL',
				MSQG ='$MSQG',
				MSLP ='$MSLP',
				Luot_xem ='$Luot_xem',
				video ='$video'
				WHERE id='$idPhim'
		
		";
		mysql_query($qr);
		header("location:index.php?p=listphim");
	}
?>


    <tr>
      <td><table width="1004" >
        <tbody>
          
            <td width="996"><h1 align="center">Sửa Phim</h1></td>
          
        </tbody>
        
      </table>
        <form name="form1" method="post" action="">
          <table align="center" width="552" border="1">
            <tbody>
              <tr>
                <td width="189">Tên Thể Loại:</td>
                <td width="347">
                <input type="text" name="Ten_phim" id="textfield" value="<?php echo $row_phim['Ten_phim']?>">
                 </td>
              </tr>
              <tr>
              	<td width="189">Tên Tiếng Anh:</td>
                <td width="347">
                <input type="text" name="Ten_phim_2" id="textfield" value="<?php echo $row_phim['Ten_phim_2']?>"></td>
              </tr>
              <tr>
              	<td width="189">Nội Dung:</td>
                <td width="347">
                <input type="text" name="Noi_dung" id="textfield" value="<?php echo $row_phim['Noi_dung']?>"></td>
              </tr>
              <tr>
              	<td width="189">Số Tập:</td>
                <td width="347">
                <input type="text" name="So_tap" id="textfield" value="<?php echo $row_phim['So_tap']?>"></td>
              </tr>
              <tr>
              	<td width="189">Thời Lượng:</td>
                <td width="347">
                <input type="text" name="Thoi_luong" id="textfield" value="<?php echo $row_phim['Thoi_luong']?>"></td>
              </tr>
              <tr>
              	<td width="189">Đạo Diễn:</td>
                <td width="347">
                <input type="text" name="Dao_dien" id="textfield" value="<?php echo $row_phim['Dao_dien']?>"></td>
              </tr>
              <tr>
              	<td width="189">Diễn Viên:</td>
                <td width="347">
                <input type="text" name="Dien_vien" id="textfield" value="<?php echo $row_phim['Dien_vien']?>"></td>
              </tr>
              <tr>
              	<td width="189">Hình Chính:</td>
                <td width="347">
                <input type="text" name="Hinh" id="textfield" value="<?php echo $row_phim['Hinh']?>"></td>
              </tr>
              <tr>
              	<td width="189">Hình Phụ:</td>
                <td width="347">
                <input type="text" name="Hinh_2" id="textfield" value="<?php echo $row_phim['Hinh_2']?>"></td>
              </tr>
              <tr>
              	<td width="189">Năm Sản Xuất:</td>
                <td width="347">
                <input type="text" name="NamSX" id="textfield" value="<?php echo $row_phim['NamSX']?>"></td>
              </tr>
              <tr>
              	<td width="189">Thể Loại:</td>
                <td><select name="MSTL" id="select">
                	<?php
					$theloai = DanhSachTheLoai();
					   while($row_theloai = mysql_fetch_array($theloai)){
					?>
                	<option <?php if( $row_theloai["MSTL"]==$row_phim["MSTL"]) echo "selected='selected'"; ?> value="<?php echo $row_theloai['MSTL']?>"><?php echo $row_theloai['Ten_the_loai']?></option>
                	<?php
						   }
					?>
                </select>
                </td>
              </tr>
              
              <tr>
              	<td width="189">Quốc Gia:</td>
                <td><select name="MSQG" id="select">
                	<?php
					$quocgia = DanhSachQuocGia();
					   while($row_quocgia = mysql_fetch_array($quocgia)){
					?>
                	<option <?php if( $row_quocgia["MSQG"]==$row_phim["MSQG"]) echo "selected='selected'";?> value="<?php echo $row_quocgia['MSQG']?>"><?php echo $row_quocgia['Ten_quoc_gia']?></option>
                	<?php
						   }
					?>
                </select>
                </td>
              </tr>
              <tr>
              	<td width="189">Loại Phim:</td>
                <td><select name="MSLP" id="select">
                	<?php
					$loaiphim = DanhSachLoaiPhim();
					   while($row_loaiphim = mysql_fetch_array($loaiphim)){
					?>
                	<option <?php if( $row_loaiphim["MSLP"]==$row_phim["MSLP"]) echo "selected='selected'";?> value="<?php echo $row_loaiphim['MSLP']?>"><?php echo $row_loaiphim['Ten_loai_phim']?></option>
                	<?php
						   }
					?>
                </select>
                </td>
              </tr>
              <tr>
              	<td width="189">Lượt Xem:</td>
                <td width="347">
                <input type="text" name="Luot_xem" id="textfield" value="<?php echo $row_phim['Luot_xem']?>"></td>
              </tr
              <tr>
              	<td width="189">video:</td>
                <td width="347">
                <input type="text" name="video" id="textfield" value="<?php echo $row_phim['video']?>"></td>
              </tr
              <tr>
              	<td width="189"></td>
                <td>
                <input type="submit" name="btnSua" id="button" value="Sửa">
              </tr>
            </tbody>
          </table>
          <p>&nbsp;</p>
        </form>
        
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;	</p>
     
      
   

