<header class="header stricky">

	<div class="containerFull h-100">

		<div class="mainMenu h-100 d-flex justify-content-between align-items-center">

			<div class="leftLogo">
				<a href="index.php">
					<img class="logo2" src="images/logo.png" />
					<img class="logo1" src="images/logo-2.png" />
				</a>
			</div>
			<div class="rightMenu d-none d-lg-block">
				<ul class="headerMenu d-flex justify-content-end align-bottom">
					<li class="<?php if ($page == 'home') {
									echo 'active';
								} ?>"><a href="index.php">Home</a></li>
					<li class="<?php if ($page == 'about') {
									echo 'active';
								} ?>"><a href="about.php">About us</a></li>
					<li class="<?php if ($page == 'trasnformer-maintanenece') {
									echo 'active';
								} ?>"><a href="trasnformer-maintanenece.php">HT Transformer Maintenance</a></li>
					<li class="<?php if ($page == 'electrical-contracting') {
									echo 'active';
								} ?>"><a href="electrical-contracting.php">Electrical Contracting</a></li>
					<li class="<?php if ($page == 'clients') {
									echo 'active';
								} ?>"><a href="our-clients.php">Our Clientele</a></li>
					<li class="<?php if ($page == 'contact') {
									echo 'active';
								} ?>"><a href="contact.php">Contact us</a></li>
				</ul>
			</div>
			<button class="btnMenu d-block d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa fa-bars"></i></button>

		</div>
	</div>
</header>






<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<div class="sidelogo">
			<a href="index.php">
			<img src="images/logo-2.png" />
			</a>
		</div>
		<h5 id="offcanvasRightLabel">&nbsp;</h5>
		<button type="button" class="btn-close ps-4 text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<div class="innerMenu">
			<ul>
				<li class="<?php if ($page == 'home') {
								echo 'active';
							} ?>"><a href="index.php">Home</a></li>
				<li class="<?php if ($page == 'about') {
								echo 'active';
							} ?>"><a href="about.php">About us</a></li>
				<li class="<?php if ($page == 'trasnformer-maintanenece') {
								echo 'active';
							} ?>"><a href="trasnformer-maintanenece.php">HT Transformer Maintenance</a></li>
				<li class="<?php if ($page == 'electrical-contracting') {
								echo 'active';
							} ?>"><a href="electrical-contracting.php">Electrical Contracting</a></li>
				<li class="<?php if ($page == 'clients') {
								echo 'active';
							} ?>"><a href="our-clients.php">Our Clientele</a></li>
				<li class="<?php if ($page == 'contact') {
								echo 'active';
							} ?>"><a href="contact.php">Contact us</a></li>
			</ul>
		</div>
	</div>
	<div class="followUs">
		<h3 class="text fontWeight500">Follow Us</h3>
		<ul class="socialLink">
			<li><a class="px-2" href="#"><i class="fab fa-facebook-f"></i></a></li>
			<li><a class="px-2" href="#"><i class="fab fa-x-twitter"></i></a></li>
			<li><a class="px-2" href="#"><i class="fab fa-linkedin-in"></i></a></li>
			<li><a class="px-2" href="#"><i class="fab fa-instagram"></i></a></li>
		</ul>
	</div>
</div>