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
                                    <h4 class="page-title">Browese Datasets</h4>
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
                                                        <option class="sortOption" value="more-download">More Download</option>
                                                        <option class="sortOption" value="less-download">Less Download</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="table-responsive">
                                            <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                                <tbody>
                                                    <tr class="dataset" data-category="tabular classification engineering real">
                                                        <td>
                                                            <a href="dataset-details.php">
                                                                <div class="card mb-3 p-3" >                                                               
                                                                    <div class="row g-0">
                                                                        <div class="col-md-2 col-sm-3 text-center">
                                                                            <img src="assets/images/database.png" alt="..." class="card-custom-img">
                                                                        </div>
                                                                        <div class="col-md-10 col-sm-9">
                                                                            <div class="card-body">
                                                                                <h4 class="card-title" id="data-title">Card title 1</h4>
                                                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row text-center">
                                                                        <div class="col-md-3 col-sm-6 col-6">
                                                                            <h6>Characteristics</h6>
                                                                            <p class="card-text"><small class="text-muted" id="character">Tabular</small></p>
                                                                        </div>
                                                                        <div class="col-md-2 col-sm-6 col-6">
                                                                            <h6>Associated Tasks</h6>
                                                                            <p class="card-text"><small class="text-muted" id="task">Classification</small></p>
                                                                        </div>
                                                                        <div class="col-md-2 col-sm-6 col-6">
                                                                            <h6>Subject Area</h6>
                                                                            <p class="card-text"><small class="text-muted" id="subject">Engineering</small></p>
                                                                        </div>
                                                                        <div class="col-md-2 col-sm-6 col-6">
                                                                            <h6>Feature Type</h6>
                                                                            <p class="card-text"><small class="text-muted" id="type">Real</small></p>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-6">
                                                                            <h6>Downloaded</h6>
                                                                            <p class="card-text"><small class="text-muted" id="download">10</small></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="dataset" data-category="sequential regression biology categorical">
                                                        <a href="dataset-detail.php">
                                                            <td>
                                                                <div class="card mb-3 p-3">
                                                                    <div class="row g-0">
                                                                        <div class="col-md-2 col-sm-3 text-center">
                                                                            <img src="assets/images/database.png" alt="..." class="card-custom-img">
                                                                        </div>
                                                                        <div class="col-md-10 col-sm-9">
                                                                            <div class="card-body">
                                                                                <h4 class="card-title" id="data-title">Card title 2</h4>
                                                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row text-center">
                                                                        <div class="col-md-3 col-sm-6 col-6">
                                                                            <h6>Characteristics</h6>
                                                                            <p class="card-text"><small class="text-muted" id="character">Sequential</small></p>
                                                                        </div>
                                                                        <div class="col-md-2 col-sm-6 col-6">
                                                                            <h6>Associated Tasks</h6>
                                                                            <p class="card-text"><small class="text-muted" id="task">Regression</small></p>
                                                                        </div>
                                                                        <div class="col-md-2 col-sm-6 col-6">
                                                                            <h6>Subject Area</h6>
                                                                            <p class="card-text"><small class="text-muted" id="subject">Biology</small></p>
                                                                        </div>

                                                                        <div class="col-md-2 col-sm-6 col-6">
                                                                            <h6>Feature Type</h6>
                                                                            <p class="card-text"><small class="text-muted" id="type">Categorical</small></p>
                                                                        </div>

                                                                        <div class="col-md-3 col-sm-6 col-6">
                                                                            <h6>Downloaded</h6>
                                                                            <p class="card-text"><small class="text-muted" id="download">15</small></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </a>
                                                    </tr>
                                                    <tr class="dataset" data-category="text clustering law integer">
                                                        <a href="dataset-detail.php">
                                                            <td>
                                                                <div class="card mb-3 p-3">
                                                                    <div class="row g-0">
                                                                        <div class="col-md-2 col-sm-3 text-center">
                                                                            <img src="assets/images/database.png" alt="..." class="card-custom-img">
                                                                        </div>
                                                                        <div class="col-md-10 col-sm-9">
                                                                            <div class="card-body">
                                                                                <h4 class="card-title" id="data-title">Card title 3</h4>
                                                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row text-center">
                                                                        <div class="col-md-3 col-sm-6 col-6">
                                                                            <h6>Characteristics</h6>
                                                                            <p class="card-text"><small class="text-muted" id="character">Text</small></p>
                                                                        </div>
                                                                        <div class="col-md-2 col-sm-6 col-6">
                                                                            <h6>Associated Tasks</h6>
                                                                            <p class="card-text"><small class="text-muted" id="task">Clustering</small></p>
                                                                        </div>
                                                                        <div class="col-md-2 col-sm-6 col-6">
                                                                            <h6>Subject Area</h6>
                                                                            <p class="card-text"><small class="text-muted" id="subject">Law</small></p>
                                                                        </div>
                                                                        <div class="col-md-2 col-sm-6 col-6">
                                                                            <h6>Feature Type</h6>
                                                                            <p class="card-text"><small class="text-muted" id="type">Integer</small></p>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-6">
                                                                            <h6>Downloaded</h6>
                                                                            <p class="card-text"><small class="text-muted" id="download">20</small></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </a>
                                                    </tr>
                                                    <tr class="dataset" data-category="time-series clustering law integer">
                                                        <a href="dataset-detail.php">
                                                            <td>
                                                                <div class="card mb-3 p-3">
                                                                    <div class="row g-0">
                                                                        <div class="col-md-2 col-sm-3 text-center">
                                                                            <img src="assets/images/database.png" alt="..." class="card-custom-img">
                                                                        </div>
                                                                        <div class="col-md-10 col-sm-9">
                                                                            <div class="card-body">
                                                                                <h4 class="card-title" id="data-title">Card title 4</h4>
                                                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row text-center">
                                                                        <div class="col-md-3 col-sm-6 col-6">
                                                                            <h6>Characteristics</h6>
                                                                            <p class="card-text"><small class="text-muted" id="character">Time Series</small></p>
                                                                        </div>
                                                                        <div class="col-md-2 col-sm-6 col-6">
                                                                            <h6>Associated Tasks</h6>
                                                                            <p class="card-text"><small class="text-muted" id="task">Clustering</small></p>
                                                                        </div>
                                                                        <div class="col-md-2 col-sm-6 col-6">
                                                                            <h6>Subject Area</h6>
                                                                            <p class="card-text"><small class="text-muted" id="subject">Law</small></p>
                                                                        </div>
                                                                        <div class="col-md-2 col-sm-6 col-6">
                                                                            <h6>Feature Type</h6>
                                                                            <p class="card-text"><small class="text-muted" id="type">Integer</small></p>
                                                                        </div>
                                                                        <div class="col-md-3 col-sm-6 col-6">
                                                                            <h6>Downloaded</h6>
                                                                            <p class="card-text"><small class="text-muted" id="download">25</small></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </a>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr class="active">
                                                    <td colspan="5">
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

        <!-- Footable js -->
        <script src="assets/libs/footable/footable.all.min.js"></script>



        <script type="text/javascript">
            $(document).ready(function () {
                $(window).on("load", function () {
                    $("#demo-foo-row-toggler").footable(),
                    $("#demo-foo-accordion").footable().on("footable_row_expanded", function (o) {
                        $("#demo-foo-accordion tbody tr.footable-detail-show")
                            .not(o.row)
                            .each(function () {
                                $("#demo-foo-accordion").data("footable").toggleDetail(this);
                            });
                    }),
                    $("#demo-foo-pagination").footable(),
                    $("#demo-show-entries").change(function (o) {
                        o.preventDefault();
                        var t = $(this).val();
                        $("#demo-foo-pagination").data("page-size", t), $("#demo-foo-pagination").trigger("footable_initialized");
                    });

                    var t = $("#demo-foo-filtering");
                    t.footable().on("footable_filtering", function (o) {
                        var t = $("#demo-foo-filter-status").find(":selected").val();
                        (o.filter += o.filter && 0 < o.filter.length ? " " + t : t), (o.clear = !o.filter);
                    }),
                    $("#demo-foo-filter-status").change(function (o) {
                        o.preventDefault(), t.trigger("footable_filter", { filter: $(this).val() });
                    }),

                    $("#demo-foo-search").on("input propertychange", function () {
                        filterFunc();
                        performSearch();
                    });

                    var e = $("#demo-foo-addrow");
                    e.footable().on("click", ".demo-delete-row", function () {
                        var o = e.data("footable"),
                            t = $(this).parents("tr:first");
                        o.removeRow(t);
                    }),
                    $("#demo-input-search2").on("input", function (o) {
                        o.preventDefault(), e.trigger("footable_filter", { filter: $(this).val() });
                    }),
                    $("#demo-btn-addrow").click(function () {
                        e.data("footable").appendRow(
                            '<tr><td style="text-align: center;"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td><td>Adam</td><td>Doe</td><td>Traffic Court Referee</td><td>22 Jun 1972</td><td><span class="badge label-table badge-success   ">Active</span></td></tr>'
                        );
                    });
                });

                // reset
                $('#resetBtn').on('click', function (e) {
                    $('.checkboxes input:checkbox').prop('checked', false);
                    $('#demo-foo-search').val(''); // Clear the search input
                    filterFunc();
                    performSearch(); // Trigger search after resetting
                });

                var $filterCheckboxes = $('input[type="checkbox"]');
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

                    $('.dataset').hide().filter($filteredResults).show();
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

                $filterCheckboxes.on('change', function () {
                    filterFunc();
                    performSearch();
                });
            });
        </script>
    </body>
</html>