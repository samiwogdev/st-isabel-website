		<?php
		include 'includes/header.php' 
?>
		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>Contact Us</h2>
						<ul class="bread-list">
							<li><a href="#">Contact Page<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Contact Us -->
		<section id="contact" class="contact section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title" style="padding-bottom: 30px;">
							<h2><span>Contact</span> Information</h2>
							<!-- <p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendrerit, sollicitudin nec ante.  </p> -->
						</div>
					</div>
				</div>
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="contact-map">
								<!-- Map -->
								<div id="map">
									 <iframe src="" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
								<!--/ End Map -->
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12" >
							<div class="form-head">
								<!-- Form -->
								<form class="form" action="mail/mail.php">
									<div class="form-group">
										<input name="name" type="text" placeholder="Enter Name" required>
									</div>
									<div class="form-group">
										<input name="email" type="email" placeholder="Email Address" required>
									</div>
									<div class="form-group">
										<input name="subject" type="text" placeholder="subject" required>
									</div>
									<div class="form-group">
										<textarea name="message" placeholder="Comment" required></textarea>
									</div>
									<div class="form-group">
										<center>
										<div class="button">
											<button type="submit" class="btn primary">Send Message</button>
										</div>
										</center>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				<div class="contact-bottom" >
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<!-- Contact-Info -->
							<div class="contact-info">
								<div class="icon"><i class="fa fa-map"></i></div>
								<h3>Location</h3>
								<p>Demo international College, Ibadan,Oyo State.</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<!-- Contact-Info -->
							<div class="contact-info">
								<div class="icon"><i class="fa fa-envelope"></i></div>
								<h3>Email Address</h3>
								<a href="mailto:information@gmail.com">demo_01@yahoo.co.uk</a>
								<!-- <a href="mailto:admission@myuniversity.com">admission@yourwebsite.com</a> -->
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<!-- Contact-Info -->
							<div class="contact-info">
								<div class="icon"><i class="fa fa-phone"></i></div>
								<h3>Get in Touch</h3>
								<p>+ (234) 803 324 0047</p>

								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->
		
		<?php
		include 'includes/footer.php' 
?>