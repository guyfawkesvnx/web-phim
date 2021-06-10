
    <tr>
      <td><table width="991">
        <tbody>
          <tr>
            <td width="983"><h1 align="center">Danh Sách User</h1></td>
          </tr>
        </tbody>
      </table>
        <table align="center" width="849" border="1">
          <tbody>
            <tr>
              <td align="center" width="100">idUser</td>
              <td align="center" width="137">Username</td>
              <td align="center" width="136">Password</td>
              <td align="center" width="91">Gmail</td>
              <td align="center" width="117">idGroup</td>
            </tr>
            <tr>
             <?php
				$sophim1trang = 13;
				if(isset($_GET["Trang"])){
					$trang = $_GET["Trang"];
					settype($trang,"int");
				}else{
					$trang = 1;
				}
				$from = ($trang - 1) * $sophim1trang;
				$user = PhanTranguser($from, $sophim1trang);
				while($row_user = mysql_fetch_array($user)){
					ob_start();
				?>
             
              <td align="center">{idUser}</td>
              <td align="center">{Username}</td>
              <td align="center">{Password}</td>
              <td align="center">{Gmail}</td>
              <td align="center">{idGroup}</td>
              <td align="center" width="228"><a href="index.php?p=sua_user&idUser={idUser}">Sửa</a> -  <a onClick="return confirm('Bạn có chắc muốn xóa không?')" href="xoa_user.php?idUser={idUser}">Xóa</a></td>
            </tr>
            <?php
					$s =ob_get_clean();
					$s = str_replace("{idUser}",$row_user["idUser"],$s);
					$s = str_replace("{Username}",$row_user["Username"],$s);
					$s = str_replace("{Password}",$row_user["Password"],$s);
					$s = str_replace("{Gmail}",$row_user["Gmail"],$s);
					$s = str_replace("{idGroup}",$row_user["idGroup"],$s);
					echo $s;
				}
				
			?>
              
          </tbody>
        </table>
        	<div class="phantrang">
         	
         	
         	<?php
			 	$t = user();
			    $tongsophim = mysql_num_rows($t);
			 	$tongsotrang = ceil ($tongsophim/$sophim1trang);
			 	for($i=1;$i<=$tongsotrang;$i++){
			?>
			 <a <?php if($i==$trang) echo "style='background-color:#2AA5F2;color: #FFFFFF;'"; ?> href="?p=listuser&Trang=<?php echo $i ?>"><?php echo $i ?></a>
			<?php	
				}
			 ?>
         </div>
        
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
