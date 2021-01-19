<?php include "includes/header.php" ?>
	<!-- content -->
		<div class="wrap__container">
			<!-- slider -->
				<div class="slider-container">
			        <div class="slider">
			            <img src="assets/img/slider/slide-1.jpg" title="" />
			            <img src="assets/img/slider/slide-2.jpg" title="" />
			            <img src="assets/img/slider/slide-3.jpg" title="" />
			            <img src="assets/img/slider/slide-4.jpg" title="" />
			            <img src="assets/img/slider/slide-5.jpg" title="" />
			            <button type="button" onclick="getPrevImage()" class="btn__slider" id="btnPrev"><i class="fas fa-2x fa-chevron-left"></i></button>
			            <button type="button" onclick="getNextImage()" class="btn__slider" id="btnNext"><i class="fas fa-2x fa-chevron-right"></i></button>
			            <h1 id="titleSlider"></h1>
			        </div>
			    </div>	   
			<!-- slider -->
			<?php include "includes/content.php" ?>
		</div>
<?php include "includes/footer.php" ?>

<!-- JavaScript -->
	<script type="text/javascript" src="assets/js/slider.js"></script>
	<script>
	        var indexCurrent = 1;     
	        var loop = true;  
	        var showbutton =true;  
	        var duration = 3000;  
	        initSlider();
	</script>
