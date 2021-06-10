
    <tr>
      <td><table width="990">
        <tbody>
          <tr>
            <td width="982"><h1 align="center">Danh Sách Comment</h1></td>
          </tr>
        </tbody>
      </table>
        <table align="center" width="684" border="1">
          <tbody>
            <tr>
              <td align="center" width="134">CM_ID</td>
              <td align="center" width="144">Message</td>
              <td align="center" width="114">Time</td>
              <td align="center" width="84">ID Phim</td>
              <td align="center" width="87">Xem</td>             
              <td align="center" width="81">Xóa</td>
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
				$comment = PhanTrangComment($from, $sophim1trang);
				while($row_comment = mysql_fetch_array($comment)){
					ob_start();
				?>
             
              <td align="center">{CM_ID}</td>
              <td align="center">{Message}</td>
              <td align="center">{Time}</td>
              <td align="center">{id}</td>
              <td align="center"><a href='../index.php?p=thongtin&id={id}'>Link</a></td>
			  <td align="center"><a onClick="return confirm('Bạn có chắc muốn xóa không?')" href="xoa_comment.php?CM_ID={CM_ID}">Xóa</a></td>
					
            </tr>	
            <?php
					$s =ob_get_clean();
					$s = str_replace("{CM_ID}",$row_comment["CM_ID"],$s);
					$s = str_replace("{Message}",$row_comment["Message"],$s);
					$s = str_replace("{Time}",$row_comment["Time"],$s);
					$s = str_replace("{id}",$row_comment["id"],$s);
					echo $s;
				}
				
			?>
            
            
          </tbody>
        </table>
        	<div class="phantrang">
         	
         	
         	<?php
			 	$t = comment();
			    $tongsophim = mysql_num_rows($t);
			 	$tongsotrang = ceil ($tongsophim/$sophim1trang);
			 	for($i=1;$i<=$tongsotrang;$i++){
			?>
			 <a <?php if($i==$trang) echo "style='background-color:#2AA5F2;color: #FFFFFF;'"; ?> href="?p=listcomment&Trang=<?php echo $i ?>"><?php echo $i ?></a>
			<?php	
				}
			 ?>
         </div>
        </td>
    </tr>
 