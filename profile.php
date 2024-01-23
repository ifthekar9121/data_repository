<?php
// Start the session
session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
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
                                    <h4 class="page-title">Profile</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="card text-center">
                                    <div class="card-body">
                                        <img src="assets/images/user.jpg" class="rounded-circle img-thumbnail" alt="profile-image">

                                        <h4 class="mb-4" id="name"></h4>

                                        <div class="row">
                                            <div class="col-md-4 offset-md-4">
                                                <div class="row text-start">
                                                    <div class="col-6">
                                                        <p class="mb-2 font-13"><strong>Full Name</strong></p>
                                                        <p class="mb-2 font-13"><strong>Mobile</strong></p>
                                                        <p class="mb-2 font-13"><strong>Email</strong></p>
                                                        <p class="mb-1 font-13"><strong>Institution</strong></p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="mb-2 font-13" id="profileName"></p>
                                                        <p class="mb-2 font-13" id="profileMobile"></p>
                                                        <p class="mb-2 font-13" id="profileEmail"></p>
                                                        <p class="mb-1 font-13" id="profileInstitution"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                   
                                    </div>                                 
                                </div> <!-- end card -->
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


        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

        <!-- User js -->
        <script src="assets/js/logout.js"></script>

        <!-- User js -->
        <script src="assets/js/config.js"></script>

        <!-- User js -->
        <script src="assets/js/pages/user.js"></script>

    </body>

</html>