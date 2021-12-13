<?php
include_once 'admin/configuration.php';
include 'includes/header.php'
?>
		
		<!-- Start Breadcrumbs -->
        <?php
            $objective_banner = ObjectiveBanner::getInstance();
            $row = $objective_banner -> getAll();
        ?>
		<section class="breadcrumbs overlay" style="background-image: url('admin/uploads/raw/<?php echo $row['objective_image']?>')" >
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2><?php echo $row ['title']?></h2>
						<!-- <h2>Aims & Objectives</h2> -->
						<ul class="bread-list">
							<li><a href="#">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="#">About</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
			
		<!-- Faqs -->
		<section class="faq page section">
            <?php 
                $objective_page_info = ObjectivePageInfo::getInstance();
                $row = $objective_page_info -> getAll();
            ?>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2> <?php echo $row['title'] ?></h2> 
							<p><?php echo $row['description'] ?></p>
                            <!-- <p>Demo College aims at developing the total child in a world of inconsistencies and frustration. A child’s life is modeled by the education he receives especially at the early state of life. We deploy all resources at our disposal under God to ensuring that every child that passes through Demo College is uniquely handled. We aim to meet each child as an individual and helping him or her to achieve his or her God given purpose on earth.  </p> -->
						</div>
					</div>
				</div>
			</div>
		</section>
<!--                <section class="ftco-services ftco-no-pb" >
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-light border-3">
                <div class="media block-6 d-block text-center shadow" data-aos="zoom-out" >
                    <div class="icon d-flex justify-content-center align-items-center border-5" data-aos="zoom-out" >
                        <span class="flaticon-reading "></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading text-dark">Special Education</h3>
                        <p class="txt-dark">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>    
            </div>
            <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4  bg-quarternary ">
                <div class="media block-6 d-block text-center shadow" data-aos="zoom-out">
                    <div class="icon d-flex justify-content-center align-items-center border-3" data-aos="zoom-out" >
                        <span class="flaticon-teacher"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading ">Certified Teachers</h3>
                        <p class="txt-white">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>      
            </div>
        
            <div class="col-md-4 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-light border-3" >
                <div class="media block-6 d-block text-center shadow" data-aos="zoom-out" >
                    <div class="icon d-flex justify-content-center align-items-center border-5" data-aos="zoom-out" >
                        <span class="flaticon-books"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading text-dark">Book &amp; Library</h3>
                        <p class="txt-dark">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>      
            </div>
           
        </div>
    </div>
</section>-->
		<!--/ End Faqs -->
			
<?php
include 'includes/footer.php'
?>