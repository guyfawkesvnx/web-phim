<?php
function PhimMoiNhat_BonPhim(){
	 $qr = "
	      SELECT * FROM quan_ly_phim 
		  ORDER BY Luot_xem DESC
		  LIMIT 0,4
	   
	";
	 return mysql_query($qr);
}
?>

<?php
function PhimMoiNhat(){
	 $qr = "
	      SELECT * FROM quan_ly_phim 
		  ORDER BY id DESC
		  
	   
	";
	 return mysql_query($qr);
}
?>


<?php
function PhimXemNhieuNhat_SauPhim(){
	 $qr = "
	      SELECT * FROM quan_ly_phim 
		  ORDER BY Luot_xem DESC
		  LIMIT 0,5
	   
	";
	 return mysql_query($qr);
}
?>

<?php
function DanhSachTheLoai(){
	 $qr = "
	      select *
		 from the_loai 
	   
	";
	 return mysql_query($qr);
}
?>

<?php
function DanhSachQuocGia(){
	 $qr = "
	     select *
		 from quoc_gia 
		 
	   
	";
	 return mysql_query($qr);
}
?>
<?php
function DanhSachLoaiPhim(){
	 $qr = "
	      SELECT * FROM loai_phim
		 
	   
	";
	 return mysql_query($qr);
}
?>


<?php
function PhimTheoTheLoaiPhim($MSTL){
	 $qr = "
	      SELECT * FROM quan_ly_phim 
		  where MSTL = $MSTL
		  ORDER BY id DESC
	   	  
	";
	 return mysql_query($qr);
}
?>

<?php
function MenuTheLoaiPhim($MSTL){
	 $qr = "
	      SELECT * FROM quan_ly_phim a, the_loai b
		  where a.MSTL = $MSTL and a.MSTL=b.MSTL
		  
	";
	 return mysql_query($qr);
}
?>

<?php
function PhimTheoQuocGia($MSQG){
	 $qr = "
	      SELECT * FROM quan_ly_phim 
		  where MSQG = $MSQG
		  ORDER BY id DESC
	   	  
	";
	 return mysql_query($qr);
}
?>

<?php
function MenuQuocGiaPhim($MSQG){
	 $qr = "
	      SELECT * FROM quan_ly_phim a, quoc_gia b
		  where a.MSQG = $MSQG and a.MSQG=b.MSQG
		  
	";
	 return mysql_query($qr);
}
?>

<?php
function PhimTheoLoaiPhim($MSLP){
	 $qr = "
	      SELECT * FROM quan_ly_phim 
		  where MSLP = $MSLP
		  ORDER BY id DESC
		  
	   
	";
	 return mysql_query($qr);
}
?>

<?php
function MenuLoaiPhim($MSLP){
	 $qr = "
	      SELECT * FROM quan_ly_phim a, loai_phim b
		  where a.MSLP = $MSLP and a.MSLP=b.MSLP
		  
	";
	 return mysql_query($qr);
}
?>

<?php
function PhanTrang($from, $sophim1trang){
	 $qr = "
	      SELECT * FROM quan_ly_phim 
		  ORDER BY id DESC
		  LIMIT $from, $sophim1trang
	   
	";
	 return mysql_query($qr);
}
?>

<?php
function PhanTrangTheLoai($MSTL,$from, $sophim1trang){
	 $qr = "
	      SELECT * FROM quan_ly_phim 
		  WHERE MSTL = $MSTL
		  ORDER BY id DESC
		  LIMIT $from, $sophim1trang
	   
	";
	 return mysql_query($qr);
}
?>

<?php
function PhanTrangLoaiPhim($MSLP,$from, $sophim1trang){
	 $qr = "
	      SELECT * FROM quan_ly_phim 
		  WHERE MSLP = $MSLP
		  ORDER BY id DESC
		  LIMIT $from, $sophim1trang
	   
	";
	 return mysql_query($qr);
}
?>

<?php
function PhanTrangQuocGia($MSQG,$from, $sophim1trang){
	 $qr = "
	      SELECT * FROM quan_ly_phim 
		  WHERE MSQG = $MSQG
		  ORDER BY id DESC
		  LIMIT $from, $sophim1trang
	   
	";
	 return mysql_query($qr);
}
?>

<?php
function ThongTinPhim($idPhim){
	 $qr = "
	      SELECT * FROM quan_ly_phim a, the_loai b, quoc_gia c
		  WHERE a.id = $idPhim and a.MSTL = b.MSTL and a.MSQG = c.MSQG 
	   
	";
	 return mysql_query($qr);
}
?>

<?php
function XemPhim($idPhim){
	 $qr = "
	      SELECT * FROM quan_ly_phim a, the_loai b, quoc_gia c
		  WHERE a.id = $idPhim and a.MSTL = b.MSTL and a.MSQG = c.MSQG
	   
	";
	 return mysql_query($qr);
}
?>

<?php
function LuotXem($idPhim){
	 $qr = "
	      UPDATE quan_ly_phim
		  SET Luot_xem = Luot_xem + 1 
		  where id = $idPhim
	   
	";
	 mysql_query($qr);
}
?>

<?php
function TimKiem($tukhoa){
	 $qr = "
	     SELECT * FROM quan_ly_phim 
		 WHERE Ten_phim REGEXP '$tukhoa' OR Ten_phim_2 REGEXP '$tukhoa' OR NamSX REGEXP '$tukhoa'
	   	 ORDER BY id DESC
	";
	 return mysql_query($qr);
}
?>
<?php
function comment($idPhim){
	 $qr = "
	      SELECT * FROM comment a,user b 
		  where id = $idPhim and a.idUser = b.idUser
		  ORDER BY CM_ID DESC
		  LIMIT 0,9
	";
	 return mysql_query($qr);
}
?>

