

    <tr>
      <td><table width="990">
        <tbody>
          <tr>
            <td width="982"><h1 align="center">Danh Sách Quốc Gia</h1></td>
          </tr>
        </tbody>
      </table>
        <table align="center" width="650" border="1">
          <tbody>
            <tr>
              <td align="center">MSQG</td>
              <td align="center">Tên Quốc Gia</td>
              <td align="center"><a href="index.php?p=them_quocgia">Thêm</a></td>
            </tr>
            <tr>
             <?php
				$quocgia = DanhSachQuocGia();
				while($row_quocgia = mysql_fetch_array($quocgia)){
					ob_start();
				?>
             
              <td align="center">{MSQG}</td>
              <td align="center">{Ten_quoc_gia}</td>
              <td align="center"><a href="index.php?p=sua_quocgia&MSQG={MSQG}">Sửa</a> -  <a onClick="return confirm('Bạn có chắc muốn xóa không?')" href="xoa_quocgia.php?MSQG={MSQG}">Xóa</a></td>
            </tr>
            <?php
					$s =ob_get_clean();
					$s = str_replace("{MSQG}",$row_quocgia["MSQG"],$s);
					$s = str_replace("{Ten_quoc_gia}",$row_quocgia["Ten_quoc_gia"],$s);
					echo $s;
				}
				
			?>
              
          </tbody>
        </table>
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
