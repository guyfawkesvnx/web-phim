
<?php
	if(isset($_POST["btnThem"])){
		$Ten_quoc_gia = $_POST["Ten_quoc_gia"];
		$qr = "
				INSERT INTO quoc_gia
				VALUES(null,'$Ten_quoc_gia')
		";
		mysql_query($qr);
		header("location:index.php?p=listquocgia");
	}
?>

    <tr>
      <td><h1 align="center">Thêm Quốc Gia</h1>
        <p>&nbsp;</p>
        
        <form name="form1" method="post" action="">
          <table align="center" width="559" border="1">
            <tbody>
              <tr>
                <td width="184">Tên Quốc Gia</td>
                <td width="359"><input width="201" type="text" name="Ten_quoc_gia" id="textfield"> <input type="submit" name="btnThem" id="button" value="Thêm"></td>
              </tr>
            </tbody>
          </table>
          <p>&nbsp;</p>
        </form>
        
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
