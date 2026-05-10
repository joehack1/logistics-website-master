<?php include 'head.php' ?>
	<body data-scrolling-animations="true">
		<div class="sp-body">

<?php include 'header.php' ?>

			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>PHOTO GALLERY</h1></a>
					<div class="pull-right">
						<a href="index.php"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="gallery.php">Gallery</a>
					</div>
				</div>
			</div>

			<div class="container-fluid block-content">
				<div class="text-center hgroup wow zoomInUp" data-wow-delay="0.3s">
					<h1>OUR GALLERY</h1>
					<h2>A glimpse into our day-to-day logistics operations</h2>
				</div>

				<style>
					.gallery-grid {
						display: grid;
						grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
						gap: 18px;
						margin-top: 25px;
						margin-bottom: 30px;
					}
					.gallery-card {
						position: relative;
						border-radius: 10px;
						overflow: hidden;
						box-shadow: 0 10px 24px rgba(0, 0, 0, 0.14);
						background: #fff;
					}
					.gallery-card img {
						width: 100%;
						height: 220px;
						object-fit: cover;
						transition: transform 0.45s ease, filter 0.45s ease;
					}
					.gallery-card:hover img {
						transform: scale(1.08);
						filter: contrast(1.05);
					}
				</style>

				<div class="gallery-grid">
					<div class="gallery-card wow fadeInUp" data-wow-delay="0.1s"><img src="gallery/bnjc.jpeg" alt="Ubuntu gallery image 1"></div>
					<div class="gallery-card wow fadeInUp" data-wow-delay="0.15s"><img src="gallery/cd.jpeg" alt="Ubuntu gallery image 2"></div>
					<div class="gallery-card wow fadeInUp" data-wow-delay="0.2s"><img src="gallery/cvbnj.jpeg" alt="Ubuntu gallery image 3"></div>
					<div class="gallery-card wow fadeInUp" data-wow-delay="0.25s"><img src="gallery/df.jpeg" alt="Ubuntu gallery image 4"></div>
					<div class="gallery-card wow fadeInUp" data-wow-delay="0.3s"><img src="gallery/fd.jpeg" alt="Ubuntu gallery image 5"></div>
					<div class="gallery-card wow fadeInUp" data-wow-delay="0.35s"><img src="gallery/fef.jpeg" alt="Ubuntu gallery image 6"></div>
					<div class="gallery-card wow fadeInUp" data-wow-delay="0.4s"><img src="gallery/h.jpeg" alt="Ubuntu gallery image 7"></div>
					<div class="gallery-card wow fadeInUp" data-wow-delay="0.45s"><img src="gallery/kjn.jpeg" alt="Ubuntu gallery image 8"></div>
					<div class="gallery-card wow fadeInUp" data-wow-delay="0.5s"><img src="gallery/wde.jpeg" alt="Ubuntu gallery image 9"></div>
					<div class="gallery-card wow fadeInUp" data-wow-delay="0.55s"><img src="gallery/wsa.jpeg" alt="Ubuntu gallery image 10"></div>
				</div>
			</div>

<?php include 'footer.php' ?>
		</div>

		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script src="assets/switcher/js/switcher.js"></script>
		<script src="assets/owl-carousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="assets/isotope/jquery.isotope.min.js"></script>
		<script src="js/jquery.smooth-scroll.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
		<script src="js/theme.js"></script>
	</body>
</html>
