<?php
include_once 'admin/configuration.php';
include 'includes/header.php'
?>

<!-- Start Breadcrumbs -->
<section class="breadcrumbs overlay" style="background-image: url('images/admission/4.jpg')" data-aos='zoom-out'>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 data-aos='fade-left'>Nursery / Primary</h2>
                <ul class="bread-list">
                    <li data-aos='fade-right'><a href="#">Academics<i class="fa fa-angle-right"></i></a></li>
                    <li class="active" data-aos='fade-left'><a href="#">Nursery / Primary</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<section class="about-us section mt-4" style="padding: 0px; mb-0">
            <?php 
            $nursery_primary_page_info = Nursery_primary_page_info::getInstance();
            $row = $nursery_primary_page_info -> getAll();
            ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12" style="text-align: justify">
                <div class="about-text">
                    <h2><?php echo $row['title']?></h2>
                    <p class="font-weight-500"><?php echo $row['description']?></p>
                    <!-- <p class="font-weight-bold">The key part of the children curriculum focuses on Cognitive, Psychomotor and Affective domains of education.</p>
                    <p>School is regarded as one of the best elementary schools in Nigeria.
                        We operate a wider curriculum tailored adequately to prepare our pupils for the Nigerian Common Entrance Examinations.</p> -->
                </div>

            </div>
        </div>
    </div>
</section>
<section class="about-us section mt-4 mb-5" style="padding: 0px;">
    <section class="events section mt-0 pt-4 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="event-slider mt-0">

                        <!-- Single Event -->
                        <div class="single-event shadow-lg">
                            <div class="head overlay">
                                <img src="images/nursery/1.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                                <a href="images/nursery/1.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="event-content">
                            </div>
                        </div>
                        <!--/ End Single Event -->

                        <!-- Single Event -->
                        <div class="single-event shadow-lg">
                            <div class="head overlay">
                                <img src="images/nursery/2.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                                <a href="images/nursery/2.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="event-content">
                            </div>
                        </div>
                        <!--/ End Single Event -->

                        <!-- Single Event -->
                        <div class="single-event shadow-lg">
                            <div class="head overlay">
                                <img src="images/nursery/3.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                                <a href="images/nursery/3.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="event-content">
                            </div>
                        </div>
                        <!--/ End Single Event -->

                        <!-- Single Event -->
                        <div class="single-event shadow-lg">
                            <div class="head overlay">
                                <img src="images/nursery/4.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                                <a href="images/nursery/4.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="event-content">
                            </div>
                        </div>
                        <!--/ End Single Event -->

                        <!-- Single Event -->
                        <div class="single-event shadow-lg">
                            <div class="head overlay">
                                <img src="images/nursery/5.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                                <a href="images/nursery/5.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="event-content">
                            </div>
                        </div>
                        <!--/ End Single Event -->

                        <!-- Single Event -->
                        <div class="single-event shadow-lg">
                            <div class="head overlay">
                                <img src="images/nursery/6.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                                <a href="images/nursery/6.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="event-content">
                            </div>
                        </div>
                        <!--/ End Single Event -->

                        <!-- Single Event -->
                        <div class="single-event shadow-lg">
                            <div class="head overlay">
                                <img src="images/nursery/7.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                                <a href="images/nursery/7.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="event-content">
                            </div>
                        </div>
                        <!--/ End Single Event -->

                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <?php
            $nursery_primary_page_infoExt = Nursery_primary_page_infoExt::getInstance();
            $row = $nursery_primary_page_infoExt->getAll();
        ?>
        <div class="row">
            <div class="col-lg-12 col-12" style="text-align: justify">
                <div class="about-text">
                <h2 class="mt-4"><?php echo $row['title']?></h2>
                    <!-- <h2 class="mt-4">Curriculum</h2> -->
                    <p><?php echo $row['description']?></p>
                    <!-- <p>The school curriculum is very broad and quite stimulating. The adoption of a broad-based curriculum is predicted on the focus that pupils attending Grace Children School are being prepared for competitive qualifying examinations into secondary schools home and abroad. Subjects taught in the school include the following:</p> -->
                     
                </div>

            </div>
        </div>
        <!-- NURSERY/ PRIMARY SUBJECTS -->
        <div class="row ml-3">
            <?php
                $nursery_primarysubject = Nursery_primarysubject::getInstance();
                $result = $nursery_primarysubject -> getAll();
            ?>
             
            <div class="col-lg-4 col-12" style="text-align: justify">
                <div class="about-text">
               <?php foreach ($result as $row) { ?>
                      <ul>
                        <li ><span class="fa fa-pencil mr-2"></span><?php echo $row['title'] ?></li>
                      </ul>
                </div>

            </div>
            <div class="col-lg-4 col-12" style="text-align: justify">
                <div class="about-text">
                    <ul>
                        <!-- <li "><span class="fa fa-pencil mr-2"></span>Etiquette</li> -->
             
                      </ul>
                      <?php } ?>  
                </div>
            </div>
            <div class="col-lg-4 col-12" style="text-align: justify"></div>
            <img src="images/logo/images-2.jpg" class="mt-5 mb-5">
        </div>
    </div>
    </div>
</section>
    
<!-- About US -->



<!--    <iframe src="https://docs.whirlpool.eu/_doc/Cookbook_Mwo_only_501912000448EN.pdf" width="100%" height="500px">
    </iframe>-->

<?php
include 'includes/footer.php'
?>