<?php
include_once '../configuration.php';
if (!isset($_GET['info'])) {
    $info = "";
} else {
    $info = ($_GET['info']);
}
include_once '../includes/admin_header.php';
include_once '../includes/admin_sidebar.php';
include_once '../includes/admin_navbar.php';
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Enrolment</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><small>Add new Enrolment Information</small></h2>
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
                        <form class="form-horizontal form-label-left" action="../controller/add_enrolment" method="post" enctype="multipart/form-data">
                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Background Image</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="form-group">
                                        <input type="file" name="bg_image" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="title" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea cols="30" rows="10" type="text" name="description" required="required" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="enrol_title">Enrolment Title <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="enrol_title" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="enrol_desc">Enrolment Description <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="enrol_desc" required="required" class="form-control">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" name="add_enrolment" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> <small>Update Enrolment Information</small></h2>
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
                                                <th>Picture</th>
                                                <th>Title</th>
                                                <th>Desc</th>
                                                <th>Enrol. Title</th>
                                                <th>Enrol. Desc</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $enrolment = Enrolment::getInstance();
                                            $count = 1;
                                            $row = $enrolment->getAll();
                                            
                                                ?>
                                                <tr>
                                                    <td><?php echo $count ?></td>
                                                    <td class="text-center"><img src="../admin-assets/images/media.jpg<?php echo $row['bg_image'] ?>" width="30px"></td>
                                                    <td><?php echo $row['title'] ?></td>
                                                    <td class="text-center"><?php echo $row['description'] ?></td>
                                                    <td><?php echo $row['enrol_title'] ?></td>
                                                    <td><?php echo $row['enrol_desc'] ?></td>
                                                    <td>
                                                        <div class="text-center">
                                                            <a href="update_enrolment?auth=<?php echo $row['id'] ?>"><span class="fa fa-edit text-primary fa-2x" style="cursor: pointer"></span></a>
                                                            <a href="../controller/delete_enrolment?auth=<?php echo $row['id'] ?>"> <span class="fa fa-trash text-danger fa-2x" style="cursor: pointer"></span></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            
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
<?php if (isset($info) && $info == "success") { ?>
    <script type="text/javascript">
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        $(document).ready(function () {
            Toast.fire({
                icon: 'success',
                title: "Info Uploaded successfully"
            })
        });
    </script> 
<?php } if (isset($info) && $info == "failed") { ?>
    <script type="text/javascript">
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        $(document).ready(function () {
            Toast.fire({
                icon: 'error',
                title: "Something went wrong, try again"
            })
        });
    </script> 
<?php } if (isset($info) && $info == "del") { ?>
    <script type="text/javascript">
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        $(document).ready(function () {
            Toast.fire({
                icon: 'success',
                title: "Record deleted Successfully"
            })
        });
    </script> 
<?php } if (isset($info) && $info == "complete") { ?>
    <script type="text/javascript">
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        $(document).ready(function () {
            Toast.fire({
                icon: 'success',
                title: "Records updated Successfully"
            })
        });
    </script> 
<?php } ?>