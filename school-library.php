<?php
include_once 'admin/configuration.php';
include 'includes/header.php'
?>
<!-- Start Breadcrumbs -->
<section class="breadcrumbs overlay" style="background-image: url('images/facilities/lib.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>School Library</h2>
                <ul class="bread-list">
                    <li><a href="#">Facilities<i class="fa fa-angle-right"></i></a></li>
                    <li class="active"><a href="#">School Library  </a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/ End Breadcrumbs -->

<!-- Courses -->
<section class="courses single section ">
    <div class="container shadow-lg">
      
                <div class="single-main">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <section class="home-slider owl-carousel">
                                <div class="slider-item overlay" style="background-image:url('images/facilities/lib.jpg'); height: 420px" data-aos="zoom-out">
                                    <div class="container">
                                        <div class="slider-text" data-scrollax-parent="true">
                                            <div class="col-md-12 ">
                                                <h1 class="mb-4 text-white pt-3 " style="text-shadow: 2px 2px 1px rgba(0,0,0,.5); font-size: 22px; text-transform: uppercase" >Science Laboratory </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="slider-item overlay " style="background-image:url('images/facilities/libary.jpg'); height: 420px" data-aos="zoom-out">
                                    <div class="container">
                                        <div class="slider-text" data-scrollax-parent="true">
                                            <div class="col-md-12">
                                                <h1 class="mb-4 text-white pt-3" style="text-shadow: 2px 2px 1px rgba(0,0,0,.5); font-size: 22px; text-transform: uppercase" >Library Laboratory </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-4 col-12">
                        <?php 	
                        $library_feature = Library_feature::getInstance();
                        $result = $library_feature -> getAll();
                        ?>
                            <!-- Course Features -->
                             <div class="course-feature">
                                <div class="feature-main">
                                    <h4>Our Library Features</h4>
                                    <!-- Single Feature -->
                                    <?php foreach ($result as $row) { ?>
                                    <div class="single-feature">
                                        <i class="<?php echo $row['icons'] ?>"></i>
                                        <span class="label"><?php echo $row['feature']?></span>
                                        <span class="value"></span>
                                        <!-- <i class="fa fa-files-o"></i>
                                        <span class="label">Books, periodicals & audio-visuals</span>
                                        <span class="value"></span> -->
                                    </div>
                                    <?php } ?>  
                                    <!--/ End Single Feature -->
                                    

                                </div>
                            </div>
                            <!--/ End Course Features -->
                        </div>	
                    <div class="col-12">
                    <?php 
                        $library_info_page = Library_info_page::getInstance();
                        $row = $library_info_page -> getAll();
                        ?>
                    
                                <div class="content">
                                   <h2><a href="#"><?php echo $row['title'] ?></a></h2>
                                   <p><?php echo $row['description']?></p>
                                   <!-- <h2><a href="#">School Library</a></h2> -->
                                     <!-- <p>A school library (or what is sometimes called a school library media centre) is a library within a school where students, staff, and often, parents of a public or private school have access to a variety of resources. The school library provides information and ideas that are fundamental to functioning successfully in today’s information and knowledge-based society. It equips students with life-long learning skills and develops the imagination, enabling them to live as responsible citizens.</p>
                                    <p>Pathfinder College Library is a superb and innovative information centre that has been designed to complement and facilitate learning by students. It is a welcoming environment that has areas for reading as well as a reference room for students who wish to consult the reference materials for factual information in their study and research.</p>
                                    <p>It has the circulation section which accommodates the shelving and storage areas, flexible reading area, and internet/networked computers.

                                        The library team encourages reading, believing that “readers are leaders” and that those who are comfortable with reading can easily divert that skill to other academic activities that require reading – whether a story that translates into other pleasurable realms or a text that informs us about new ideas or perspectives. The library enjoys helping students select reading titles that will engage and challenge them as well as improve the quality of research skills they acquire.</p> -->
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










