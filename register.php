<!DOCTYPE html>
<html lang="en">

    <!-- include Head -->
    <?php include "partials/head.php" ?>

    <body class="loading authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="index.php" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="assets/images/uiu.png" alt="" height="60">
                                            </span>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-4 mt-3">Don't have an account? Create your account, it takes less than a minute</p>
                                </div>

                                <form onsubmit="return false;" id="registerForm">

                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Full Name *</label>
                                        <input class="form-control" type="text" id="name" name="name" placeholder="Enter your name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Phone Number *</label>
                                        <input class="form-control" type="number" name="phone" id="phone" required placeholder="Enter your phone number">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address *</label>
                                        <input class="form-control" type="email" name="email" id="email" required placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Institution *</label>
                                        <input class="form-control" type="institution" name="institution" id="institution" required placeholder="Enter your institution">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password *</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="rePassword" class="form-label">Retype Password *</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="rePassword" name="rePassword" class="form-control" placeholder="Retype your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="crud_req" id="crud_req" value="register">
                                    <input type="hidden" name="userRole" id="userRole" value="2">
                                    <div class="text-center d-grid">
                                        <button class="btn btn-success" type="submit" id="registerButton"> Sign Up </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">Already have account?  <a href="login.php" class="text-white ms-1"><b>Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

         <!-- Login js -->
        <script src="./assets/js/config.js"></script>
        
        <!-- Login js -->
        <script src="./assets/js/pages/register.js"></script>
        
    </body>
</html>