

<?php
	if(isset($_POST["btnThem"])){
		$Ten_the_loai = $_POST["Ten_the_loai"];
		$qr = "
				INSERT INTO the_loai 
				VALUES(null,'$Ten_the_loai')
		";
		mysql_query($qr);
		header("location:index.php?p=listtheloai");
	}
?>

    <tr>
      <td><table width="1174" >
        <tbody>
          
		<td width="725"><h1 align="center">Thêm Thể Loại</h1></td>
          
        <td width="10"></tbody>
        
      </table>
        <p>&nbsp;</p>
        
        <form name="form1" method="post" action="">
          <table align="center" width="537" border="1">
            <tbody>
              <tr>
                <td width="161">Tên Thể Loại</td>
                <td width="360"><input type="text" name="Ten_the_loai" id="textfield"> <input type="submit" name="btnThem" id="button" value="Thêm"></td>
              </tr>
            </tbody>
          </table>
          <p>&nbsp;</p>
        </form>
        
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
 