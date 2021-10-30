<?php
include_once 'admin/configuration.php';
include 'includes/header.php'
?>

<!-- Start Breadcrumbs -->
<?php
     $admission_banner = Admission_banner::getInstance();
     $row = $admission_banner->getAll();
?>
<section class="breadcrumbs overlay" style="background-image: url('admin/uploads/raw/<?php echo $row['admission_image']?>')" data-aos='zoom-out'>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo $row['title']?></h2> 
                <ul class="bread-list">
                    <li><a href="#">Home<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="#">Admissions</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- About US -->
<?php 
         $admission_enrolment = Admission_enrolment::getInstance();
         $row = $admission_enrolment->getAll();
?>
<section class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="single-image">
                        <!-- <img src="images/about1.jpg" alt="#"> -->
                    <img src="admin/uploads/raw/<?php echo $row['enrolment_image']?>" alt="#">
                    <!-- <img src="images/admission/2.jpg" alt="#"> -->
                        <!-- <img src="images/enroll11-bg.jpg" alt="#" style="padding-top: 20px;"> -->

                                                        <!-- <a href="https://www.youtube.com/watch?v=UalTfOIDQ7M" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a> -->
                </div>
            </div>
            <div class="col-lg-4 col-12 mt-5 rounded">
                    <div class="border">
                        <div class="form-title  p-4 mb-3" style="background-color: #f1453d">
                            <h4 class="text-white"  style="text-shadow: 2px 2px 1px rgba(0,0,0,.5);"><?php echo $row['title']?></h4>
                            <!-- <h4 class="text-white"  style="text-shadow: 2px 2px 1px rgba(0,0,0,.5);">Enroll Your Ward With Us</h4> -->
                        </div>
                        <div class="form pl-2">
                            <p><?php echo $row['description']?></p>
                            <!-- <p>Admission into Creche, Primary & College ongoing for 2020/2021 Session</p> -->
                            <hr>
                            <div class="">
                                <h5 class="mb-2"><?php echo $row['enrolment']?></h5>
                                <!-- <h5 class="mb-2">Download Admission Form</h5> -->
                                <hr>
                                   <a href="#!"class="btn text-white mr-2" style="background-color: #f1453d"><span class="fa fa-file-pdf-o fa-1x  mr-1"></span>Children  Form</a>
                              <a href="#!"class="btn text-white" style="background-color: #f1453d"><span class="fa fa-file-pdf-o fa-1x  mr-1"></span>College Form</a>
                            </div>
                        </div> 
                    </div>
            </div>
        </div>

        <?php 
          $admission_info_page = Admission_info_page::getInstance();
          $row = $admission_info_page->getAll();
    ?>
       <div class="row mt-5 mb-5">
            <div class="col-12"> 
                <p class="mb-3"> <?php echo $row['title']?></p>
                <!-- <p class="mb-3">Results for the 2019/2020 GHS Entrance Examination is now out! Kindly find below the list of successful candidates. Upon successful confirmation of your child, parents are advised to contact the admissions department of the school immediately or call 0808 428 3124, 0803 065 3294 for further details.</p> -->
          
<!--                <iframe src="images/admission/p.pdf" width="100%" height="500px"></iframe>-->
                <img   src="admin/uploads/raw/<?php echo $row['result_image']?>" width="70%"  frameborder="0" style="margin-left: 200px;">
                <!-- <iframe   src="images/admission/p.pdf#toolbar=0" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe> -->
<!--                <embed src="images/admission/p.pdf" type="application/pdf"  class="responsive">-->
            </div>
<!--  <div class="row">
            <div class="col-lg-8 col-12">
                <div class="single-image">
                    <p>Establishing a high standard of education is not an easy feat; maintaining it for five decades is even more challenging. After half a century of exceptional performance, we are even more committed to the education of unique individuals with global perspective and zeal for excellence.</p>
                    <p>To date, more than 14,000 children have attended Grace Schools. As we admit children for the 2018/2019 Academic Session, we stand on our longstanding principle of instilling value-character education and bench-marking the best of technology to deliver world class education.</p>   
                    <p>Generations of alumni bear witness to our achievements. They are proud to approve us for their children. And recommend us to the children of friends, just like you.</p>
                </div>
            </div>
            <div class="col-lg-4 col-12 mt-5 rounded">
                <div class="single-image">
                    <img src="images/admission/1.jpg">
                </div>   
            </div>
        </div>-->
           </section>

<!--/ End About US -->

<?php
include 'includes/footer.php'
?>