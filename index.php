<?php
include_once 'admin/configuration.php';
include_once 'includes/header.php';
?>	

<!--  -->		
<section>
    <div class="container-fluid pl-0 pr-0"  >

        <div id="carouselExampleIndicators" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner " style="">

                <!-- first slide -->
                <div class="carousel-item active overlay" style="background-image: url('images/slider/corona.jpg')">

                    <div class="carousel-caption d-md-block">
                        <h3 class="icon-container" data-animation="animated bounceInDown" style="font-size: 60px; text-shadow: 2px 2px 1px rgba(0,0,0,.5);">
                            WELCOME </h3>

                        <div class="" >
                            <h1 style="font-size: 50px; font-weight: 400px" data-animation="animated lightSpeedIn">  To Demo International School</h1>
                        </div>
                        <!--                  flipInX lightSpeedIn zoomInLeft-->
                        <button class="btn btn-danger btn-lg mt-4" data-animation="animated bounceInUp">Read More</button>
                    </div>
                </div>
                <div class="carousel-item  overlay" style="background-image: url('images/slider/slider-bg2.png')">

                    <div class="carousel-caption d-md-block">
                        <h3 class="icon-container" data-animation="animated flipInX" style="font-size: 60px; text-shadow: 2px 2px 1px rgba(0,0,0,.5);">
                            DEMO COLLEGE </h3>

                        <div class="" >
                            <h1 style="font-size: 50px; font-weight: 400px" data-animation="animated lightSpeedIn">  Renaissance of Quality Education</h1>
                        </div>
                        <!--                  flipInX lightSpeedIn zoomInLeft-->
                        <button class="btn btn-danger btn-lg mt-4" data-animation="animated zoomInRight">Read More</button>
                    </div>
                </div>
                <div class="carousel-item  overlay" style="background-image: url('images/slider/slide_1.jpg')">

                    <div class="carousel-caption d-md-block">
                        <h3 class="icon-container" data-animation="animated bounceInDown" style="font-size: 60px; text-shadow: 2px 2px 1px rgba(0,0,0,.5);">
                            MEETING </h3>

                        <div class="" >
                            <h1 style="font-size: 50px; font-weight: 400px" data-animation="animated lightSpeedIn">Academic Needs of every child</h1>
                        </div>
                        <!--                  flipInX lightSpeedIn zoomInLeft-->
                        <button class="btn btn-danger btn-lg mt-4" data-animation="animated zoomInLeft">Read More</button>
                    </div>
                </div>

                <!-- controls -->
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

</section>

<?php
$slider_ext = Slider_ext::getInstance();
$result = $slider_ext->getAll();
?>
<section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
        <div class="row no-gutters">
            <?php foreach ($result as $row) { ?>
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate <?php echo $row['bg_color'] ?> border-3">
                    <div class="media block-6 d-block text-center shadow" data-aos="zoom-out" >
                        <div class="icon d-flex justify-content-center align-items-center border-3" data-aos="zoom-out" >
                            <span class="flaticon-reading "></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading <?php echo $row['header_color'] ?>"><?php echo $row['title'] ?></h3>
                            <p class="<?php echo $row['text_color']; ?>"><?php echo $row['description'] ?></p>
                        </div>
                    </div>    
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="courses single section" style="background-color: #f5f5ff">
    <?php
    $who_we_are_page_info = Who_we_are_page_info::getInstance();
    $row = $who_we_are_page_info->getAll();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12" data-aos="zoom-out">
                <div class="section-title">
                    <h2><?php echo $row['title'] ?></h2>                                       
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="single-main shadow-lg">
                    <div class="row">
                        <div class="col-lg-6 col-12 ">
                            <!-- Single Course -->
                            <div class="single-course">
                                <div class="course-head" data-aos="fade-right">		
                                    <img src="admin/uploads/raw/<?php echo $row['page_image'] ?>"  alt="#" style="height: 250px">
                                </div>			
                            </div>
                            <!--/ End Single Course -->
                        </div>	
                        <!-- About Heading -->
                        <!-- About Rext -->
                        <div class="col-lg-6">        
                            <section class="our-features section mt-1 pt-0">
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-12" style="text-align: justify" data-aos="fade-left">
                                            <p class=""><?php echo $row['description'] ?></p>
                                            <a href="about" class="btn btn-danger mt-4 " >Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- End About Heading -->

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-2">
                            <!-- ======= Features Section ======= -->
                            <section id="features" class="features mt-5">
                                <?php
                                $school_qualities = School_qualities::getInstance();
                                $result = $school_qualities->getAll();
                                ?>
                                <div class="container">

                                    <div class="section-title">
                                        <div class="section-title" data-aos="zoom-out">
                                            <h2 style="font-size: 24px;">What Makes Us Unique</h2>                               
                                        </div>
                                    </div>

                                    <div class="row">
                                        <?php foreach ($result as $row) { ?>
                                            <div class="col-lg-3 col-md-4 ">
                                                <div class="icon-box shadow border" data-aos="zoom-out">
                                                    <i class="<?php echo $row['icons']; ?>" style="color: #dc3545;"></i>
                                                    <h3><a href=""><?php echo $row ['qualities'] ?></a></h3>
                                                </div>
                                            </div>

                                        <?php } ?>  
                                    </div>
                                </div>
                            </section><!-- End Features Section -->
                        </div> 
                    </div>
                    <!--/ End Course Features -->
                </div>	
            </div>	
        </div>

    </div>
</section>


<section class="courses section-bg section">
    <div class="container">
        <?php
        $facility_intro = FacilityIntro::getInstance();
        $row = $facility_intro->getAll();
        ?>
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="" data-aos="zoom-out"><?php echo $row['title']; ?></h2>
                    <p class=" " data-aos="fade-left"><?php echo $row['description']; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="course-slider">
                    <?php
                    $facility_data = FacilityData::getInstance();
                    $result = $facility_data->getAll();  ?>
                    <!-- Single Course -->
                      <?php foreach ($result as $row) { ?>
                    <div class="single-course shadow">
                        <div class="course-head overlay">
                            <img src="uploads/raw/<?php echo $row['facility_image'] ?>"  alt="#" style="height: 250px" data-aos="zoom-out">
                            <a href="school-lab.php" class="btn"><i class="<?php echo $row['icon']; ?>"></i></a>
                        </div>
                        <div class="single-content">
                            <h4><a href="school-lab.php"><span><?php echo $row['title']; ?></span> <?php echo $row['description']; ?></a></h4>
                        </div>
                    </div>
                      <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enroll -->
<?php
$enrolment = Enrolment::getInstance();
$row = $enrolment->getAll();
?>
<section class="enroll overlay section" style="background-image: url('admin/uploads/raw/<?php echo $row['bg_image'] ?> " data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-lg-6 col-12 " data-aos="fade-right">
                        <!-- Single Enroll -->
                        <div class="enroll-form">
                            <div class="form-title">
                                <h2  style="text-shadow: 2px 2px 1px rgba(0,0,0,.5);"><?php echo $row['enrol_title'] ?></h2>
                                <!-- <h2  style="text-shadow: 2px 2px 1px rgba(0,0,0,.5);">Enroll Your Ward With Us</h2> -->
                                <!-- <p>Before you miss the chance to get your seat!</p> -->
                            </div>
                            <!--                            <h2>Admission Form</h2>-->
                            <!-- Form -->
                            <div class="form">
                                <h5>Admission Form</h5>
                                <!-- <h5>Admission Form</h5> -->
                                <p><?php echo $row['enrol_desc'] ?></p>
                                <!-- <p>Admission into J.S.S.1 ongoing for 2020/2021 Session</p> -->
                                <hr>
                                <div class="form-group button">
                                    <button type="submit" class="btn"><span class="fa fa-file-pdf-o fa-1x bg-danger mr-1"></span>Download PDF</button>
                                </div>
                            </div> 
                            <!--/ End Form -->
                        </div>
                        <!-- Single Enroll -->
                    </div>
                    <div class="col-lg-6 col-12 " data-aos="fade-left">
                        <div class="enroll-right">
                            <div class="section-title">
                                <h2><?php echo $row['title'] ?></h2>
                                <!-- <h2>We meet the Academic needs and moral requirements of every child.</h2> -->
                                <p><?php echo $row['description'] ?></p>
                                    <!-- <p>Demo College aims at developing the total child in a world of inconsistencies and frustration. 
                                        A child's life is modeled by the education he receives especially at the early state of life. </p>
                                    <p> We deploy all resources at our disposal under God to ensuring that every child that passes through Demo College is uniquely handled.</p>
                                    <p>   We aim to meet each child as an individual and helping him or her to achieve his or her God given purpose on earth..</p> -->
                            </div>
                        </div>
                        <!-- Skill Main -->
                        <div class="skill-main">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12 " >
                                    <!-- Single Skill -->
                                    <!--											<div class="single-skill">
                                                                                                                                    <div class="circle" data-value="0.7" data-size="130">
                                                                                                                                            <strong>500+</strong>
                                                                                                                                    </div>
                                                                                                                                    <h4>Students</h4>
                                                                                                                            </div>-->
                                    <!--/ End Single Skill -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 ">
                                    <!-- Single Skill -->
                                    <!--											<div class="single-skill">
                                                                                           </div>-->
                                    <!--/ End Single Skill -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 " >
                                    <!-- Single Skill -->
                                    <!--											<div class="single-skill">
                                                                                                                                    <div class="circle" data-value="0.8" data-size="130">
                                                                                                                                            <strong>60+</strong>
                                                                                                                                    </div>
                                                                                                                                    <h4>Teachers</h4>
                                                                                                                            </div>-->
                                    <!--/ End Single Skill -->
                                </div>
                            </div>
                        </div>
                        <!--/ End Skill Main -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<!-- Call To Action -->





<?php include 'includes/footer.php' ?>