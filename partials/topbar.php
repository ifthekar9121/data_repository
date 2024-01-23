<!-- Topbar Start -->
<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-end mb-0">

            <li class="d-none d-lg-block">
                <form class="app-search">
                    <div class="app-search-box dropdown">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search..." id="top-search">
                            <button class="btn input-group-text" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>  
                    </div>
                </form>
            </li>
    
            <li class="dropdown d-inline-block d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>

            <?php if (isset($_SESSION['user_id'])){ ?>
                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/user.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ms-1"><?php echo($name[0]) ?><i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>
        
                        <!-- item-->
                        <input type="hidden" name="userID" id="userIdInput" value="<?php echo($user_id); ?>">
                        <a href="profile.php" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>My Account</span>
                        </a>
        
                        <!-- item-->
                        <?php if ($_SESSION['user_role'] == 1) { ?>
                            <a href="admin-manage.php" class="dropdown-item notify-item">
                        <?php  }
                        else{ ?>
                        <a href="manage-datasets.php" class="dropdown-item notify-item">
                    <?php } ?>
                            <i class="fe-settings"></i>
                            <span>Manage Datasets</span>
                        </a>
        
                        <div class="dropdown-divider"></div>
        
                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item" id="logout">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>
        
                    </div>
                </li>
            <?php } 
            else { ?>
                <li class="dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" href="./login.php" role="button"><i class="fe-log-in me-1"></i>Login</a>
                </li>
            <?php } ?>
        </ul>
    
        <!-- LOGO -->
        <div class="logo-box">   
            <a href="index.php" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="./assets/images/uiu.png" alt="" height="40">
                </span>
                <span class="logo-lg">
                    <img src="./assets/images/uiu.png" alt="" height="50">
                </span>
            </a>
        </div>
    
        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>   
    
            <li class="dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" href="./upload-dataset.php" role="button"><i class="fe-upload me-1"></i>Upload Dataset</a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<!-- end Topbar -->

<div class="topnav d-block d-lg-none">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="datasets.php" id="topnav-dashboard" role="button"><i class="fe-database me-1"></i>Datasets</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="datasets.php" id="topnav-dashboard" role="button"><i class="fe-upload me-1"></i> Upload Dataset</a>
                    </li>
                </ul> <!-- end navbar-->
            </div> <!-- end .collapsed-->
        </nav>
    </div> <!-- end container-fluid -->
</div> <!-- end topnav-->