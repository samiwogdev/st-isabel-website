<?php
include_once '../configuration.php';
if (!isset($_GET['auth'])) {
    header("location: creche_page_info_ext?info=failed");
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
                        $creche_page_info_ext = CrechePageInfoExt::getInstance();
                        $auths = CrechePageInfoExt::sanitize_input($auth);
                        $creche_page_info_ext->setId($auths);
                        $creche_page_info_extInfo = $creche_page_info_ext->getById();
                        ?>
                        <form class="form-horizontal form-label-left" action="../controller/update_creche_page_info_ext?auth=<?php echo $auths ?>" method="post" enctype="multipart/form-data">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="title" value="<?php echo $creche_page_info_extInfo['title'] ?>" required="required" class="form-control ">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Description <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                  <textarea cols="30" rows="10" type="text" name="description" value="<?php echo $creche_page_info_extInfo['description'] ?>"   required="required" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" name="update_creche_page_info_ext" class="btn btn-success">Update</button>
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