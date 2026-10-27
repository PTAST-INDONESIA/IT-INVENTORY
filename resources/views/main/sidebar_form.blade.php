<style>
    /* ===============================
    SIDEBAR FONT - GREEN ONLY
    ================================ */

    /* Label section */
    .nk-sidebar .nav-label {
        color: #1f8f4a;
    }

    /* Menu utama */
    .nk-sidebar ul.metismenu > li > a {
        color: #1f8f4a;
    }

    /* Icon menu */
    .nk-sidebar ul.metismenu > li > a i {
        color: #1f8f4a;
    }

    /* Submenu */
    .nk-sidebar ul.metismenu ul li a {
        color: #2f9e5f;
    }

    /* Hover (font saja) */
    .nk-sidebar ul.metismenu > li > a:hover,
    .nk-sidebar ul.metismenu ul li a:hover {
        color: #166c37;
    }

    /* Active menu */
    .nk-sidebar ul.metismenu > li.active > a,
    .nk-sidebar ul.metismenu > li.mm-active > a,
    .nk-sidebar ul.metismenu ul li.active > a {
        color: #145e31;
        font-weight: 600;
    }

    /* Arrow metismenu */
    .nk-sidebar .has-arrow::after {
        border-color: #1f8f4a;
    }
</style>

<div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('/') }}">Home 1</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                    <!-- 
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Layouts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ asset('quixlab-master/layout-blank.html') }}">Blank</a></li>
                            <li><a href="{{ asset('quixlab-master/layout-one-column.html') }}">One Column</a></li>
                            <li><a href="{{ asset('quixlab-master/layout-two-column.html') }}">Two column</a></li>
                            <li><a href="{{ asset('quixlab-master/layout-compact-nav.html') }}">Compact Nav</a></li>
                            <li><a href="{{ asset('quixlab-master/layout-vertical.html') }}">Vertical</a></li>
                            <li><a href="{{ asset('quixlab-master/layout-horizontal.html') }}">Horizontal</a></li>
                            <li><a href="{{ asset('quixlab-master/layout-boxed.html') }}">Boxed</a></li>
                            <li><a href="{{ asset('quixlab-master/layout-wide.html') }}">Wide</a></li>

                            <li><a href="{{ asset('quixlab-master/layout-fixed-header.html') }}">Fixed Header</a></li>
                            <li><a href="{{ asset('quixlab-master/layout-fixed-sidebar.html') }}">Fixed Sidebar</a></li>
                        </ul>
                    </li> 
                    -->
                    <li class="nav-label">Apps</li>
                    <!--
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Email</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ asset('quixlab-master/email-inbox.html') }}">Inbox</a></li>
                            <li><a href="{{ asset('quixlab-master/email-read.html') }}">Read</a></li>
                            <li><a href="{{ asset('quixlab-master/email-compose.html') }}">Compose</a></li>
                        </ul>
                    </li>
                    -->
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">IT Inventory</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('/it-inventory/report') }}">Report</a></li>
                            <!-- <li><a href="{{ asset('quixlab-master/app-calender.html') }}">Calender</a></li> -->
                        </ul>
                    </li>
                    <!--
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i> <span class="nav-text">Charts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ asset('quixlab-master/chart-flot.html') }}">Flot</a></li>
                            <li><a href="{{ asset('quixlab-master/chart-morris.html') }}">Morris</a></li>
                            <li><a href="{{ asset('quixlab-master/chart-chartjs.html') }}">Chartjs</a></li>
                            <li><a href="{{ asset('quixlab-master/chart-chartist.html') }}">Chartist</a></li>
                            <li><a href="{{ asset('quixlab-master/chart-sparkline.html') }}">Sparkline</a></li>
                            <li><a href="{{ asset('quixlab-master/chart-peity.html') }}">Peity</a></li>
                        </ul>
                    </li>
                    -->
                    
                    <li class="nav-label">System</li>
                    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Authentication</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('/system/user') }}">User</a></li>
                            <!--
                            <li><a href="{{ asset('quixlab-master/ui-alert.html') }}">Alert</a></li>
                            <li><a href="{{ asset('quixlab-master/ui-badge.html') }}">Badge</a></li>
                            <li><a href="{{ asset('quixlab-master/ui-button.html') }}">Button</a></li>
                            <li><a href="{{ asset('quixlab-master/ui-button-group.html') }}">Button Group</a></li>
                            <li><a href="{{ asset('quixlab-master/ui-cards.html') }}">Cards</a></li>
                            <li><a href="{{ asset('quixlab-master/ui-carousel.html') }}">Carousel</a></li>
                            <li><a href="{{ asset('quixlab-master/ui-dropdown.html') }}">Dropdown</a></li>
                            <li><a href="{{ asset('quixlab-master/ui-list-group.html') }}">List Group</a></li>
                            <li><a href="{{ asset('quixlab-master/ui-media-object.html') }}">Media Object</a></li>
                            <li><a href="{{ asset('quixlab-master/ui-modal.html') }}">Modal</a></li>
                            <li><a href="{{ asset('quixlab-master/ui-pagination.html') }}">Pagination</a></li>
                            <li><a href="{{ asset('quixlab-master/ui-popover.html') }}">Popover</a></li>
                            <li><a href="{{ asset('quixlab-master/ui-progressbar.html') }}">Progressbar</a></li>
                            <li><a href="{{ asset('quixlab-master/ui-tab.html') }}">Tab</a></li>
                            <li><a href="{{ asset('quixlab-master/ui-typography.html') }}">Typography</a></li>
                            -->
                         </ul>
                    </li>
                    <!--
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-layers menu-icon"></i><span class="nav-text">Components</span>
                        </a>
                        <ul aria-expanded="false"> 
                            <li><a href="{{ asset('quixlab-master/uc-nestedable.html') }}">Nestedable</a></li>
                            <li><a href="{{ asset('quixlab-master/uc-noui-slider.html') }}">Noui Slider</a></li>
                            <li><a href="{{ asset('quixlab-master/uc-sweetalert.html') }}">Sweet Alert</a></li>
                            <li><a href="{{ asset('quixlab-master/uc-toastr.html') }}">Toastr</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                        </a>
                    </li>
                    <li class="nav-label">Forms</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ asset('quixlab-master/form-basic.html') }}">Basic Form</a></li>
                            <li><a href="{{ asset('quixlab-master/form-validation.html') }}">Form Validation</a></li>
                            <li><a href="{{ asset('quixlab-master/form-step.html') }}">Step Form</a></li>
                            <li><a href="{{ asset('quixlab-master/form-editor.html') }}">Editor</a></li>
                            <li><a href="{{ asset('quixlab-master/form-picker.html') }}">Picker</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ asset('quixlab-master/table-basic.html') }}" aria-expanded="false">Basic Table</a></li>
                            <li><a href="{{ asset('quixlab-master/table-datatable.html') }}" aria-expanded="false">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Pages</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ asset('quixlab-master/page-login.html') }}">Login</a></li>
                            <li><a href="{{ asset('quixlab-master/page-register.html') }}">Register</a></li>
                            <li><a href="{{ asset('quixlab-master/page-lock.html') }}">Lock Screen</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ asset('quixlab-master/page-error-404.html') }}">Error 404</a></li>
                                    <li><a href="{{ asset('quixlab-master/page-error-403.html') }}">Error 403</a></li>
                                    <li><a href="{{ asset('quixlab-master/page-error-400.html') }}">Error 400</a></li>
                                    <li><a href="{{ asset('quixlab-master/page-error-500.html') }}">Error 500</a></li>
                                    <li><a href="{{ asset('quixlab-master/page-error-503.html') }}">Error 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    -->
                </ul>
            </div>
        </div>