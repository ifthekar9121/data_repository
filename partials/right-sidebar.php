<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <h4 class="fw-medium px-3 m-0 py-2 font-16 text-uppercase bg-light">
            <span class="d-block py-1">Filters</span>
        </h4>
        <div class="tab-content pt-0">
            <div class="search-bar p-3">
                <div class="position-relative">
                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                    <span class="mdi mdi-magnify"></span>
                </div>
            </div>

            <h6 class="fw-medium px-3 mt-2 text-uppercase">Datasets Characteristics</h6>
            <form class="p-3 pt-1 pb-2 checkboxes">
                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="character" value="tabular" id="tabular" /> Tabular</label>

                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="character" value="image" id="image" /> Image</label>

                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="character" value="multivariate" id="multivariate" /> Multivariate</label>

                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="character" value="sequential" id="sequential" /> Sequential</label>   

                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="character" value="time-series" id="time-series" /> Time Series</label>

                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="character" value="spatiotemporal" id="spatiotemporal" /> Spatiotemporal</label>

                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="character" value="text" id="text" /> Text</label>  

                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="character" value="other" id="other" /> Other</label>
            </form>

            <h6 class="fw-medium px-3 mt-2 text-uppercase">Subject Area</h6>
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

                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="other" id="other" /> Other</label>
            </form>

            <h6 class="fw-medium px-3 mt-2 text-uppercase">Associated Tasks</h6>
            <form class="p-3 pt-1 pb-2 checkboxes">
                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="task" value="classification" id="classification" /> Classification</label>

                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="task" value="regression" id="regression" /> Regression</label>

                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="task" value="clustering" id="clustering" /> Clustering</label> 

                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="task" value="other" id="other" /> Other</label>
            </form>

            <h6 class="fw-medium px-3 mt-2 text-uppercase">Feature Types</h6>
            <form class="p-3 pt-1 pb-2 checkboxes">
                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="real" id="real" /> Real</label>

                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="categorical" id="categorical" /> Categorical</label>

                <label class="text-reset notification-item mb-2 d-block"><input type="checkbox" name="subject" value="integer" id="integer" /> Integer</label>
            </form>

            <div class="d-grid p-2">
                <button class="btn btn-danger" id="resetBtn">Reset Fiters</button>
            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>