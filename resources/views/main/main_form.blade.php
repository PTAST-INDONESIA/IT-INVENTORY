<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>AST HUB</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('quixlab-master/images/ast/ast_indonesia_logo.jpg') }}">
    <!-- Pignose Calender -->
    <link href="{{ asset('quixlab-master/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('quixlab-master/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('quixlab-master/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">


    <!-- Custom Stylesheet -->
    <link href="{{ asset('quixlab-master/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="{{ asset('quixlab-master/plugins/clockpicker/dist/jquery-clockpicker.min.css') }}" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="{{ asset('quixlab-master/plugins/jquery-asColorPicker-master/css/asColorPicker.css') }}" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="{{ asset('quixlab-master/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="{{ asset('quixlab-master/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('quixlab-master/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="{{ asset('quixlab-master/css/style.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('quixlab-master/plugins/select2/css/select2.min.css') }}">

     <!-- Custom Stylesheet -->
    <link href="{{ asset('quixlab-master/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- Toastr -->
    <link href="{{ asset('quixlab-master/plugins/toastr/css/toastr.min.css') }}" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <style>
            /* ================================
            NAV HEADER (LOGO / SIDEBAR TOP)
            ================================ */
            .nav-header {
                height: 55px !important;          /* default terlalu tinggi */
            }

            .nav-header .brand-logo {
                display: flex;
                align-items: center;       /* 🔥 center vertikal */
                justify-content: flex-start;
                height: 55px !important;
                padding: 0 0px !important;
            }

            .nav-header .brand-logo h4 {
                margin: 0 !important;
                line-height: normal !important;   /* jangan pakai line-height fix */
                font-size: 16px;
                white-space: nowrap;
            }

            /* Logo image */
            .nav-header .brand-logo img {
                max-height: 40px;
            }

            /* ================================
            HEADER TOP BAR
            ================================ */
            .header {
                height: 55px !important;
            }

            .header-content {
                padding: 0 12px !important;       /* 🔥 rapat kiri-kanan */
                height: 55px !important;
            }

            /* Hamburger */
            .nav-control {
                padding: 0 10px !important;
            }

            /* Header left kosong (supaya tidak makan space) */
            .header-left {
                padding-left: 0 !important;
            }

            /* User avatar */
            .header-right .user-img img {
                height: 34px !important;
                width: 34px !important;
            }

            /* Vertikal center semua item */
            .header-content > * {
                display: flex;
                align-items: center;
            }
        </style>

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('main/navheader')
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('main/header_form')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <style>
            /* ===============================
            SIDEBAR – RAPAT KE ATAS
            =============================== */

            /* Wrapper sidebar */
            .nk-sidebar {
                padding-top: 0 !important;
            }

            /* Menu utama */
            .nk-sidebar .metismenu {
                margin-top: 0 !important;
                padding-top: 0 !important;
            }

            /* Item menu */
            .nk-sidebar .metismenu > li {
                margin-top: 0 !important;
            }

            /* Link menu */
            .nk-sidebar .metismenu > li > a {
                padding-top: 8px !important;
                padding-bottom: 8px !important;
                min-height: 36px;
                font-size: 13px;
            }

            /* Icon menu */
            .nk-sidebar .metismenu > li > a i {
                font-size: 14px;
                margin-right: 8px;
            }

            /* Submenu */
            .nk-sidebar .metismenu ul a {
                padding-top: px !important;
                padding-bottom: 6px !important;
                font-size: 12.5px;
            }

            /* Hilangkan space kosong di atas sidebar */
            .nk-sidebar-scroll {
                padding-top: 0 !important;
            }
        </style>
        @include('main/sidebar_form')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <style>
            /* ===============================
            BUTTONS - GREEN LOGIN THEME
            ================================ */

            /* SOLID BUTTON */
            .btn-success {
                background-color: #1f8f4a;
                border-color: #1f8f4a;
                color: #ffffff;
                font-weight: 600;
                letter-spacing: 0.3px;
                transition: all 0.2s ease-in-out;
            }

            .btn-success:hover,
            .btn-success:focus {
                background-color: #166c37;
                border-color: #166c37;
                box-shadow: 0 0 0 0.15rem rgba(31, 143, 74, 0.35);
                color: #ffffff;
            }

            .btn-success:active {
                background-color: #145e31;
                border-color: #145e31;
            }

            /* OUTLINE BUTTON */
            .btn-outline-success {
                color: #1f8f4a;
                border-color: #1f8f4a;
                font-weight: 600;
                transition: all 0.2s ease-in-out;
            }

            .btn-outline-success:hover,
            .btn-outline-success:focus {
                background-color: #1f8f4a;
                border-color: #1f8f4a;
                color: #ffffff;
                box-shadow: 0 0 0 0.15rem rgba(31, 143, 74, 0.35);
            }

            .btn-outline-success:active {
                background-color: #166c37;
                border-color: #166c37;
                color: #ffffff;
            }

            /* DISABLED */
            .btn-success:disabled,
            .btn-outline-success:disabled {
                background-color: #a5d6a7;
                border-color: #a5d6a7;
                color: #ffffff;
                cursor: not-allowed;
                opacity: 0.7;
            }
            </style>

        <style>
            /* === FIX ISI TAB (TAB PANE) === */
            .default-tab .tab-pane {
                padding: 0 !important;        /* 🔥 hilangkan padding dalam tab */
            }

            /* Hilangkan margin row pertama (jika masih ada) */
            .default-tab .tab-pane > .row {
                margin: 0 !important;
            }

            /* Rapatkan table wrapper */
            .default-tab .table-responsive {
                padding: 0 !important;
                margin: 0 !important;
            }

            /* Rapatkan DataTable wrapper */
            .default-tab .dataTables_wrapper {
                padding: 0 !important;
                margin: 0 !important;
            }

            /* Rapatkan header (Show entries & Search) */
            .default-tab .dataTables_wrapper .row {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }
        </style>
        <style>
            /* Rapatkan isi card */
            .card-body {
                padding-left: 10px !important;
                padding-right: 10px !important;
                padding-top: 15px !important;
                padding-bottom: 15px !important;
            }

            /* Optional: rapatkan tabel sedikit lagi */
            .table-responsive {
                padding-left: 0 !important;
                padding-right: 0 !important; */
            }
        </style>
        <style>
            /* QUIXLAB FIX: tab content terlalu jauh */
            .default-tab .tab-content {
                padding-top: 0 !important;
            }

            /* Hilangkan padding bawaan tab pane */
            .default-tab .tab-pane {
                padding-top: 0 !important;
                margin-top: 0 !important;
            }

            /* Rapatkan row pertama */
            .default-tab .tab-pane > .row {
                margin-top: 0 !important;
            }

            /* DataTable wrapper */
            .dataTables_wrapper {
                margin-top: 0 !important;
            }
            </style>

        <style>
            /* Perkecil tinggi row DataTable */
            table.dataTable tbody th,
            table.dataTable tbody td {
                padding: 4px 8px !important;   /* default biasanya 8px 10px */
                font-size: 13px;               /* opsional: kecilkan font */
                line-height: 1.0;              /* rapatkan baris */
            }

            /* Header tabel */
            table.dataTable thead th {
                padding: 6px 8px !important;
                font-size: 13px;
            }
        </style>
        <style>
            /* SAMAKAN TINGGI SELECT2 & INPUT */
            .select2-container--bootstrap4 .select2-selection {
                height: calc(1.5em + .5rem + 2px) !important;
                font-size: .8rem;
            }
            .select2-selection__rendered {
                line-height: 1.5 !important;
            }
            /* FIX SELECT2 BOOTSTRAP */
            .select2-container {
                width: 100% !important;
            }

            .select2-selection--single {
                height: calc(1.5em + .5rem + 2px) !important;
                padding: .25rem .5rem;
                font-size: .875rem;
            }

            .select2-selection__rendered {
                line-height: 1.5 !important;
            }

            .select2-selection__arrow {
                height: 100% !important;
            }
        </style>
        <style> /* CUSTOM STYLES FOR FORM ELEMENTS IN FORM */
            .form-group {
                margin-bottom: 0.1rem;
            }

            .form-control-sm {
                padding: 0.25rem 0.5rem;
                font-size: 0.8rem;
                height: calc(1.4rem + 0.4rem + 2px);
                min-height: calc(1.3rem + 0.3rem + 2px) !important;
            }

            label {
                font-size: 0.8rem;
            }
        </style>  
        <!-- <style>  /* STYLES FOR VALIDATION TOOLTIP ERROR MESSAGE */
            .input-group.is-invalid .form-control {
                border-color: #dc3545;
            }
            .tooltip-inner {
                background-color: #ffffff;
                color: #dc3545;
                border: 1px solid #dc3545;
                font-size: 12px;
                text-align: left;
            }

            .tooltip.top .tooltip-arrow {
                border-top-color: #dc3545;
            }
            .tooltip.bottom .tooltip-arrow {
                border-bottom-color: #dc3545;
            }
            .tooltip.left .tooltip-arrow {
                border-left-color: #dc3545;
            }
            .tooltip.right .tooltip-arrow {
                border-right-color: #dc3545;
            }
        </style> -->
        <style>
            /* ===============================
            VALIDATION TOOLTIP - GREEN THEME
            ================================ */

            /* Border input saat invalid */
            .input-group.is-invalid .form-control {
                border-color: #1f8f4a;
                box-shadow: 0 0 0 0.15rem rgba(31, 143, 74, 0.25);
            }

            /* Tooltip body */
            .tooltip-inner {
                background-color: #ffffff;
                color: #1f8f4a;
                border: 1px solid #1f8f4a;
                font-size: 12px;
                text-align: left;
                padding: 6px 10px;
                border-radius: 6px;
                box-shadow: 0 4px 10px rgba(31, 143, 74, 0.15);
            }

            /* Tooltip arrows */
            .tooltip.top .tooltip-arrow {
                border-top-color: #1f8f4a;
            }

            .tooltip.bottom .tooltip-arrow {
                border-bottom-color: #1f8f4a;
            }

            .tooltip.left .tooltip-arrow {
                border-left-color: #1f8f4a;
            }

            .tooltip.right .tooltip-arrow {
                border-right-color: #1f8f4a;
            }
        </style>

        <style>
            /* ===============================
            FORCE INVALID HIGHLIGHT - GREEN
            ================================ */

            /* Bootstrap .is-invalid */
            .form-control.is-invalid,
            .input-group.is-invalid .form-control {
                border-color: #1f8f4a !important;
                background-image: none !important;
                box-shadow: 0 0 0 0.1rem rgba(31, 143, 74, 0.35) !important;
            }

            /* Saat focus + invalid */
            .form-control.is-invalid:focus,
            .input-group.is-invalid .form-control:focus {
                border-color: #166c37 !important;
                box-shadow: 0 0 0 0.1rem rgba(31, 143, 74, 0.45) !important;
            }

            /* Untuk textarea & select */
            textarea.is-invalid,
            select.is-invalid {
                border-color: #1f8f4a !important;
                box-shadow: 0 0 0 0.1rem rgba(31, 143, 74, 0.35) !important;
            }

            /* Hilangkan icon error merah bootstrap */
            .form-control.is-invalid,
            .was-validated .form-control:invalid {
                background-image: none !important;
            }

            /* HTML5 validation (browser native) */
            input:invalid,
            textarea:invalid,
            select:invalid {
                box-shadow: none;
            }

            /* Select2 single */
            .select2-container--bootstrap4
            .select2-selection.is-invalid {
                border-color: #1f8f4a !important;
                box-shadow: 0 0 0 0.1rem rgba(31, 143, 74, 0.35) !important;
            }

            /* Select2 focus */
            .select2-container--bootstrap4
            .select2-selection.is-invalid:focus,
            .select2-container--bootstrap4.select2-container--focus
            .select2-selection.is-invalid {
                border-color: #166c37 !important;
                box-shadow: 0 0 0 0.1rem rgba(31, 143, 74, 0.45) !important;
            }

            /* Panah select2 ikut hijau */
            .select2-container--bootstrap4
            .select2-selection.is-invalid
            .select2-selection__arrow b {
                border-color: #1f8f4a transparent transparent transparent !important;
            }

        </style>

        <style>
            /* ===============================
            DATATABLE ACTION BUTTON FIX
            =============================== */
            .table td .btn-action {
                padding: 2px 6px !important;
                font-size: 11px !important;
                line-height: 1.2 !important;
                margin: 0 !important;
            }

            .table td .btn-action i {
                font-size: 11px;
            }
        </style>

        <style>
            /* ===== GLOBAL LOADER OVERLAY ===== */
            #global-loader {
                position: fixed;
                inset: 0;
                background: rgba(240, 255, 245, 0.85); /* hijau soft */
                z-index: 99999;
            }

            /* ===== CENTER CONTENT ===== */
            #global-loader .loader-content {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }

            /* ===== SPINNER ANIMATION ===== */
            .spinner-green {
                width: 60px;
                height: 60px;
                border: 6px solid #d4f5e2;
                border-top: 6px solid #28a745; /* hijau utama */
                border-radius: 50%;
                animation: spin 1s linear infinite;
                margin: auto;
            }

            /* ===== TEXT ===== */
            .loader-text {
                margin-top: 12px;
                font-size: 14px;
                font-weight: 600;
                color: #28a745;
                letter-spacing: 1px;
                animation: pulse 1.5s ease-in-out infinite;
            }

            /* ===== ANIMATIONS ===== */
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }

            @keyframes pulse {
                0% { opacity: .4; }
                50% { opacity: 1; }
                100% { opacity: .4; }
            }
        </style>

        <style>
            /* ===============================
            RAPATKAN CONTENT BODY
            =============================== */

            /* Wrapper utama */ 
            .content-body {
                padding-left: 8px !important;
                padding-right: 8px !important;
                padding-top: 4px !important;
            }

            /* Container bootstrap di dalam content */
            .content-body .container-fluid {
                padding-left: 0 !important;
                padding-right: 0 !important;
                padding-top: 4px !important;
            }

            /* Jika ada row pertama yang masih lebar */
            .content-body .row {
                margin-left: 0 !important;
                margin-right: 0 !important;
                margin-top: 4 !important;
            }
        </style>


        <div class="content-body">
            <div class="container-fluid mt-3">
                @yield('content')
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        @include('main/footer')
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    
    <script src="{{ asset('quixlab-master/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('quixlab-master/js/custom.min.js') }}"></script>
    <script src="{{ asset('quixlab-master/js/settings.js') }}"></script>
    <script src="{{ asset('quixlab-master/js/gleek.js') }}"></script>
    <script src="{{ asset('quixlab-master/js/styleSwitcher.js') }}"></script>
    <!-- Chartjs -->
    <script src="{{ asset('quixlab-master/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('quixlab-master/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <!-- Datamap -->
    <script src="{{ asset('quixlab-master/plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('quixlab-master/plugins/topojson/topojson.min.js') }}"></script>
    <!-- <script src="{{ asset('quixlab-master/plugins/datamaps/datamaps.world.min.js') }}"></script> -->
    <!-- Morrisjs -->
    <script src="{{ asset('quixlab-master/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('quixlab-master/plugins/morris/morris.min.js') }}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('quixlab-master/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('quixlab-master/plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('quixlab-master/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('quixlab-master/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('quixlab-master/plugins/select2/js/select2.full.min.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('quixlab-master/plugins/toastr/js/toastr.min.js') }}"></script>
    <script src="{{ asset('quixlab-master/plugins/toastr/js/toastr.init.js') }}"></script>

    <script src="{{ asset('quixlab-master/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('quixlab-master/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="{{ asset('quixlab-master/plugins/clockpicker/dist/jquery-clockpicker.min.js') }}"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="{{ asset('quixlab-master/plugins/jquery-asColorPicker-master/libs/jquery-asColor.js') }}"></script>
    <script src="{{ asset('quixlab-master/plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js') }}"></script>
    <script src="{{ asset('quixlab-master/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js') }}"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="{{ asset('quixlab-master/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="{{ asset('quixlab-master/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('quixlab-master/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <script src="{{ asset('quixlab-master/js/plugins-init/form-pickers-init.js') }}"></script>

    <script src="{{ asset('quixlab-master/plugins/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('quixlab-master/plugins/validation/jquery.validate-init-custom.js') }}"></script>

    <script src="{{ asset('quixlab-master/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('quixlab-master/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('quixlab-master/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>

    <script>
        toastr.options = {
            closeButton: false,
            progressBar: true,
            positionClass: "toast-top-right",
            timeOut: "3000",
            extendedTimeOut: "1000",
            showDuration: "300",
            hideDuration: "1000",
            showMethod: "fadeIn",
            hideMethod: "fadeOut"
        };
    </script>

    @yield('javascript')

    <script>
        $(document).ajaxStart(function () {
            $('#global-loader').fadeIn(200);
        });

        $(document).ajaxStop(function () {
            $('#global-loader').fadeOut(200);
        });

        function showLoader() {
            $('#global-loader').fadeIn(200);
        }
        function hideLoader() {
            $('#global-loader').fadeOut(200);
        }

        $(document).ajaxError(function (event, jqxhr) {
            toastr.error('Server error occurred');
        });
    </script>

    <!-- <script src="{{ asset('quixlab-master/js/dashboard/dashboard-1.js') }}"></script> -->
    <link rel="stylesheet" href="{{ asset('quixlab-master/css-custom/theme-green.css') }}">

    <div id="global-loader" style="display:none;">
        <div class="loader-content">
            <div class="spinner-green"></div>
            <div class="loader-text">Loading...</div>
        </div>
    </div>

</body>

</html>
