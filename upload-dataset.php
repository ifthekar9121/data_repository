<?php
// Start the session
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $name = $_SESSION['name'];
    $name = explode(" ", $name);
}
else{
    echo "<script>alert('Please login before upload dataset!!!');</script>";
    header('Location: login.php');
     exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <!-- include Head -->
    <?php include "partials/head.php" ?>

    <!-- body start -->
    <body class="loading" data-layout-mode="horizontal">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- include Head -->
            <?php include "partials/topbar.php" ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Upload Dataset</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <form onsubmit="return false;" id="dataseUploadForm" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>
                                            <div class="mb-3">
                                                <label for="dataset-title" class="form-label">Dataset Title <span class="text-danger">*</span></label>
                                                <input type="text" name="datasetTitle" id="datasetTitle" class="form-control" placeholder="e.g : Iris">
                                            </div>

                                            <div class="mb-3">
                                                <label for="dataset-summary" class="form-label">Dataset Summary</label>
                                                <textarea class="form-control" name="datasetSummary" id="datasetSummary" rows="3" placeholder="Please enter summary"></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label for="dataset-character" class="form-label">Select Datasets Characteristics *</label>
                                                <div class="p-3 pt-1 pb-2 checkboxes">
                                                    <label class="text-reset notification-item mb-2 d-block fw-normal"><input type="checkbox" class="character" value="tabular" id="tabular" /> Tabular</label>

                                                    <label class="text-reset notification-item mb-2 d-block fw-normal"><input type="checkbox" class="character" value="image" id="image" /> Image</label>

                                                    <label class="text-reset notification-item mb-2 d-block fw-normal"><input type="checkbox" class="character" value="multivariate" id="multivariate" /> Multivariate</label>

                                                    <label class="text-reset notification-item mb-2 d-block fw-normal"><input type="checkbox" class="character" value="sequential" id="sequential" /> Sequential</label>   

                                                    <label class="text-reset notification-item mb-2 d-block fw-normal"><input type="checkbox" class="character" value="time-series" id="time-series" /> Time Series</label>

                                                    <label class="text-reset notification-item mb-2 d-block fw-normal"><input type="checkbox" class="character" value="spatiotemporal" id="spatiotemporal" /> Spatiotemporal</label>

                                                    <label class="text-reset notification-item mb-2 d-block fw-normal"><input type="checkbox" class="character" value="text" id="text" /> Text</label>  

                                                    <label class="text-reset notification-item d-block fw-normal"><input type="checkbox" class="character" value="other" id="other" /> Other</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="subject-area" class="form-label">Subject Area *</label>
                                                <div class="p-3 pt-1 pb-2 checkboxes">
                                                    <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" class="subject" value="biology" id="biology" /> Biology</label>

                                                    <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" class="subject" value="business" id="business" /> Business</label>

                                                    <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" class="subject" value="climate" id="climate" /> Climate and Environment</label>   

                                                    <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" class="subject" value="computer" id="computer" /> Computer Science</label>

                                                    <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" class="subject" value="engineering" id="engineering" /> Engineering</label>

                                                    <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" class="subject" value="games" id="games" /> Games</label>

                                                    <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" class="subject" value="health" id="health" /> Health And Medicine</label>

                                                    <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" class="subject" value="law" id="law" /> Law</label>

                                                    <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" class="subject" value="physics" id="physics" /> Physics and Chemistry</label>

                                                    <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" class="subject" value="social" id="social" /> Social Science</label> 

                                                    <label class="text-reset notification-item d-block"><input type="checkbox" class="subject" value="other" id="other" /> Other</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="associated -tasks" class="form-label">Associated Tasks *</label>
                                                <div class="p-3 pt-1 pb-2 checkboxes">
                                                    <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" class="task" value="classification" id="classification" /> Classification</label>

                                                    <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" class="task" value="regression" id="regression" /> Regression</label>

                                                    <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" class="task" value="clustering" id="clustering" /> Clustering</label> 

                                                    <label class="text-reset notification-item d-block"><input type="checkbox" class="task" value="other" id="other" /> Other</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="feature -types" class="form-label">Feature Types *</label>
                                                <div class="p-3 pt-1 pb-2 checkboxes">
                                                    <label class="text-reset notification-item mb-2 d-block">
                                                        <input type="checkbox" class="type" value="real" id="real" /> Real
                                                    </label>

                                                    <label class="text-reset notification-item mb-2 d-block">
                                                        <input type="checkbox" class="type" value="categorical" id="categorical" /> Categorical
                                                    </label>

                                                    <label class="text-reset notification-item d-block">
                                                        <input type="checkbox" class="type" value="integer" id="integer" /> Integer
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="visibility" class="form-label">Feature Types *</label>
                                                <div class="form-check form-switch mar-le-25">
                                                    <input class="form-check-input visibility" type="radio" name="visibility" id="public" value="1" checked>
                                                    <label class="form-check-label" for="public">Public</label>
                                                </div>
                                                <div class="form-check form-switch mar-le-25">
                                                    <input class="form-check-input visibility" type="radio" name="visibility" id="private" value="2">
                                                    <label class="form-check-label" for="private">Private</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end card -->
                                </div> <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Dataset File *</h5>
                                            <input class="form-control" type="file" name="doc_file" id="formFileMultiple">
                                        </div>
                                    </div> <!-- end col-->

                                    <input type="hidden" name="crud_req" value="upload">

                                    <div class="text-center mb-3">
                                        <button type="button" class="btn w-sm btn-danger waves-effect waves-light cancel">Cancel</button>
                                        <button type="button" class="btn w-sm btn-success waves-effect waves-light save">Save</button>
                                    </div>

                                </div> <!-- end col-->
                            </div>
                            <!-- end row -->
                        </form>
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- include footer -->
                <?php include "partials/footer.php" ?>

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- include linked JS -->
        <?php include "partials/linked-js.php" ?>

        <!-- Select2 js-->
        <script src="assets/libs/select2/js/select2.min.js"></script>

        <!-- Init js-->
        <script src="assets/js/pages/form-fileuploads.init.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/add-product.init.js"></script>

        <!-- Init js -->
        <script src="assets/js/config.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/upload-dataset.js"></script>
        
    </body>
</html>