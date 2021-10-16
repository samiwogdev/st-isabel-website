<?php
include_once '../configuration.php';
if (!isset($_GET['auth'])) {
    header("location: nursery_primary_page_info?info=failed");
    exit;
} else {
    $auth = $_GET['auth'];
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
                <h3>Update Page Information</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><small>Update Page Information</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <?php
                        $nursery_primary_page_info = Nursery_primary_page_info::getInstance();
                        $auths = Nursery_primary_page_info::sanitize_input($auth);
                        $nursery_primary_page_info->setId($auths);
                        $nursery_primary_page_infoInfo = $nursery_primary_page_info->getById();
                        ?>
                        <form class="form-horizontal form-label-left" action="../controller/update_nursery_primary_page_info?auth=<?php echo $auths ?>" method="post" enctype="multipart/form-data">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="title" value="<?php echo $nursery_primary_page_infoInfo['title'] ?>" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Description <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="description" value="<?php echo $nursery_primary_page_infoInfo['description'] ?>"   required="required" class="form-control">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" name="update_nursery_primary_page_info" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>
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
<?php } ?>