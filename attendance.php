<?php include('include/header.php') ?>
<?php include('include/sidebar.php') ?>



<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

          <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Pickers</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Pickers</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-9 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Date Picker</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="example">
                                            <p class="mb-1">Date Range Pick</p>
                                            <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="example">
                                            <p class="mb-1">Date Range With Time</p>
                                            <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="example">
                                            <p class="mb-1">Limit Selectable Dates</p>
                                            <input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2015 - 06/07/2015">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-12">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pick-Date picker</h4>
                            </div>
                            <div class="card-body">
                                <p class="mb-1">Default picker</p>
                                <input name="datepicker" class="datepicker-default form-control" id="datepicker">
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Date picker</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-xl-3 col-xxl-6">
                                        <label>Default Clock Picker</label>
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" value="09:30"> <span class="input-group-append"><span class="input-group-text"><i
                                                        class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 col-xxl-6">
                                        <label>Auto close Clock Picker</label>
                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                            <input type="text" class="form-control" value="13:14"> <span class="input-group-append"><span class="input-group-text"><i
                                                        class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 col-xxl-6 mt-4 mt-lg-0">
                                        <label>Now time</label>
                                        <div class="input-group">
                                            <input class="form-control" id="single-input" value="" placeholder="Now">
                                            <span class="input-group-btn"><button type="button" id="check-minutes"
                                                    class="btn waves-effect waves-light btn-ft btn-success">Check the
                                                    minutes</button></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 col-xxl-6 mt-4 mt-lg-0">
                                        <label>Left Placement</label>
                                        <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                                            <input type="text" class="form-control" value="13:14"> <span class="input-group-append"><span class="input-group-text"><i
                                                        class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Material Date picker</h4>
                            </div>
                            <div class="card-body">
                                <div class="row form-material">
                                    <div class="col-xl-3 col-xxl-6 col-md-6">
                                        <label>Default Material Date Picker</label>
                                        <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6">
                                        <label>Default Material Date Timepicker</label>
                                        <input type="text" id="date-format" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mt-4 mt-lg-0">
                                        <label>Time Picker</label>
                                        <input class="form-control" id="timepicker" placeholder="Check time">
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mt-4 mt-lg-0">
                                        <label>Min Date set</label>
                                        <input type="text" class="form-control" placeholder="set min date" id="min-date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Color Picker</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 mb-5">
                                        <div class="example">
                                            <p class="mb-1">Simple mode</p>
                                            <input type="text" class="as_colorpicker form-control" value="#7ab2fa">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-5">
                                        <div class="example">
                                            <p class="mb-1">Complex mode</p>
                                            <input type="text" class="complex-colorpicker form-control" value="#fa7a7a">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-5">
                                        <div class="example">
                                            <p class="mb-1">Gradiant mode</p>
                                            <input type="text" class="gradient-colorpicker form-control" value="#bee0ab">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


       
           <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= $baseurl ?>assets/vendor/global/global.min.js"></script>
    <script src="<?= $baseurl ?>assets/js/quixnav-init.js"></script>
    <script src="<?= $baseurl ?>assets/js/custom.min.js"></script>
    


    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="<?= $baseurl ?>assets/vendor/moment/moment.min.js"></script>
    <script src="<?= $baseurl ?>assets/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="<?= $baseurl ?>assets/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="<?= $baseurl ?>assets/vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="<?= $baseurl ?>assets/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="<?= $baseurl ?>assets/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="<?= $baseurl ?>assets/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="<?= $baseurl ?>assets/vendor/pickadate/picker.js"></script>
    <script src="<?= $baseurl ?>assets/vendor/pickadate/picker.time.js"></script>
    <script src="<?= $baseurl ?>assets/vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="<?= $baseurl ?>assets/js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="<?= $baseurl ?>assets/js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="<?= $baseurl ?>assets/js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="<?= $baseurl ?>assets/js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="<?= $baseurl ?>assets/js/plugins-init/pickadate-init.js"></script>

</body>
<?php include('include/footer.php') ?>  
</html>