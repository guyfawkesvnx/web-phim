

<table align="center" width="2015">
 
    <tr>
      <td width="2007"><table width="1358">
        <tbody>
          <tr>
            <td width="1514"><h1 align="center">Danh Sách Phim</h1></td>
          </tr>
        </tbody>
      </table>
        <table width="1981" border="1">
          <tbody>
            <tr>
              <td align="center" width="26">id</td>
              <td align="center" width="75">Tên Phim</td>
              <td align="center" width="91">Tên Tiếng Anh</td>
              <td align="center" width="75">Nội Dung</td>
              <td align="center" width="59">Số Tập</td>
              <td align="center" width="82">Thời Lượng</td>
              <td align="center" width="74">Đạo Diễn</td>
              <td align="center" width="75">Diễn Viên</td>
              <td align="center" width="150">Hình Chính</td>
              <td align="center" width="150">Hình Phụ</td>
              <td align="center" width="65">Năm Sản Xuất</td>
              <td align="center" width="155">Thể Loại</td>
              <td align="center" width="155">Quốc Gia</td>
              <td align="center" width="125">Loại Phim</td>
              <td align="center" width="159">Lượt Xem</td>
              <td align="center" width="235">Video</td>
              <td align="center" width="124"><a href="index.php?p=them_phim">Thêm</a></td>
            </tr>
            <tr>
             <?php
				$sophim1trang = 6;
			if(isset($_GET["Trang"])){
				$trang = $_GET["Trang"];
				settype($trang,"int");
			}else{
				$trang = 1;
			}
			$from = ($trang - 1) * $sophim1trang;
				
				$phim = PhanTrang($from, $sophim1trang);
				while($row_phim = mysql_fetch_array($phim)){
					ob_start();
				?>
             
              <td height="195">{id}</td>
              <td align="center">{Ten_phim}</td>
              <td align="center">{Ten_phim_2}</td>
              <td ><div class="noidung">{Noi_dung}</div></td>
              <td align="center">{So_tap}</td>
              <td align="center">{Thoi_luong}</td>
              <td align="center">{Dao_dien}</td>
              <td align="center">{Dien_vien}</td>
              <td align="center"><p>{Hinh}</p>
              <p><img src="../images/images1/{Hinh}" width="150" height="96" alt=""/></p></td>
              <td align="center"><p>{Hinh_2}</p>
              <p><img src="../images/images1/{Hinh_2}" width="150" height="96" alt=""/></p></td>
              <td align="center">{NamSX}</td>
              <td align="center">MSTL:{MSTL} - {Ten_the_loai}</td>
              <td align="center">MSQG:{MSQG} - {Ten_quoc_gia}</td>
              <td align="center">MSLP:{MSLP} - {Ten_loai_phim}</td>
              <td align="center">Lượt Xem:{Luot_xem}</td>
              <td align="center"><p>{video}</p>
              <p><video  poster  controls src="../video/{video}" width="150" height="96"/></p>
              </td>
              
              <td align="center"><a href="index.php?p=sua_phim&id={id}">Sửa</a> -  <a onClick="return confirm('Bạn có chắc muốn xóa không?')" href="xoa_phim.php?id={id}">Xóa</a></td>
            </tr>
            <?php
					$s =ob_get_clean();
					$s = str_replace("{id}",$row_phim["id"],$s);
					$s = str_replace("{Ten_phim}",$row_phim["Ten_phim"],$s);
					$s = str_replace("{Ten_phim_2}",$row_phim["Ten_phim_2"],$s);
					$s = str_replace("{Noi_dung}",$row_phim["Noi_dung"],$s);
					$s = str_replace("{So_tap}",$row_phim["So_tap"],$s);
					$s = str_replace("{Thoi_luong}",$row_phim["Thoi_luong"],$s);
					$s = str_replace("{Dao_dien}",$row_phim["Dao_dien"],$s);
					$s = str_replace("{Dien_vien}",$row_phim["Dien_vien"],$s);
					$s = str_replace("{Hinh}",$row_phim["Hinh"],$s);
					$s = str_replace("{Hinh_2}",$row_phim["Hinh_2"],$s);
					$s = str_replace("{NamSX}",$row_phim["NamSX"],$s);
					$s = str_replace("{MSTL}",$row_phim["MSTL"],$s);
					$s = str_replace("{Ten_the_loai}",$row_phim["Ten_the_loai"],$s);
					$s = str_replace("{MSQG}",$row_phim["MSQG"],$s);
					$s = str_replace("{Ten_quoc_gia}",$row_phim["Ten_quoc_gia"],$s);
					$s = str_replace("{MSLP}",$row_phim["MSLP"],$s);
					$s = str_replace("{Ten_loai_phim}",$row_phim["Ten_loai_phim"],$s);
					$s = str_replace("{Luot_xem}",$row_phim["Luot_xem"],$s);
					$s = str_replace("{Luot_xem}",$row_phim["Luot_xem"],$s);
					$s = str_replace("{video}",$row_phim["video"],$s);
					echo $s;
				}
				
			?>
              
          </tbody>
        </table>
        
		  <div class="phantrang">
         	
         	
         	<?php
			 	$t = DanhSachPhim();
			    $tongsophim = mysql_num_rows($t);
			 	$tongsotrang = ceil ($tongsophim/$sophim1trang);
			 	for($i=1;$i<=$tongsotrang;$i++){
			?>
			 <a <?php if($i==$trang) echo "style='background-color:#2AA5F2;color: #FFFFFF;'"; ?> href="?p=listphim&Trang=<?php echo $i ?>"><?php echo $i ?></a>
			<?php	
				}
			 ?>
         </div>
		  
		  
      <p>&nbsp;</p></td>
    </tr>
  </tbody>
</table>
<p>&nbsp;	</p>
     
      
   

