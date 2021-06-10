
    <tr>
      <td><table width="989">
        <tbody>
          <tr>
            <td width="981"><h1 align="center">Danh Sách Thể Loại</h1></td>
          </tr>
        </tbody>
      </table>
        <table align="center" width="650" border="1">
          <tbody>
            <tr>
              <td align="center">MSTL</td>
              <td align="center">Tên Thể Loại</td>
              <td align="center"><a href="index.php?p=them_theloai">Thêm</a></td>
            </tr>
            <tr>
             <?php
				$theloai = DanhSachTheLoai();
				while($row_theloai = mysql_fetch_array($theloai)){
					ob_start();
				?>
             
              <td align="center">{MSTL}</td>
              <td align="center">{Ten_the_loai}</td>
              <td align="center"><a href="index.php?p=sua_theloai&MSTL={MSTL}">Sửa</a> -  <a onClick="return confirm('Bạn có chắc muốn xóa không?')" href="xoa_theloai.php?MSTL={MSTL}">Xóa</a></td>
            </tr>
            <?php
					$s =ob_get_clean();
					$s = str_replace("{MSTL}",$row_theloai["MSTL"],$s);
					$s = str_replace("{Ten_the_loai}",$row_theloai["Ten_the_loai"],$s);
					echo $s;
				}
				
			?>
              
          </tbody>
        </table>
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
 