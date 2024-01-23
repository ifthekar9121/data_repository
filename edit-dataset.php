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
                                    <h4 class="page-title">Update Dataset</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                                        <div class="mb-3">
                                            <label for="dataset-title" class="form-label">Dataset Title <span class="text-danger">*</span></label>
                                            <input type="text" id="dataset title" class="form-control" placeholder="e.g : Iris">
                                        </div>

                                        <div class="mb-3">
                                            <label for="dataset-summary" class="form-label">Dataset Summary</label>
                                            <textarea class="form-control" id="dataset summary" rows="3" placeholder="Please enter summary"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="dataset-character" class="form-label">Select Datasets Characteristics *</label>
                                            <form class="p-3 pt-1 pb-2 checkboxes">
                                                <label class="text-reset notification-item mb-2 d-block fw-normal"><input type="checkbox" name="character" value="tabular" id="tabular" /> Tabular</label>

                                                <label class="text-reset notification-item mb-2 d-block fw-normal"><input type="checkbox" name="character" value="image" id="image" /> Image</label>

                                                <label class="text-reset notification-item mb-2 d-block fw-normal"><input type="checkbox" name="character" value="multivariate" id="multivariate" /> Multivariate</label>

                                                <label class="text-reset notification-item mb-2 d-block fw-normal"><input type="checkbox" name="character" value="sequential" id="sequential" /> Sequential</label>   

                                                <label class="text-reset notification-item mb-2 d-block fw-normal"><input type="checkbox" name="character" value="time-series" id="time-series" /> Time Series</label>

                                                <label class="text-reset notification-item mb-2 d-block fw-normal"><input type="checkbox" name="character" value="spatiotemporal" id="spatiotemporal" /> Spatiotemporal</label>

                                                <label class="text-reset notification-item mb-2 d-block fw-normal"><input type="checkbox" name="character" value="text" id="text" /> Text</label>  

                                                <label class="text-reset notification-item d-block fw-normal"><input type="checkbox" name="character" value="other" id="other" /> Other</label>
                                            </form>
                                        </div>
                                        <div class="mb-3">
                                            <label for="subject-area" class="form-label">Subject Area *</label>
                                            <form class="p-3 pt-1 pb-2 checkboxes">
                                                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="biology" id="biology" /> Biology</label>

                                                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="business" id="business" /> Business</label>

                                                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="climate" id="climate" /> Climate and Environment</label>   

                                                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="computer" id="computer" /> Computer Science</label>

                                                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="engineering" id="engineering" /> Engineering</label>

                                                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="games" id="games" /> Games</label>

                                                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="health" id="health" /> Health And Medicine</label>

                                                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="law" id="law" /> Law</label>

                                                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="physics" id="physics" /> Physics and Chemistry</label>

                                                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="social" id="social" /> Social Science</label> 

                                                <label class="text-reset notification-item d-block"><input type="checkbox" name="subject" value="other" id="other" /> Other</label>
                                            </form>
                                        </div>
                                        <div class="mb-3">
                                            <label for="associated -tasks" class="form-label">Associated Tasks *</label>
                                            <form class="p-3 pt-1 pb-2 checkboxes">
                                                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="task" value="classification" id="classification" /> Classification</label>

                                                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="task" value="regression" id="regression" /> Regression</label>

                                                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="task" value="clustering" id="clustering" /> Clustering</label> 

                                                <label class="text-reset notification-item d-block"><input type="checkbox" name="task" value="other" id="other" /> Other</label>
                                            </form>
                                        </div>
                                        <div class="mb-3">
                                            <label for="feature -types" class="form-label">Feature Types *</label>
                                            <form class="p-3 pt-1 pb-2 checkboxes">
                                                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="real" id="real" /> Real</label>

                                                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="categorical" id="categorical" /> Categorical</label>

                                                <label class="text-reset notification-item d-block"><input type="checkbox" name="subject" value="integer" id="integer" /> Integer</label>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Dataset Images</h5>

                                        <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                            data-upload-preview-template="#uploadPreviewTemplate">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>

                                            <div class="dz-message needsclick">
                                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                <h3>Drop files here or click to upload.</h3>
                                                <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                    <strong>not</strong> actually uploaded.)</span>
                                            </div>
                                        </form>

                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                                    </div>
                                </div> <!-- end col-->

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Dataset File</h5>

                                        <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                            data-upload-preview-template="#uploadPreviewTemplate">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>

                                            <div class="dz-message needsclick">
                                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                <h3>Drop files here or click to upload.</h3>
                                                <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                    <strong>not</strong> actually uploaded.)</span>
                                            </div>
                                        </form>

                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                                    </div>
                                </div> <!-- end col-->

                                <div class="text-center mb-3">
                                    <button type="button" class="btn w-sm btn-danger waves-effect waves-light">Cancel</button>
                                    <button type="button" class="btn w-sm btn-success waves-effect waves-light">Update</button>
                                </div>

                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->


                        <!-- file preview template -->
                        <div class="d-none" id="uploadPreviewTemplate">
                            <div class="card mt-1 mb-0 shadow-none border">
                                <div class="p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                        </div>
                                        <div class="col ps-0">
                                            <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                            <p class="mb-0" data-dz-size></p>
                                        </div>
                                        <div class="col-auto">
                                            <!-- Button -->
                                            <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                <i class="dripicons-cross"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
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
        <!-- Dropzone file uploads-->
        <script src="assets/libs/dropzone/min/dropzone.min.js"></script>

        <!-- Init js-->
        <script src="assets/js/pages/form-fileuploads.init.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/add-product.init.js"></script>
        
    </body>
</html>