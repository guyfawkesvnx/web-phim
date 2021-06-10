<?php

//quan li the loai
function DanhSachTheLoai(){
	$qr = "
		SELECT * FROM the_loai 
		  
		  
	";
	return mysql_query($qr);
}
function ChiTietTheLoai($MSTL){
	$qr = "
		SELECT * FROM the_loai 
		  WHERE MSTL = '$MSTL'
		  
	";
	$row = mysql_query($qr);
	return mysql_fetch_array($row);
}
function DanhSachQuocGia(){
	$qr = "
		SELECT * FROM quoc_gia 
		  
		  
	";
	return mysql_query($qr);
}
function ChiTietQuocGia($MSQG){
	$qr = "
		SELECT * FROM quoc_gia 
		  WHERE MSQG = '$MSQG'
		  
	";
	$row = mysql_query($qr);
	return mysql_fetch_array($row);
}
function DanhSachLoaiPhim(){
	$qr = "
		SELECT * FROM loai_phim 
		  
		  
	";
	return mysql_query($qr);
}
//quan tri phim

function DanhSachPhim(){
	$qr = "
		SELECT quan_ly_phim.*,Ten_the_loai,Ten_quoc_gia,Ten_loai_phim FROM quan_ly_phim ,the_loai,quoc_gia,loai_phim
		WHERE quan_ly_phim.MSTL=the_loai.MSTL 
			and quan_ly_phim.MSQG=quoc_gia.MSQG
			and quan_ly_phim.MSLP=loai_phim.MSLP
		 ORDER BY id DESC
		  
	";
	return mysql_query($qr);
	 
}
function ChiTietPhim($idPhim){
	$qr = "
		SELECT * FROM quan_ly_phim 
		  WHERE id = '$idPhim'
		  
	";
	$row = mysql_query($qr);
	return mysql_fetch_array($row);
}
function comment(){
	$qr = "
		SELECT * FROM comment 	  
		ORDER BY CM_ID DESC  
	";
	return mysql_query($qr);
}

function PhanTrangComment($from, $sophim1trang){
	$qr = "
		SELECT * FROM comment 	  
		ORDER BY CM_ID DESC  
		 LIMIT $from,$sophim1trang
	";
	return mysql_query($qr);
}

function user(){
	$qr = "
		SELECT * FROM user 	  
		 ORDER BY Username ASC
	";
	return mysql_query($qr);
}
function ChiTietUser($idUser){
	$qr = "
		SELECT * FROM user 
		  WHERE idUser = '$idUser'
		  
	";
	$row = mysql_query($qr);
	return mysql_fetch_array($row);
}
function PhanTranguser($from, $sophim1trang){
	$qr = "
		SELECT * FROM user 	  
		 ORDER BY Username ASC
		   LIMIT $from,$sophim1trang
	";
	return mysql_query($qr);
}


function PhanTrang($from, $sophim1trang){
	 $qr = "
	     SELECT quan_ly_phim.*,Ten_the_loai,Ten_quoc_gia,Ten_loai_phim FROM quan_ly_phim ,the_loai,quoc_gia,loai_phim
		WHERE quan_ly_phim.MSTL=the_loai.MSTL 
			and quan_ly_phim.MSQG=quoc_gia.MSQG
			and quan_ly_phim.MSLP=loai_phim.MSLP
		 ORDER BY id DESC
		  LIMIT $from, $sophim1trang
	   
	";
	 return mysql_query($qr);
}


?>
