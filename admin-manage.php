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
                                    <h4 class="page-title">Manage Datasets</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                    <i class="fe-database font-22 avatar-title text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">58</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Total Datasets</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                                    <i class="fe-check font-22 avatar-title text-success"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">50</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Approve Datasets</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                                    <i class="fe-clock font-22 avatar-title text-info"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">6</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Pending Datasets</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                                    <i class="fe-x font-22 avatar-title text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">2</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Reject Datasets</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Datasets</h4>
                                        <div class="mb-2">
                                            <div class="row row-cols-sm-auto g-2 align-items-center">
                                                <div class="col-12">
                                                    <a href="upload-dataset.php" class="btn btn-sm btn-success"><i class="fe-check me-2"></i> Approve All</a>
                                                </div>
                                                <div class="col-12">
                                                    <a href="upload-dataset.php" class="btn btn-sm btn-danger"><i class="fe-x me-2"></i> Reject All</a>
                                                </div>
                                                <div class="col-12 text-sm-center">
                                                    <select id="demo-foo-filter-status" class="form-select form-select-sm">
                                                        <option value="">Show all</option>
                                                        <option value="approved">Approved</option>
                                                        <option value="pending">Pending</option>
                                                        <option value="declined">Declined</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="table-responsive">
                                            <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                                <thead>
                                                    <tr>
                                                        <th data-toggle="true">Title</th>
                                                        <th>Description</th>
                                                        <th data-hide="phone">Characteristics</th>
                                                        <th data-hide="phone, tablet">Associated Tasks</th>
                                                        <th data-hide="phone, tablet">Subject Area</th>
                                                        <th data-hide="phone, tablet">Categorical</th>
                                                        <th data-hide="phone, tablet">Upload Date</th>
                                                        <th data-hide="phone, tablet">Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="dataset-details.php">
                                                                <img src="assets/images/database.png" alt="table-user" class="me-2 mb-1" height="35">
                                                                <p class="text-body fw-semibold d-inline">Card title</p>
                                                            </a>
                                                        </td>
                                                        <td>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</td>
                                                        <td>Sequential</td>
                                                        <td>Regression</td>
                                                        <td>Biology</td>
                                                        <td>Categorical</td>
                                                        <td nowrap>12-12-2012</td>
                                                        <td>Approved</td>
                                                        <td class="text-center">
                                                            <a href="edit-dataset.php" class="action-icon"><button type="button" class="btn w-sm btn-success waves-effect waves-light mb-1">Approve</button></a>
                                                            <a href="edit-dataset.php" class="action-icon"><button type="button" class="btn w-sm btn-danger waves-effect waves-light">Reject</button></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="dataset-details.php">
                                                                <img src="assets/images/database.png" alt="table-user" class="me-2 mb-1" height="35">
                                                                <p class="text-body fw-semibold d-inline">Card title</p>
                                                            </a>
                                                        </td>
                                                        <td>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</td>
                                                        <td>Sequential</td>
                                                        <td>Regression</td>
                                                        <td>Biology</td>
                                                        <td>Categorical</td>
                                                        <td nowrap>12-12-2012</td>
                                                        <td>Pending</td>
                                                        <td class="text-center">
                                                            <a href="edit-dataset.php" class="action-icon"><button type="button" class="btn w-sm btn-success waves-effect waves-light mb-1">Approve</button></a>
                                                            <a href="edit-dataset.php" class="action-icon"><button type="button" class="btn w-sm btn-danger waves-effect waves-light">Reject</button></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="dataset-details.php">
                                                                <img src="assets/images/database.png" alt="table-user" class="me-2 mb-1" height="35">
                                                                <p class="text-body fw-semibold d-inline">Card title</p>
                                                            </a>
                                                        </td>
                                                        <td>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</td>
                                                        <td>Sequential</td>
                                                        <td>Regression</td>
                                                        <td>Biology</td>
                                                        <td>Categorical</td>
                                                        <td nowrap>12-12-2012</td>
                                                        <td>Declined</td>
                                                        <td class="text-center">
                                                            <a href="edit-dataset.php" class="action-icon"><button type="button" class="btn w-sm btn-success waves-effect waves-light mb-1">Approve</button></a>
                                                            <a href="edit-dataset.php" class="action-icon"><button type="button" class="btn w-sm btn-danger waves-effect waves-light">Reject</button></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr class="active">
                                                    <td colspan="12">
                                                        <div class="text-end">
                                                            <ul class="pagination pagination-rounded justify-content-end footable-pagination mb-0"></ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div> <!-- end .table-responsive-->
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
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

        <!-- Footable js -->
        <script src="assets/libs/footable/footable.all.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/foo-tables.init.js"></script>
        
    </body>
</html>