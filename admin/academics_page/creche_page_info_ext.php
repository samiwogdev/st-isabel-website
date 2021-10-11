<?php
include_once '../includes/admin_header.php';
include_once '../includes/admin_sidebar.php';
include_once '../includes/admin_navbar.php';
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Creche</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><small>Add new Page Information</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
<!--                            <li><a class="close-link"><i class="fa fa-close"></i></a>-->
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form class="form-horizontal form-label-left" action="" method="post">

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="title" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Description <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="description" name="last-name" required="required" class="form-control">
                                </div>
                            </div>
                            <!-- <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Page Image</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div> -->
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> <small>Update Page Information</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <!-- <th>Picture</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Qualified & Passionate Caregivers</td>
                                                <td>We understand that babies and toddlers are very vulnerable, as they are at the early stage of development. For that reason, our creche in Lagos is staffed with only trained and qualified caregivers. We also ensure our team of caregivers are made up of people with a natural affinity for toddlers.</td>
                                                <!-- <td class="text-center"><img src="../admin-assets/images/media.jpg" width="30px"></td> -->
                                                <td>
                                                    <div class="text-center">
                                                        <span class="fa fa-edit text-primary fa-2x" style="cursor: pointer"></span>
                                                        <span class="fa fa-trash text-danger fa-2x" style="cursor: pointer"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Spacious, Well-Lit Rooms & Dedicated Caregivers</td>
                                                <td>Based on our first core value, which is child-centredness, we have added creche to our list of educational services. Demo School was established in 1985; however, our creche in Ibadan was opened to the public on Monday 7 September 2015. The creche is equipped with ultra-modern facilities and caters to the needs of babies and toddlers, thereby giving parents the</td>
                                                <!-- <td class="text-center"><img src="../admin-assets/images/media.jpg" width="30px"></td> -->
                                                <td>
                                                    <div class="text-center">
                                                        <span class="fa fa-edit text-primary fa-2x" style="cursor: pointer"></span>
                                                        <span class="fa fa-trash text-danger fa-2x" style="cursor: pointer"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Play-based Learning</td>
                                                <td>When setting up our creche, our plan is to provide the best creche in Lagos. Therefore, we ensure the room is spacious with adequate light and ventilation. To also ensure our caregivers are dedicated and not overwhelmed, we adopt a 3:1 caregiver-to-baby ratio in our creche.</td>
                                                <!-- <td class="text-center"><img src="../admin-assets/images/media.jpg" width="30px"></td> -->
                                                <td>
                                                    <div class="text-center">
                                                        <span class="fa fa-edit text-primary fa-2x" style="cursor: pointer"></span>
                                                        <span class="fa fa-trash text-danger fa-2x" style="cursor: pointer"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Security</td>
                                                <td>We have policies that ensure your child is safe in our creche in Lagos. For instance, children can only be picked up by the parents or any registered </td>
                                                <!-- <td class="text-center"><img src="../admin-assets/images/media.jpg" width="30px"></td> -->
                                                <td>
                                                    <div class="text-center">
                                                        <span class="fa fa-edit text-primary fa-2x" style="cursor: pointer"></span>
                                                        <span class="fa fa-trash text-danger fa-2x" style="cursor: pointer"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--  -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- /page content -->

<?php include_once '../includes/admin_footer.php'; ?>