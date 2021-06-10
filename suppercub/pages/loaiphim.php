<div class="section_main1">
    <div id=main>
        <?php
			$MSLP = $_GET["MSLP"];
			settype($MSLP,"int");
			$menuloaiphim = MenuLoaiPhim($MSLP);
			$row_menuloaiphim = mysql_fetch_array($menuloaiphim);
   
   		?>
         <div class="all">	
         	<h4 align="center"><?php echo $row_menuloaiphim['Ten_loai_phim'] ?></h4>
         </div>
         	<?php
			$MSLP = $_GET["MSLP"];
			settype($MSLP,"int");
		?>
         
		   <?php
			$sophim1trang = 12;
			if(isset($_GET["Trang"])){
				$trang = $_GET["Trang"];
				settype($trang,"int");
			}else{
				$trang = 1;
			}
			$from = ($trang - 1) * $sophim1trang;	
		
			$loaiphim = PhanTrangLoaiPhim($MSLP,$from, $sophim1trang);
			while($row_loaiphim = mysql_fetch_array($loaiphim)){
		?>
         

         <div class="sanpham1">
         	<ul>
         		<li><a href="index.php?p=thongtin&id=<?php echo $row_loaiphim['id']?>" title="<?php echo $row_loaiphim['Ten_phim'] ?> - <?php echo $row_loaiphim['Ten_phim_2'] ?>">
         			<img id="hinh" src="./images/images1/<?php echo $row_loaiphim['Hinh'] ?>"  />
         			<div class="info">
						<div class="name">
							<a href="index.php?p=thongtin&id=<?php echo $row_loaiphim['id']?>" 	title="<?php echo $row_loaiphim['Ten_phim'] ?> - <?php echo $row_loaiphim['Ten_phim_2'] ?>"><?php echo $row_loaiphim['Ten_phim'] ?></a>
						</div>
						<div class="name2"><?php echo $row_loaiphim['Ten_phim_2'] ?></div>
					</div>
        			<div class="stats">
						<div class="year"><?php echo $row_loaiphim['NamSX'] ?></div>
						<span class="liked"><img src="./images/xem.png" ><?php echo $row_loaiphim['Luot_xem'] ?></span>
					</div>
         		</a></li>
         	</ul>
         </div>
         
         
         <?php
					}
			?>	
         
         
         <div class="phantrang">
         	
         	
         	<?php
			 	$t = PhimTheoLoaiPhim($MSLP);
			    $tongsophim = mysql_num_rows($t);
			 	$tongsotrang = ceil ($tongsophim/$sophim1trang);
			 	for($i=1;$i<=$tongsotrang;$i++){
			?>
			 <a <?php if($i==$trang) echo "style='background-color:#2AA5F2;color: #FFFFFF;'"; ?> href="index.php?p=loaiphim&MSLP=<?php echo $MSLP ?>&Trang=<?php echo $i?>"><?php echo $i ?></a>
			<?php	
				}
			 ?>
         </div>
         
         
         
    </div>
    
    <div id= right>
       <div class="hot">
       		<h3> Phim Hot </h3>
       </div>
       
       <?php
	 		$phimmoinhat_sauphim = PhimXemNhieuNhat_SauPhim();
			while($row_phimmoinhat_sauphim = mysql_fetch_array($phimmoinhat_sauphim)){
		?>
       
       <div class="right2">  
      	   <ul>
                <li>
               <a href="index.php?p=thongtin&id=<?php echo $row_phimmoinhat_sauphim['id']?>" title="<?php echo $row_phimmoinhat_sauphim['Ten_phim'] ?> - <?php echo $row_phimmoinhat_sauphim['Ten_phim_2'] ?> (<?php echo $row_phimmoinhat_sauphim['NamSX'] ?>) ">
               <div class="avatar">
                <img  src="./images/images1/<?php echo $row_phimmoinhat_sauphim['Hinh_2'] ?>">
				 </div>
                
                <div class="ten_phim">
					<?php echo $row_phimmoinhat_sauphim['Ten_phim'] ?>
				</div>
                <div class="ten_phim_2">   
                    <?php echo $row_phimmoinhat_sauphim['Ten_phim_2'] ?> (<?php echo $row_phimmoinhat_sauphim['NamSX'] ?>)
                </div>
			   
            </a>
            <p class="view"><?php echo $row_phimmoinhat_sauphim['Luot_xem'] ?> lượt xem</p>
         
	   			</li>
		   </ul>
             
               <?php
					}
				?>	
                            
    
       	   
       </div>
       
   
</div>	


</div>