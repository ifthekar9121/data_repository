<?php
// Start the session
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $user_role = $_SESSION['user_role'];
    $name = $_SESSION['name'];
    $name = explode(" ", $name);
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

            <!-- include topbar -->
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
                                    <h4 class="page-title">Dataset Details</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-12">
                                                <div class="dataset-image">
                                                    <img src="assets/images/database.png" alt="" class="img-fluid mx-auto d-block rounded">
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-lg-10 col-sm-12">
                                                <div class="ps-xl-3 mt-3 mt-xl-0">
                                                    <a href="#" class="text-primary">Uploaded: 12-12-2012</a>
                                                    <h4 class="mb-3 dataset-title">Iris Database</h4>

                                                    <p class="mb-4 dataset-description">The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.</p>
    
                                                    <div>
                                                        <button type="button" class="btn btn-warning waves-effect waves-light">
                                                            <span class="btn-label"><i class="fe-download"></i></span>Download Dataset
                                                        </button>
                                                        <?php if ($user_role == 1) { ?>
                                                            <button type="button" class="btn btn-success waves-effect waves-light">
                                                                <span class="btn-label"><i class="fe-download"></i></span>Approve Dataset
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light">
                                                                <span class="btn-label"><i class="fe-download"></i></span>Reject Dataset
                                                            </button>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->
    
    
                                        <div class="table-responsive mt-4">
                                            <table class="table table-bordered table-centered mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Characteristics</th>
                                                        <th>Associated Tasks</th>
                                                        <th>Subject Area</th>
                                                        <th>Feature Type</th>
                                                        <th>Downloaded</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Sequential</td>
                                                        <td>Regression</td>
                                                        <td>Biology</td>
                                                        <td>Categorical</td>
                                                        <td>15</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- include footer -->
                <?php include "partials/footer.php" ?>


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

            <!-- include Right Sidebar -->
            <?php include "partials/right-sidebar.php" ?>


        </div>
        <!-- END wrapper -->

        <!-- include linked JS -->
        <?php include "partials/linked-js.php" ?>

        <!-- Footable js -->
        <script src="assets/libs/footable/footable.all.min.js"></script>

        <!-- Config js -->
        <script src="./assets/js/config.js"></script>

        <!-- Config js -->
        <script src="./assets/js/pages/dataset-details.js"></script>
        
    </body>
</html>