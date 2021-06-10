<div class="section_main1">
    <div id=main>
         <div class="all">	
         	<h4 align="center">Phim Cần Tìm</h4>
         </div>
         
         
          <?php
		  $tukhoa = $_GET["q"];
          $phimmoinhat = TimKiem($tukhoa);
  				while($row_phimmoinhat = mysql_fetch_array($phimmoinhat)){
	        ?>
       
         <div class="sanpham1">
         	<ul>
         		<li><a href="index.php?p=thongtin&id=<?php echo $row_phimmoinhat['id']?>" title="Xem Phim <?php echo $row_phimmoinhat['Ten_phim'] ?>">
         			<img id="hinh" src="./images/images1/<?php echo $row_phimmoinhat['Hinh'] ?>"  />
         			<div class="info">
						<div class="name">
							<a href="index.php?p=thongtin&id=<?php echo $row_phimmoinhat['id']?>" 	title="Xem Phim <?php echo $row_phimmoinhat['Ten_phim']?> - <?php echo $row_phimmoinhat['Ten_phim_2']?>"><?php echo $row_phimmoinhat['Ten_phim'] ?></a>
						</div>
						<div class="name2"><?php echo $row_phimmoinhat['Ten_phim_2'] ?></div>
					</div>
        			<div class="stats">
						<div class="year"><?php echo $row_phimmoinhat['NamSX'] ?></div>
						<span class="liked"><img src="./images/xem.png" ><?php echo $row_phimmoinhat['Luot_xem'] ?></span>
					</div>
         		</a></li>
         	</ul>
         </div>
         
         
         <?php
			}
		?>
         
         
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

