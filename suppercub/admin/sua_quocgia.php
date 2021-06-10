
<?php
	$MSQG = $_GET["MSQG"];
	settype($MSQG,"int");
	$row_quocgia = ChiTietQuocGia($MSQG);
?>
<?php
	if(isset($_POST["btnSua"])){
		$Ten_quoc_gia = $_POST["Ten_quoc_gia"];
		$qr = "
				UPDATE quoc_gia SET
				Ten_quoc_gia ='$Ten_quoc_gia'
				WHERE MSQG='$MSQG'
		
		";
		mysql_query($qr);
		header("location:index.php?p=listquocgia");
	}
?>

    <tr>
      <td><table width="990">
        <tbody>
          
            <td width="982"><h1 align="center">Sửa Quốc Gia</h1></td>
          
        </tbody>
        
      </table>
        <p>&nbsp;</p>
        
        <form name="form1" method="post" action="">
          <table align="center" width="483" border="1">
            <tbody>
              <tr>
                <td width="96">Tên Quốc Gia:</td>
                <td width="371">
                <input type="text" name="Ten_quoc_gia" id="textfield" value="<?php echo $row_quocgia['Ten_quoc_gia']?>">
                 <input type="submit" name="btnSua" id="button" value="Sửa"></td>
              </tr>
            </tbody>
          </table>
          <p>&nbsp;</p>
        </form>
        
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
