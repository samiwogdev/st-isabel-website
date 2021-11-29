<?php
include_once 'admin/configuration.php';
include 'includes/header.php'
?>
<!-- Start Breadcrumbs -->
<?php
        $laboratories_banner = Laboratories_banner::getInstance();
        $row = $laboratories_banner->getAll();
?>
<section class="breadcrumbs overlay" style="background-image: url('admin/uploads/raw/<?php echo $row['laboratories_image']?>')" data-aos='zoom-out'>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo $row['title']?></h2>
                <ul class="bread-list">
                    <li><a href="#">Facilities<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="#">School Laboratories  </a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Courses -->
<section class="courses single section ">
    <div class="container shadow-lg">
        <div class="row">
            <div class="col-12">
                <div class="single-main">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <section class="home-slider owl-carousel">
                                <div class="slider-item overlay" style="background-image:url('images/facilities/lab.jpg'); height: 450px" data-aos="zoom-out">
                                    <div class="container">
                                        <div class="slider-text" data-scrollax-parent="true">
                                            <div class="col-md-12 ">
                                                <h1 class="mb-4 text-white pt-3 " style="text-shadow: 2px 2px 1px rgba(0,0,0,.5); font-size: 22px; text-transform: uppercase" >Science Laboratory </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="slider-item overlay " style="background-image:url('images/facilities/food.jpg'); height: 450px" data-aos="zoom-out">
                                    <div class="container">
                                        <div class="slider-text" data-scrollax-parent="true">
                                            <div class="col-md-12">
                                                <h1 class="mb-4 text-white pt-3" style="text-shadow: 2px 2px 1px rgba(0,0,0,.5); font-size: 22px; text-transform: uppercase" >Food and Nutrition Laboratory </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item overlay " style="background-image:url('images/facilities/computer.jpg'); height: 450px" data-aos="zoom-out">
                                    <div class="container">
                                        <div class="slider-text" data-scrollax-parent="true">
                                            <div class="col-md-12">
                                                <h1 class="mb-4 text-white pt-3" style="text-shadow: 2px 2px 1px rgba(0,0,0,.5); font-size: 22px; text-transform: uppercase" >Computer Laboratory </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <?php 	
                        $laboratories_list = Laboratories_list::getInstance();
                        $result = $laboratories_list -> getAll();
                        ?>
                        <div class="col-lg-4 col-12">
                            <!-- Course Features -->
                            <div class="course-feature">
                                <div class="feature-main">
                                    <h4>School Laboratories</h4>
                                    <!-- Single Feature -->
                                    <?php foreach ($result as $row) { ?>
                                    <div class="single-feature">
                                        <i class="<?php echo $row['icons']?>"></i>
                                        <!-- <i class="fa fa-files-o"></i> -->
                                        <span class="label"><?php echo $row['description']?></span>
                                        <span class="value"><?php echo $row['numbers']?></span>
                                     
                                    </div>
                                    <?php } ?>  
                   
                                    <!--/ End Single Feature -->
                                </div>
                            </div>
                            <!--/ End Course Features -->
                        </div>	
                    </div>	
                    <div class="row">
                        <?php 
                        $laboratories_info_page = Laboratories_info_page::getInstance();
                        $row = $laboratories_info_page -> getAll();
                        ?>
                        <div class="col-12">
                            <div class="content">
                                <h2><a href="#"><?php echo $row['title'] ?></a></h2>
                                <!-- <h2><a href="#">Science Laboratories</a></h2> -->
                                <p><?php echo $row['description'] ?></p>
                                <!-- <p>Students of Demo College are exposed to a series of well-articulated practical sessions in the course of their study. Teaching is synchronized with practical classes to facilitate teaching and learning. We develop students with balanced knowledge. Apart from science laboratories, the school has laboratories for language, electronics, introductory technology, computing and typewriting. This is unprecedented and unrivaled within and outside the country.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Courses -->	
<?php
include 'includes/footer.php'
?>