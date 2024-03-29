<?php
include_once 'admin/configuration.php';
include 'includes/header.php'
?>

<!-- Start Breadcrumbs -->
<?php
    $director_banner = DirectorBanner::getInstance();
    $row = $director_banner->getAll();
?>
<section class="breadcrumbs overlay" style="background-image: url('admin/uploads/raw/<?php echo $row['director_image']?>')" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 data-aos="fade-left"><?php echo $row['title']?></h2>
                <!-- <h2 data-aos="fade-left">Message From The Director</h2> -->
                <ul class="bread-list">
                    <li data-aos="fade-right"><a href="#">The School<i class="fa fa-angle-right"></i></a></li>
                    <li data-aos="fade-left" class="active"><a href="#">about</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- About US -->
<section class="about-us section">
    <?php 
        $director_page_info = DirectorPageInfo::getInstance();
        $row = $director_page_info -> getAll();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="single-image overlay">
                        <!-- <img src="images/about1.jpg" alt="#"> -->
                    <!-- <img src="images/director.jpg" alt="#" data-aos="fade-right"> -->
                    <img src="admin/uploads/raw/<?php echo $row['page_image']?> " alt="#" data-aos="fade-right">
                    <!-- <img src="images/enroll1-bg.jpg" alt="#" style="padding-top: 20px;"> -->

                                                        <!-- <a href="https://www.youtube.com/watch?v=UalTfOIDQ7M" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a> -->
                </div>
            </div>
            <div class="col-lg-6 col-12" style="text-align: justify">
                <div class="about-text" data-aos="fade-left">
                    <h2><?php echo $row['title'] ?></h2>
                    <!-- <h2>Message from the Director</h2> -->
                    <p><?php echo $row['description'] ?></p>
                    <!-- <p>Demo College is an independent co-educational boarding and day school for children aged 10 years and above. At Demo College, we offer a broad and balanced education within a friendly, caring and happy environment.</p> -->
                    <!-- <p>At Demo College the curriculum offered is based on the English national curriculum with good reference made to indigenous learning experience. In addition, our approach to education creates a strong base for future development. This encourages a culture of independent learning that challenges students to accept greater responsibility for their learning.</p> -->
                    <!-- <p>At Demo College, our highly personalised learner system provides a distinct process, through which student’s strength, potential, ability and interest are identified and harnessed.</p> -->
                    <p class="mb-0">Chief (Mrs) Isabel</p>
                    <p class="mt-0"><strong>Director @ St. Isabel</strong></p>
                    <div class="button">
                        <a href="contact" class="btn">Contact Us</a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End About US -->

<?php
include 'includes/footer.php'
?>