<div class="section_main">
		<?php
			 $phimmoinhat_bonphim = PhimMoiNhat_BonPhim();
			while($row_phimmoinhat_bonphim = mysql_fetch_array($phimmoinhat_bonphim)){
		?>

	<div class="slideshow-container">

		<div class="mySlides fade">
		  <a href="index.php?p=thongtin&id=<?php echo $row_phimmoinhat_bonphim['id']?>" title="Xem Phim <?php echo $row_phimmoinhat_bonphim['Ten_phim'] ?>"> <img src="./images/images1/<?php echo $row_phimmoinhat_bonphim['Hinh_2'] ?>" >
		  
		  <div class="slides-name">
		  	<h1> <?php echo $row_phimmoinhat_bonphim['Ten_phim']?> </h1>
		  </div>
		  
		  </a>
		</div>
		
			
	</div>
  	
  		<?php
					}
			?> 	
			
	  	<div class="prev" onclick="plusSlides(-1)" id="previous">&#10094;</div>
		<div class="next" onclick="plusSlides(1)" id="next">&#10095;</div>
	  
		  <br>

		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span>  
		  <span class="dot" onclick="currentSlide(4)"></span>
		</div>  
    
    

    <div id=main>
         <div class="all">	
         	<h4 align="center">PHIM MỚI NHẤT</h4>
         </div>
         
         
         
         <?php
			$sophim1trang = 12;
			if(isset($_GET["Trang"])){
				$trang = $_GET["Trang"];
				settype($trang,"int");
			}else{
				$trang = 1;
			}
			$from = ($trang - 1) * $sophim1trang;
	        $phimmoinhat = PhanTrang( $from, $sophim1trang);
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
         
         
         
         
         
         
         
         
         
         
         
         
          
         
         <div class="phantrang">
         	
         	
         	<?php
			 	$t = PhimMoiNhat();
			    $tongsophim = mysql_num_rows($t);
			 	$tongsotrang = ceil ($tongsophim/$sophim1trang);
			 	for($i=1;$i<=$tongsotrang;$i++){
			?>
			 <a <?php if($i==$trang) echo "style='background-color:#2AA5F2;color: #FFFFFF;'"; ?> href="index.php?p=Trangchu&Trang=<?php echo $i ?>"><?php echo $i ?></a>
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

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<script>
	
			$(document).ready(function() {
			$('.prev').on('click', function(){
			// Change to the previous image
			$('#im_' + currentImage).stop().fadeOut(1);
			decreaseImage();
			$('#im_' + currentImage).stop().fadeIn(1);
			}); 
			$('.next').on('click', function(){
			// Change to the next image
			$('#im_' + currentImage).stop().fadeOut(1);
			increaseImage();
			$('#im_' + currentImage).stop().fadeIn(1);
			}); 

			var currentImage = 1;
			var totalImages = 3;


			function increaseImage() {
			/* Increase currentImage by 1.
			* Resets to 1 if larger than totalImages
			*/
			++currentImage;
			if(currentImage > totalImages) {
			currentImage = 1;
			}

			}
			function decreaseImage() {
			/* Decrease currentImage by 1.
			* Resets to totalImages if smaller than 1
			*/
			--currentImage;
			if(currentImage < 1) {
			currentImage = totalImages;
			}

			}
			window.setInterval(function() {
				$('.next').click();
				}, 3333);
			});
	</script>

    