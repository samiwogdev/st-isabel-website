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
                <h3>Library Features</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><small>Add new Features Information</small></h2>
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
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name of Laboratory <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="title" required="required" class="form-control ">
                                </div>
                            </div>
                            <!-- <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Banner Image</label>
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
                        <h2> <small>Update Information</small></h2>
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
                                                <th>Types of Laboratories</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Our Library Features</td>
                                                <td>Books, periodical & audio-visuals</td>
                                                <td>
                                                    <div class="text-center">
                                                        <span class="fa fa-edit text-primary fa-2x" style="cursor: pointer"></span>
                                                        <span class="fa fa-trash text-danger fa-2x" style="cursor: pointer"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Our Library Features</td>
                                                <td>Shelves are easy to reach</td>
                                                <td>
                                                    <div class="text-center">
                                                        <span class="fa fa-edit text-primary fa-2x" style="cursor: pointer"></span>
                                                        <span class="fa fa-trash text-danger fa-2x" style="cursor: pointer"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Our Library Features</td>
                                                <td>Flexible reading area</td>
                                                <td>
                                                    <div class="text-center">
                                                        <span class="fa fa-edit text-primary fa-2x" style="cursor: pointer"></span>
                                                        <span class="fa fa-trash text-danger fa-2x" style="cursor: pointer"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Our Library Features</td>
                                                <td>Distinct zones for different uses</td>
                                                <td>
                                                    <div class="text-center">
                                                        <span class="fa fa-edit text-primary fa-2x" style="cursor: pointer"></span>
                                                        <span class="fa fa-trash text-danger fa-2x" style="cursor: pointer"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Our Library Features</td>
                                                <td>Lots of comfortable furniture</td>
                                                <td>
                                                    <div class="text-center">
                                                        <span class="fa fa-edit text-primary fa-2x" style="cursor: pointer"></span>
                                                        <span class="fa fa-trash text-danger fa-2x" style="cursor: pointer"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Our Library Features</td>
                                                <td>Wireless connectivity and Computers</td>
                                                <td>
                                                    <div class="text-center">
                                                        <span class="fa fa-edit text-primary fa-2x" style="cursor: pointer"></span>
                                                        <span class="fa fa-trash text-danger fa-2x" style="cursor: pointer"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Our Library Features</td>
                                                <td>Full of natural light</td>
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