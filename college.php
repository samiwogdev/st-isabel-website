<?php
include_once 'admin/configuration.php';
include 'includes/header.php'
?>

<!-- Start Breadcrumbs -->
<?php
     $college_banner = College_banner::getInstance();
     $row = $college_banner->getAll();
?>
<section class="breadcrumbs overlay" style="background-image: url('admin/uploads/raw/<?php echo $row['college_image']?>')" data-aos='zoom-out'>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo $row ['title']?></h2>
                <ul class="bread-list">
                    <li "><a href="#">Academics<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="#">College</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<section class="about-us section mt-4" style="padding: 0px; mb-0">
<?php
$college_page_info = College_page_info::getInstance();
$row = $college_page_info -> getAll();
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12" style="text-align: justify">
                <div class="about-text">
                    <h2><?php echo $row['title'] ?></h2>
                    <p class="font-weight-500"><?php echo $row['description']?></p>  
                    <!-- <h2>College</h2>
                    <p class="font-weight-bold">Demo College School has a broad based curriculum consisting of all the subjects areas specified by the ministry of Education,broken into the Junior Secondary(JSS) and the Senior Secondary School levels. </p>  
                    <p>At Demo College, well prepared activities are available, backed by modern teaching aids for the development of a total child. Admission is opened to successful candidates.</p> -->
                </div>

            </div>
        </div>
    </div>
</section>

  <section class="events section mt-0 pt-4 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="event-slider mt-0">

                        <!-- Single Event -->
                        <div class="single-event shadow-lg">
                            <div class="head overlay">
                                <img src="images/events/event1.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                                <a href="images/events/event1.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="event-content">
                            </div>
                        </div>
                        <!--/ End Single Event -->

                        <!-- Single Event -->
                        <div class="single-event shadow-lg">
                            <div class="head overlay">
                                <img src="images/events/new.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                                <a href="images/events/new.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="event-content">
                            </div>
                        </div>
                        <!--/ End Single Event -->

                        <!-- Single Event -->
                        <div class="single-event shadow-lg">
                            <div class="head overlay">
                                <img src="images/events/event2.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                                <a href="images/events/event2.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
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
<section class="about-us section mt-4 mb-5" style="padding: 0px;">
<?php
$junior_infoExt = Junior_infoExt::getInstance();
$row = $junior_infoExt -> getAll();
?>
    <div class="container">
        <div class="row ml-3">
            <div class="col-lg-6 col-12" style="text-align: justify">
                <div class="about-text">
                    <h2 class="mt-4"><?php echo $row['title']?></h2>
                    <p><?php echo $row['description']?></p>
                    <!-- <h2 class="mt-4">Junior Secondary School</h2>
                    <p>In the first three years, the School offers the following subjects:</p> -->
                    <?php
                    $junior_subject = Junior_subject::getInstance();
                    $result=$junior_subject -> getAll();
                    ?>
                    <?php foreach ($result as $row) { ?>
                      <ul>
                        <li "><span class="fa fa-pencil mr-2"></span><?echo $row['title']?></li>
                        <!-- <li "><span class="fa fa-pencil mr-2"></span>English Language</li> -->
                        <!-- <li "><span class="fa fa-pencil mr-2"></span>Mathematics</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Business Studies</li>
                        <li "><span class="fa fa-pencil mr-2"></span> Physical Education</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Integrated Science</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Christian Religion Knowledge</li>
                        <li "><span class="fa fa-pencil mr-2"></span>French</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Introductory Technology</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Computer Science</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Social Studies</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Home Economics</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Music</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Agricultural Science</li>
                        <li "><span class="fa fa-pencil mr-2"></span>A Nigerian Language (Igbo or Yoruba)</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Fine Art</li> -->
                      </ul>
                      <?php } ?>;  
                </div>

            </div>
            <div class="col-lg-6 col-12" style="text-align: justify">
            <?php
            $senior_infoExt = Senior_infoExt::getInstance();
            $row = $senior_infoExt -> getAll();
            ?>
                <div class="about-text">
                     <h2 class="mt-4"><?php echo $row['title']?></h2>
                     <p><?php echo $row['description']?></p>
                     <!-- <h2 class="mt-4">Senior Secondary School</h2>
                     <p>During the fourth, fifth and sixth years, students are prepared for the Senior Secondary Certificate Examination, Joint Admission & Matriculation Board examination and the Cambridge Overseas GCE Examination, all of which they take in the third term of their sixth year. The Senior Class takes the following:</p> -->
                    <?php
                        $senior_subject = Senior_subject::getInstance();
                        $result = $senior_subject -> getAll();
                    ?>
                    <?php foreach ($result as $row) { ?>
                     <ul>
                        <li "><span class="fa fa-pencil mr-2"></span><?php echo $row['title']?>
                        <!-- <li "><span class="fa fa-pencil mr-2"></span>English Language</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Mathematics</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Biology</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Yoruba</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Physics</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Physical/Health Education</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Geography</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Chemistry</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Government</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Literature In English</li>
                        <li "><span class="fa fa-pencil mr-2"></span>Economics</li> -->
                      </ul>
                      <?php } ?>  
                </div>
                 <img src="images/logo/images-2.jpg" class="mt-5 mb-5">
            </div>
            
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