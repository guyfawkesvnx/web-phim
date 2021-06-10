

<?php
	$idUser = $_GET["idUser"];
	settype($idUser,"int");
	$row_user = ChiTietUser($idUser);
?>
<?php
	if(isset($_POST["btnSua"])){
		$idGruop = $_POST["idGroup"];
		$qr = "
				UPDATE user SET
				idGroup ='$idGruop'
				WHERE idUser='$idUser'
		
		";
		mysql_query($qr);
		header("location:index.php?p=listuser");
	}
?>

    <tr>
      <td><table width="991" >
        <tbody>
          
        <td width="983"><h1 align="center">Sửa User Group</h1></td>
          
        </tbody>
        
      </table>
        <p>&nbsp;</p>
        
        <form name="form1" method="post" action="">
          <table align="center" width="506" border="1">
            <tbody>
              <tr>
                <td width="125">idGroup:
                <td width="353">
                <input type="text" name="idGroup" id="textfield" value="<?php echo $row_user['idGroup']?>">
                 <input type="submit" name="btnSua" id="button" value="Sửa"></td>
              </tr>
            </tbody>
          </table>
          <p>&nbsp;</p>
        </form>
        
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
