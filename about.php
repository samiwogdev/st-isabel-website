<?php
include_once 'admin/configuration.php';
include 'includes/header.php' 
?>
		
		<!-- Start Breadcrumbs -->
		<?php 
		 $banner = Banner::getInstance();
    	 $row = $banner->getAll();
		?>
        <section class="breadcrumbs overlay" style="background-image: url('admin/uploads/raw/<?php echo $row['banner_image']?>')" >
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- <img src=""style="background: url('../../images/home.png');" alt=""> -->
						<h2 data-aos="fade-left"><?php echo $row['title']?></h2>
						<!-- <h2 data-aos="fade-left">About Demo College</h2> -->
						<ul class="bread-list">
							<li data-aos="fade-right"><a href="#">The School<i class="fa fa-angle-right"></i></a></li>
							<li class="active" data-aos="fade-left"><a href="#">Who We Are</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- About US -->
		<section class="about-us section">
	<?php 
		$who_we_are_page_info = who_we_are_page_info::getInstance();
    	$row = $who_we_are_page_info->getAll();
	?>
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-12">
						<div class="single-image overlay" data-aos="fade-right">
							<!-- <img src="images/about1.jpg" alt="#"> -->
							<img src="admin/uploads/raw/<?php echo $row['page_image'] ?>"  alt="#" style="height: 250px">

                                                    <!-- <img src="images/slider/prem.jpg" alt="#"> -->
							<!-- <img src="images/enroll1-bg.jpg" alt="#" style="padding-top: 20px;"> -->

							<!-- <a href="https://www.youtube.com/watch?v=UalTfOIDQ7M" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a> -->
						</div>
					</div>
					<div class="col-lg-7 col-12" style="text-align: justify">
						<div class="about-text" data-aos="fade-left">
							<h2><?php echo $row['title']?></h2>
							<p><?php echo $row['description']?></p>
							<!-- <h2>About Demo College</h2> -->
							<!-- <p>Demo College is an integral part of the community both educationally and socially. The school looks bright and welcoming. We have a better learning environment for students. The school offers wide range of favourable learning environments for students. We have a well equipped science laboratory, library, hostel accommodation, transport facilities, a well equipped ICT centre, wide playing ground for sports and recreational activities, drinkable water supply, constant power supply, school farm and others.</p> -->
							<!-- <p>The school is multicultural and co-educational for both male and female students. Our main concern is not all about the educational needs of the students alone, which is of paramount importance to us. We are also deeply concern about the moral and character formation of the students. One of our vision is to help our students discover their potentials, develop and maximize them.</p> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End About US -->
		
		<!-- Fun Facts -->
<!--		<div class="fun-facts overlay" data-stellar-background-ratio="0.5" style="margin-bottom: 60px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-6">
						 Single Fact 
						<div class="single-fact">
							<i class="fa fa-institution"></i>
							<div class="number"><span class="counter">80</span>k+</div>
							<p>Active Cources</p>
						</div>
						/ End Single Fact 
					</div>
					<div class="col-lg-3 col-md-6 col-6">
						 Single Fact 
						<div class="single-fact">
							<i class="fa fa-graduation-cap"></i>
							<div class="number"><span class="counter">33</span>k+</div>
							<p>Active Students</p>
						</div>
						/ End Single Fact 
					</div>
					<div class="col-lg-3 col-md-6 col-6">
						 Single Fact 
						<div class="single-fact">
							<i class="fa fa-video-camera"></i>
							<div class="number"><span class="counter">278</span>+</div>
							<p>Video Cources</p>
						</div>
						/ End Single Fact 
					</div>
					<div class="col-lg-3 col-md-6 col-6">
						 Single Fact 
						<div class="single-fact">
							<i class="fa fa-trophy"></i>
							<div class="number"><span class="counter">308</span>+</div>
							<p>Awards Won</p>
						</div>
						/ End Single Fact 
					</div>
				</div>
			</div>
		</div>-->
		<!--/ End Fun Facts -->
		
	<!-- Call To Action -->
<!--		<section class="cta" data-stellar-background-ratio="0.5" style="margin-bottom: 60px;">
			<div class="container">>
			<div class="container">
				<div class="row">
					<div class="col-lg-5 offset-lg-6 col-12">
						<div class="cta-inner overlay">
							<div class="text-content">
								<h2>School Anthem</h2>
								<p>Demo, the citadel of knowledge <br>
								Demo, my school<br>
								We are pattern unto God's moral life<br>
								Fountain of knowledge and character <br>
								In full stature <br>
								A total Nigerian Child<br>
								Demo Demo<br>
								Leads the way..</p><br>
								<h2>School Song</h2>
                                                                <p>Demo , Demo,<br>
								We are the success Model<br>
								We are the Peculiar Students <br>
                                                                We are the Future Leaders <br>
								We are the Future Heroes <br>
								In all ares of Life<br>
								We are the Best</p>
								<div class="button">
									<a class="btn primary wow fadeInUp" href="contact.php" >Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>-->
		<!--/ End Call To Action -->
		
			<?php
include 'includes/footer.php' 
?>