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
                <h3>Form Elements</h3>
            </div>

        </div>
        <div class="clearfix"></div>


        <div class="col-md-12 col-sm-12 ">
            <div id="toolbar">
                <button class="ql-bold">Bold</button>
                <button class="ql-italic">Italic</button>
            </div>

            <!-- Create the editor container -->
            <div id="editor">
                <p>Hello World!</p>
            </div>

            <!-- Include the Quill library -->
            <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>

            <!-- Initialize Quill editor -->
            <script>
                var editor = new Quill('#editor', {
                    modules: {toolbar: '#toolbar'},
                    theme: 'snow',
                });
            </script>
        </div>
    </div>
</div>
<!-- /page content -->
<?php include_once '../includes/admin_footer.php'; ?>

</body></html>
