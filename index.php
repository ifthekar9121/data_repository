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

            <!-- include topbar -->
            <?php include "partials/topbar.php" ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <!-- Start Content-->
                <div class="content">
                    <!-- Start Container -->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Recent Datasets</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Filtering</h4>
                                        <p class="sub-header">
                                            include filtering in your FooTable.
                                        </p>
    
                                        <div class="mb-2">
                                            <div class="row row-cols-sm-auto g-2 align-items-center">
                                                <div class="dropdown notification-list">
                                                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                                                        <i class="fe-filter noti-icon"></i>
                                                    </a>
                                                </div>

                                                <div class="col-12 text-sm-center">
                                                    <select id="demo-foo-filter-status" class="form-select form-select-sm">
                                                        <option class="sortOption" value="" id="dropdownBtnSort">Sort By<i class="fe-chevron-down"></i></option>
                                                        <option class="sortOption" value="data-title-a-z">Title (A-Z)</option>
                                                        <option class="sortOption" value="data-title-z-a">Title (Z-A)</option>
                                                        <option class="sortOption" value="more-download">Newer </option>
                                                        <option class="sortOption" value="less-download">Older </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" id="datasetContainer">
                                            
                                            <!-- Datasets will be dynamically added here -->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <!-- End Container -->
                </div>
                <!-- End Content -->

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

        <!-- Config js -->
        <script src="./assets/js/config.js"></script>

        <!-- index js -->
        <script src="./assets/js/pages/index.js"></script>

        <script type="text/javascript">

            var filterFunc = function () {
        var selectedFilters = {};

        $filterCheckboxes.filter(':checked').each(function () {
            if (!selectedFilters.hasOwnProperty(this.name)) {
                selectedFilters[this.name] = [];
            }

            selectedFilters[this.name].push(this.value);
        });

        var $filteredResults = $('.dataset');

        $.each(selectedFilters, function (name, filterValues) {
            $filteredResults = $filteredResults.filter(function () {
                var matched = false,
                    currentFilterValues = $(this).data('category').split(' ');

                $.each(currentFilterValues, function (_, currentFilterValue) {
                    if ($.inArray(currentFilterValue, filterValues) !== -1) {
                        matched = true;
                        return false;
                    }
                });

                return matched;
            });
        });

        $('.dataset').hide(); // Hide all datasets
        $filteredResults.show(); // Show filtered datasets
    };

    var performSearch = function () {
        var searchValue = $("#demo-foo-search").val().toLowerCase();

        var $filteredResults = $('.dataset:visible'); // Consider only visible (filtered) rows

        if (searchValue === "") {
            $filteredResults.show(); // If search value is empty, show all rows
            return;
        }

        $filteredResults.each(function () {
            var rowText = $(this).text().toLowerCase();
            if (rowText.indexOf(searchValue) > -1 || searchValue === "") {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    };

        </script>
        
    </body>
</html>