
	     
        <ul id="nav1">
            <li><a href="index.php?p=Trangchu">TRANG CHỦ</a>
            </li>
            <li><a href="#">THỂ LOẠI</a>
                <ul>
                   	<?php
						 $danhsachtheloai = DanhSachTheLoai();
						while($row_danhsachtheloai = mysql_fetch_array($danhsachtheloai)){
					?>
                    <li><a href="index.php?p=theloaiphim&the_loai=<?php echo $row_danhsachtheloai['Ten_the_loai'] ?>&MSTL=<?php echo $row_danhsachtheloai['MSTL']?>"><?php echo $row_danhsachtheloai['Ten_the_loai'] ?></a></li>
                    <?php
						}
					?>	
                    
                </ul>
            </li>
            <li><a href="#">QUỐC GIA</a>
                <ul>
                   <?php
						 $danhsachquocgia = DanhSachQuocGia();
						while($row_danhsachquocgia = mysql_fetch_array($danhsachquocgia)){
					?>
                    <li><a href="index.php?p=quocgiaphim&Quoc_gia=<?php echo $row_danhsachquocgia['Ten_quoc_gia'] ?>&MSQG=<?php echo $row_danhsachquocgia['MSQG']?>"><?php echo $row_danhsachquocgia['Ten_quoc_gia'] ?></a></li>
                    <?php
						}
					?>	
                </ul>
            </li>
            	<?php
						 $danhsachloaiphim = DanhSachLoaiPhim();
						while($row_danhsachloaiphim = mysql_fetch_array($danhsachloaiphim)){
				?>
            <li><a href="index.php?p=loaiphim&Loai_phim=<?php echo $row_danhsachloaiphim['Ten_loai_phim'] ?>&MSLP=<?php echo $row_danhsachloaiphim['MSLP']?>"><?php echo $row_danhsachloaiphim['Ten_loai_phim'] ?></a></li>
           
            	<?php
						}
				?>
            <li><a href="index.php">PHIM MỚI</a></li>
        </ul>
        
	   