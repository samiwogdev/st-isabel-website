<?php
include_once 'admin/configuration.php';
include 'includes/header.php'
?>

<!-- Start Breadcrumbs -->
<?php
    $creche_banner = Creche_banner::getInstance();
    $row = $creche_banner->getAll();                                            
 ?>
		<section class="breadcrumbs overlay" style="background-image: url('admin/uploads/raw/<?php echo $row['creche_image']?>')" >
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2 data-aos='fade-Left'><?php echo $row['title']?></h2>
                <ul class="bread-list">
                    <li class="font-weight-bold" data-aos='fade-right'><a href="#">Academics<i class="fa fa-angle-right"></i></a></li>
                    <li class="active" data-aos='fade-right'><a href="#">Creche</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<section class="about-us section mt-4" style="padding: 0px; mb-0">
    <div class="container">
            <?php 
                $creche_page_info = Creche_page_info::getInstance();
                $row = $creche_page_info -> getAll();
            ?>
        <div class="row">
            <div class="col-lg-12 col-12" style="text-align: justify">
                <div class="about-text">
                    <h2><?php echo $row['title'] ?></h2>
                    <p><?php echo $row['description']?></p>
                    <!-- <p>Based on our first core value, which is child-centredness, we have added creche to our list of educational services. Demo School was established in 1985; however, our creche in Ibadan was opened to the public on Monday 7 September 2015. The creche is equipped with ultra-modern facilities and caters to the needs of babies and toddlers, thereby giving parents the required peace of mind to enhance productivity at the workplace.</p>
                    <p>Demo Schools Creche admits babies of pre-school ages of between 6 weeks and 2 years. These babies receive total care in our secured homely 
                        environment where high premium is placed on comfort, safety and hygiene.</p> -->
                </div>

            </div>
        </div>
    </div>
    <section class="events section mt-0 pt-4 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="event-slider mt-0">

                    <!-- Single Event -->
                    <div class="single-event shadow-lg">
                        <div class="head overlay">
                            <img src="images/crech/1.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                            <a href="images/crech/1.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="event-content">
                        </div>
                    </div>
                    <!--/ End Single Event -->
                    
                    <!-- Single Event -->
                    <div class="single-event shadow-lg">
                        <div class="head overlay">
                            <img src="images/crech/2.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                            <a href="images/crech/2.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="event-content">
                        </div>
                    </div>
                    <!--/ End Single Event -->
                    
                    <!-- Single Event -->
                    <div class="single-event shadow-lg">
                        <div class="head overlay">
                            <img src="images/crech/3.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                            <a href="images/crech/3.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="event-content">
                        </div>
                    </div>
                    <!--/ End Single Event -->
                    
                    <!-- Single Event -->
                    <div class="single-event shadow-lg">
                        <div class="head overlay">
                            <img src="images/crech/4.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                            <a href="images/crech/4.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="event-content">
                        </div>
                    </div>
                    <!--/ End Single Event -->
                    
                    <!-- Single Event -->
                    <div class="single-event shadow-lg">
                        <div class="head overlay">
                            <img src="images/crech/5.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                            <a href="images/crech/5.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="event-content">
                        </div>
                    </div>
                    <!--/ End Single Event -->
                    
                    <!-- Single Event -->
                    <div class="single-event shadow-lg">
                        <div class="head overlay">
                            <img src="images/crech/6.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                            <a href="images/crech/6.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="event-content">
                        </div>
                    </div>
                    <!--/ End Single Event -->
                    
                    <!-- Single Event -->
                    <div class="single-event shadow-lg">
                        <div class="head overlay">
                            <img src="images/crech/7.jpg" class="rounded" alt="#" style="height: 250px" data-aos="zoom-out">
                            <a href="images/crech/7.jpg" data-fancybox="photo" class="btn"><i class="fa fa-search"></i></a>
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
</section>
<!-- About US -->
<section class="about-us section mt-4 mb-5" style="padding: 0px;">
<?php
        $creche_page_info_ext = Creche_page_info_ext::getInstance();
        $result =$creche_page_info_ext -> getAll();
?>
    <div class="container">
        <div class="row">
       
            <div class="col-lg-12 col-12" style="text-align: justify">
                <div class="about-text">
                    <h2 class="mt-4">Why Choose Our Creche</h2>
                    <?php foreach ($result as $row) { ?>
                    <ul>
                        <li class="font-weight-bold"><span class="fa fa-pencil mr-2"></span><?php echo $row['title']?></li>
                        <p><?php echo $row['description']?></p>
                        <!-- <li class="font-weight-bold"><span class="fa fa-pencil mr-2"></span>Qualified & Passionate Caregivers</li>
                        <p> We understand that babies and toddlers are very vulnerable, as they are at the early stage of development. For that reason, our creche in Lagos is staffed with only trained and qualified caregivers. We also ensure our team of caregivers are made up of people with a natural affinity for toddlers.</p> -->

                        <!-- <li class="font-weight-bold"><span class="fa fa-pencil mr-2"></span>Spacious, Well-Lit Rooms & Dedicated Caregivers</li>
                        <p> When setting up our creche, our plan is to provide the best creche in Lagos. Therefore, we ensure the room is spacious with adequate light and ventilation. To also ensure our caregivers are dedicated and not overwhelmed, we adopt a 3:1 caregiver-to-baby ratio in our creche. Our primary objective is to ensure babies in our care are comfortable at all times, by changing their wet diapers on time, giving them nutritious food according to their need and encouraging good habits through routine activities such as potty training.</p>

                        <li class="font-weight-bold"><span class="fa fa-pencil mr-2"></span>Play-based Learning</li>
                        <p> Although it is seen in many creches in Lagos, teaching ABC or 123 rhymes to toddlers and asking them to repeat is quite odd. This is because it has been observed that teaching toddlers through instruction isn’t effective in making them comprehend the basis of what is being taught. For this reason, in our creche, we adopt play-based learning – an integral part of the Montessori teaching method, which is proven to help kids learn faster and comprehend the basis of what they are being taught.</p>

                        <li class="font-weight-bold"><span class="fa fa-pencil mr-2"></span>Security</li>
                        <p>We have policies that ensure your child is safe in our creche in Lagos. For instance, children can only be picked up by the parents or any registered members of a family. Our creche in Lagos is safe and secure with access controls and trained security personnel who ensure the creche is protected from invaders.</p> -->
                        <?php } ?>  
                    </ul>    
                </div>

            </div>
            <img src="images/logo/images-2.jpg" class="mt-5">
           
        </div>
    </div>
</section>



<?php
include 'includes/footer.php'
?>