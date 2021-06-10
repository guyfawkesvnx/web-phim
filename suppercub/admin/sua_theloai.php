

<?php
	$MSTL = $_GET["MSTL"];
	settype($MSTL,"int");
	$row_theloai = ChiTietTheLoai($MSTL);
?>
<?php
	if(isset($_POST["btnSua"])){
		$Ten_the_loai = $_POST["Ten_the_loai"];
		$qr = "
				UPDATE the_loai SET
				Ten_the_loai ='$Ten_the_loai'
				WHERE MSTL='$MSTL'
		
		";
		mysql_query($qr);
		header("location:index.php?p=listtheloai");
	}
?>

    <tr>
      <td><table width="1004" >
        <tbody>
          
            <td width="996"><h1 align="center">Sửa Thể Loại</h1></td>
          
        </tbody>
        
      </table>
        <p>&nbsp;</p>
        
        <form name="form1" method="post" action="">
          <table align="center" width="496" border="1">
            <tbody>
              <tr>
                <td width="120">Tên Thể Loại:</td>
                <td width="343">
                <input type="text" name="Ten_the_loai" id="textfield" value="<?php echo $row_theloai['Ten_the_loai']?>">
                 <input type="submit" name="btnSua" id="button" value="Sửa"></td>
              </tr>
            </tbody>
          </table>
          <p>&nbsp;</p>
        </form>
        
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
  