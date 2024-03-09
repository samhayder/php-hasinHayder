<?php
// Include Admin header
include_once "adminIncludes/adminHeader.php";
?>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

  <!-- LOGO -->
  <div class="navbar-brand-box">
    <a href="index.php" class="logo logo-dark">
      <span class="logo-sm">
        <img src="assets/images/logo-sm.png" alt="" height="22">
      </span>
      <span class="logo-lg">
        <img src="assets/images/logo-dark.png" alt="" height="20">
      </span>
    </a>

    <a href="index.php" class="logo logo-light">
      <span class="logo-sm">
        <img src="assets/images/logo-sm.png" alt="" height="22">
      </span>
      <span class="logo-lg">
        <img src="assets/images/logo-light.png" alt="" height="20">
      </span>
    </a>
  </div>

  <button type="button"
    class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
    <i class="fa fa-fw fa-bars"></i>
  </button>

  <div data-simplebar class="sidebar-menu-scroll">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
      <!-- Left Menu Start -->
      <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Menu</li>

        <li>
          <a href="index.php">
            <i class="uil-home-alt"></i><span
              class="badge rounded-pill bg-primary float-end">01</span>
            <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-window-section"></i>
            <span>Layouts</span>
          </a>
          <ul class="sub-menu" aria-expanded="true">
            <li>
              <a href="javascript: void(0);" class="has-arrow">Vertical</a>
              <ul class="sub-menu" aria-expanded="true">
                <li><a href="layouts-dark-sidebar.php">Dark Sidebar</a>
                </li>
                <li><a href="layouts-compact-sidebar.php">Compact
                    Sidebar</a></li>
                <li><a href="layouts-icon-sidebar.php">Icon Sidebar</a>
                </li>
                <li><a href="layouts-boxed.php">Boxed Width</a></li>
                <li><a href="layouts-preloader.php">Preloader</a></li>
                <li><a href="layouts-colored-sidebar.php">Colored
                    Sidebar</a></li>
              </ul>
            </li>
            <li>
              <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
              <ul class="sub-menu" aria-expanded="true">
                <li><a href="layouts-horizontal.php">Horizontal</a></li>
                <li><a href="layouts-hori-topbar-dark.php">Topbar Dark</a>
                </li>
                <li><a href="layouts-hori-boxed-width.php">Boxed Width</a>
                </li>
                <li><a href="layouts-hori-preloader.php">Preloader</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="menu-title">Apps</li>

        <li>
          <a href="calendar.php" class="waves-effect">
            <i class="uil-calender"></i>
            <span>Calendar</span>
          </a>
        </li>

        <li>
          <a href="chat.php" class=" waves-effect">
            <i class="uil-comments-alt"></i>
            <span class="badge rounded-pill bg-warning float-end">New</span>
            <span>Chat</span>
          </a>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-store"></i>
            <span>Ecommerce</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="ecommerce-products.php">Products</a></li>
            <li><a href="ecommerce-product-detail.php">Product Detail</a>
            </li>
            <li><a href="ecommerce-orders.php">Orders</a></li>
            <li><a href="ecommerce-customers.php">Customers</a></li>
            <li><a href="ecommerce-cart.php">Cart</a></li>
            <li><a href="ecommerce-checkout.php">Checkout</a></li>
            <li><a href="ecommerce-shops.php">Shops</a></li>
            <li><a href="ecommerce-add-product.php">Add Product</a></li>
          </ul>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-envelope"></i>
            <span>Email</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="email-inbox.php">Inbox</a></li>
            <li><a href="email-read.php">Read Email</a></li>
          </ul>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-invoice"></i>
            <span>Invoices</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="invoices-list.php">Invoice List</a></li>
            <li><a href="invoices-detail.php">Invoice Detail</a></li>
          </ul>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-book-alt"></i>
            <span>Contacts</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="contacts-grid.php">User Grid</a></li>
            <li><a href="contacts-list.php">User List</a></li>
            <li><a href="contacts-profile.php">Profile</a></li>
          </ul>
        </li>

        <li class="menu-title">Pages</li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-user-circle"></i>
            <span>Authentication</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="auth-login.php">Login</a></li>
            <li><a href="auth-register.php">Register</a></li>
            <li><a href="auth-recoverpw.php">Recover Password</a></li>
            <li><a href="auth-lock-screen.php">Lock Screen</a></li>
          </ul>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-file-alt"></i>
            <span>Utility</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="pages-starter.php">Starter Page</a></li>
            <li><a href="pages-maintenance.php">Maintenance</a></li>
            <li><a href="pages-comingsoon.php">Coming Soon</a></li>
            <li><a href="pages-timeline.php">Timeline</a></li>
            <li><a href="pages-faqs.php">FAQs</a></li>
            <li><a href="pages-pricing.php">Pricing</a></li>
            <li><a href="pages-404.php">Error 404</a></li>
            <li><a href="pages-500.php">Error 500</a></li>
          </ul>
        </li>

        <li class="menu-title">Components</li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-flask"></i>
            <span>UI Elements</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="ui-alerts.php">Alerts</a></li>
            <li><a href="ui-buttons.php">Buttons</a></li>
            <li><a href="ui-cards.php">Cards</a></li>
            <li><a href="ui-carousel.php">Carousel</a></li>
            <li><a href="ui-dropdowns.php">Dropdowns</a></li>
            <li><a href="ui-grid.php">Grid</a></li>
            <li><a href="ui-images.php">Images</a></li>
            <li><a href="ui-lightbox.php">Lightbox</a></li>
            <li><a href="ui-modals.php">Modals</a></li>
            <li><a href="ui-offcanvas.php">Offcanvas</a></li>
            <li><a href="ui-rangeslider.php">Range Slider</a></li>
            <li><a href="ui-session-timeout.php">Session Timeout</a></li>
            <li><a href="ui-progressbars.php">Progress Bars</a></li>
            <li><a href="ui-sweet-alert.php">Sweet-Alert</a></li>
            <li><a href="ui-tabs-accordions.php">Tabs & Accordions</a></li>
            <li><a href="ui-typography.php">Typography</a></li>
            <li><a href="ui-video.php">Video</a></li>
            <li><a href="ui-general.php">General</a></li>
            <li><a href="ui-colors.php">Colors</a></li>
            <li><a href="ui-rating.php">Rating</a></li>
            <li><a href="ui-notifications.php">Notifications</a></li>
          </ul>
        </li>

        <li>
          <a href="javascript: void(0);" class="waves-effect">
            <i class="uil-shutter-alt"></i>
            <span class="badge rounded-pill bg-info float-end">9</span>
            <span>Forms</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="form-elements.php">Basic Elements</a></li>
            <li><a href="form-validation.php">Validation</a></li>
            <li><a href="form-advanced.php">Advanced Plugins</a></li>
            <li><a href="form-editors.php">Editors</a></li>
            <li><a href="form-uploads.php">File Upload</a></li>
            <li><a href="form-xeditable.php">Xeditable</a></li>
            <li><a href="form-repeater.php">Repeater</a></li>
            <li><a href="form-wizard.php">Wizard</a></li>
            <li><a href="form-mask.php">Mask</a></li>
          </ul>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-list-ul"></i>
            <span>Tables</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="tables-basic.php">Bootstrap Basic</a></li>
            <li><a href="tables-datatable.php">Datatables</a></li>
            <li><a href="tables-responsive.php">Responsive</a></li>
            <li><a href="tables-editable.php">Editable</a></li>
          </ul>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-chart"></i>
            <span>Charts</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="charts-apex.php">Apex</a></li>
            <li><a href="charts-chartjs.php">Chartjs</a></li>
            <li><a href="charts-flot.php">Flot</a></li>
            <li><a href="charts-knob.php">Jquery Knob</a></li>
            <li><a href="charts-sparkline.php">Sparkline</a></li>
          </ul>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-streering"></i>
            <span>Icons</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="icons-unicons.php">Unicons</a></li>
            <li><a href="icons-boxicons.php">Boxicons</a></li>
            <li><a href="icons-materialdesign.php">Material Design</a></li>
            <li><a href="icons-dripicons.php">Dripicons</a></li>
            <li><a href="icons-fontawesome.php">Font Awesome</a></li>
          </ul>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-location-point"></i>
            <span>Maps</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="maps-google.php">Google</a></li>
            <li><a href="maps-vector.php">Vector</a></li>
            <li><a href="maps-leaflet.php">Leaflet</a></li>
          </ul>
        </li>

        <li>
          <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="uil-share-alt"></i>
            <span>Multi Level</span>
          </a>
          <ul class="sub-menu" aria-expanded="true">
            <li><a href="javascript: void(0);">Level 1.1</a></li>
            <li><a href="javascript: void(0);" class="has-arrow">Level
                1.2</a>
              <ul class="sub-menu" aria-expanded="true">
                <li><a href="javascript: void(0);">Level 2.1</a></li>
                <li><a href="javascript: void(0);">Level 2.2</a></li>
              </ul>
            </li>
          </ul>
        </li>

      </ul>
    </div>
    <!-- Sidebar -->
  </div>
</div>
<!-- Left Sidebar End -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

  <div class="page-content">
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div
            class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Dashboard</h4>

            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a
                    href="javascript: void(0);">Minible</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>

          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="row">
        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <div class="float-end mt-2">
                <div id="total-revenue-chart"></div>
              </div>
              <div>
                <h4 class="mb-1 mt-1">$<span
                    data-plugin="counterup">34,152</span></h4>
                <p class="text-muted mb-0">Total Revenue</p>
              </div>
              <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                    class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span>
                since last week
              </p>
            </div>
          </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <div class="float-end mt-2">
                <div id="orders-chart"> </div>
              </div>
              <div>
                <h4 class="mb-1 mt-1"><span data-plugin="counterup">5,643</span>
                </h4>
                <p class="text-muted mb-0">Orders</p>
              </div>
              <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                    class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span>
                since last week
              </p>
            </div>
          </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <div class="float-end mt-2">
                <div id="customers-chart"> </div>
              </div>
              <div>
                <h4 class="mb-1 mt-1"><span
                    data-plugin="counterup">45,254</span></h4>
                <p class="text-muted mb-0">Customers</p>
              </div>
              <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                    class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span>
                since last week
              </p>
            </div>
          </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">

          <div class="card">
            <div class="card-body">
              <div class="float-end mt-2">
                <div id="growth-chart"></div>
              </div>
              <div>
                <h4 class="mb-1 mt-1">+ <span
                    data-plugin="counterup">12.58</span>%</h4>
                <p class="text-muted mb-0">Growth</p>
              </div>
              <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                    class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span>
                since last week
              </p>
            </div>
          </div>
        </div> <!-- end col-->
      </div> <!-- end row-->

      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body">
              <div class="float-end">
                <div class="dropdown">
                  <a class="dropdown-toggle text-reset" href="#"
                    id="dropdownMenuButton5" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="fw-semibold">Sort By:</span> <span
                      class="text-muted">Yearly<i
                        class="mdi mdi-chevron-down ms-1"></i></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="dropdownMenuButton5">
                    <a class="dropdown-item" href="#">Monthly</a>
                    <a class="dropdown-item" href="#">Yearly</a>
                    <a class="dropdown-item" href="#">Weekly</a>
                  </div>
                </div>
              </div>
              <h4 class="card-title mb-4">Sales Analytics</h4>

              <div class="mt-1">
                <ul class="list-inline main-chart mb-0">
                  <li class="list-inline-item chart-border-left me-0 border-0">
                    <h3 class="text-primary">$<span
                        data-plugin="counterup">2,371</span><span
                        class="text-muted d-inline-block font-size-15 ms-3">Income</span>
                    </h3>
                  </li>
                  <li class="list-inline-item chart-border-left me-0">
                    <h3><span data-plugin="counterup">258</span><span
                        class="text-muted d-inline-block font-size-15 ms-3">Sales</span>
                    </h3>
                  </li>
                  <li class="list-inline-item chart-border-left me-0">
                    <h3><span data-plugin="counterup">3.6</span>%<span
                        class="text-muted d-inline-block font-size-15 ms-3">Conversation
                        Ratio</span></h3>
                  </li>
                </ul>
              </div>

              <div class="mt-3">
                <div id="sales-analytics-chart" class="apex-charts" dir="ltr">
                </div>
              </div>
            </div> <!-- end card-body-->
          </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-4">
          <div class="card bg-primary">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-sm-8">
                  <p class="text-white font-size-18">Enhance your
                    <b>Campaign</b> for better outreach <i
                      class="mdi mdi-arrow-right"></i>
                  </p>
                  <div class="mt-4">
                    <a href="javascript: void(0);"
                      class="btn btn-success waves-effect waves-light">Upgrade
                      Account!</a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="mt-4 mt-sm-0">
                    <img src="assets/images/setup-analytics-amico.svg"
                      class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div> <!-- end card-body-->
          </div> <!-- end card-->

          <div class="card">
            <div class="card-body">
              <div class="float-end">
                <div class="dropdown">
                  <a class="dropdown-toggle text-reset" href="#"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="fw-semibold">Sort By:</span> <span
                      class="text-muted">Yearly<i
                        class="mdi mdi-chevron-down ms-1"></i></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="dropdownMenuButton1">
                    <a class="dropdown-item" href="#">Monthly</a>
                    <a class="dropdown-item" href="#">Yearly</a>
                    <a class="dropdown-item" href="#">Weekly</a>
                  </div>
                </div>
              </div>

              <h4 class="card-title mb-4">Top Selling Products</h4>


              <div class="row align-items-center g-0 mt-3">
                <div class="col-sm-3">
                  <p class="text-truncate mt-1 mb-0"><i
                      class="mdi mdi-circle-medium text-primary me-2"></i>
                    Desktops </p>
                </div>

                <div class="col-sm-9">
                  <div class="progress mt-1" style="height: 6px;">
                    <div class="progress-bar progress-bar bg-primary"
                      role="progressbar" style="width: 52%" aria-valuenow="52"
                      aria-valuemin="0" aria-valuemax="52">
                    </div>
                  </div>
                </div>
              </div> <!-- end row-->

              <div class="row align-items-center g-0 mt-3">
                <div class="col-sm-3">
                  <p class="text-truncate mt-1 mb-0"><i
                      class="mdi mdi-circle-medium text-info me-2"></i>
                    iPhones </p>
                </div>
                <div class="col-sm-9">
                  <div class="progress mt-1" style="height: 6px;">
                    <div class="progress-bar progress-bar bg-info"
                      role="progressbar" style="width: 45%" aria-valuenow="45"
                      aria-valuemin="0" aria-valuemax="45">
                    </div>
                  </div>
                </div>
              </div> <!-- end row-->

              <div class="row align-items-center g-0 mt-3">
                <div class="col-sm-3">
                  <p class="text-truncate mt-1 mb-0"><i
                      class="mdi mdi-circle-medium text-success me-2"></i>
                    Android </p>
                </div>
                <div class="col-sm-9">
                  <div class="progress mt-1" style="height: 6px;">
                    <div class="progress-bar progress-bar bg-success"
                      role="progressbar" style="width: 48%" aria-valuenow="48"
                      aria-valuemin="0" aria-valuemax="48">
                    </div>
                  </div>
                </div>
              </div> <!-- end row-->

              <div class="row align-items-center g-0 mt-3">
                <div class="col-sm-3">
                  <p class="text-truncate mt-1 mb-0"><i
                      class="mdi mdi-circle-medium text-warning me-2"></i>
                    Tablets </p>
                </div>
                <div class="col-sm-9">
                  <div class="progress mt-1" style="height: 6px;">
                    <div class="progress-bar progress-bar bg-warning"
                      role="progressbar" style="width: 78%" aria-valuenow="78"
                      aria-valuemin="0" aria-valuemax="78">
                    </div>
                  </div>
                </div>
              </div> <!-- end row-->

              <div class="row align-items-center g-0 mt-3">
                <div class="col-sm-3">
                  <p class="text-truncate mt-1 mb-0"><i
                      class="mdi mdi-circle-medium text-purple me-2"></i>
                    Cables </p>
                </div>
                <div class="col-sm-9">
                  <div class="progress mt-1" style="height: 6px;">
                    <div class="progress-bar progress-bar bg-purple"
                      role="progressbar" style="width: 63%" aria-valuenow="63"
                      aria-valuemin="0" aria-valuemax="63">
                    </div>
                  </div>
                </div>
              </div> <!-- end row-->

            </div> <!-- end card-body-->
          </div> <!-- end card-->
        </div> <!-- end Col -->
      </div> <!-- end row-->

      <div class="row">
        <div class="col-xl-4">
          <div class="card">
            <div class="card-body">
              <div class="float-end">
                <div class="dropdown">
                  <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2"
                    data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="text-muted">All Members<i
                        class="mdi mdi-chevron-down ms-1"></i></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item" href="#">Locations</a>
                    <a class="dropdown-item" href="#">Revenue</a>
                    <a class="dropdown-item" href="#">Join Date</a>
                  </div>
                </div>
              </div>
              <h4 class="card-title mb-4">Top Users</h4>

              <div data-simplebar style="max-height: 336px;">
                <div class="table-responsive">
                  <table
                    class="table table-borderless table-centered table-nowrap">
                    <tbody>
                      <tr>
                        <td style="width: 20px;"><img
                            src="assets/images/users/avatar-4.jpg"
                            class="avatar-xs rounded-circle " alt="...">
                        </td>
                        <td>
                          <h6 class="font-size-15 mb-1 fw-normal">Glenn
                            Holden</h6>
                          <p class="text-muted font-size-13 mb-0"><i
                              class="mdi mdi-map-marker"></i> Nevada</p>
                        </td>
                        <td><span
                            class="badge bg-soft-danger font-size-12">Cancel</span>
                        </td>
                        <td class="text-muted fw-semibold text-end"><i
                            class="icon-xs icon me-2 text-success"
                            data-feather="trending-up"></i>$250.00</td>
                      </tr>
                      <tr>
                        <td><img src="assets/images/users/avatar-5.jpg"
                            class="avatar-xs rounded-circle " alt="...">
                        </td>
                        <td>
                          <h6 class="font-size-15 mb-1 fw-normal">Lolita
                            Hamill</h6>
                          <p class="text-muted font-size-13 mb-0"><i
                              class="mdi mdi-map-marker"></i> Texas</p>
                        </td>
                        <td><span
                            class="badge bg-soft-success font-size-12">Success</span>
                        </td>
                        <td class="text-muted fw-semibold text-end"><i
                            class="icon-xs icon me-2 text-danger"
                            data-feather="trending-down"></i>$110.00</td>
                      </tr>
                      <tr>
                        <td><img src="assets/images/users/avatar-6.jpg"
                            class="avatar-xs rounded-circle " alt="...">
                        </td>
                        <td>
                          <h6 class="font-size-15 mb-1 fw-normal">Robert
                            Mercer</h6>
                          <p class="text-muted font-size-13 mb-0"><i
                              class="mdi mdi-map-marker"></i> California</p>
                        </td>
                        <td><span
                            class="badge bg-soft-info font-size-12">Active</span>
                        </td>
                        <td class="text-muted fw-semibold text-end"><i
                            class="icon-xs icon me-2 text-success"
                            data-feather="trending-up"></i>$420.00</td>
                      </tr>
                      <tr>
                        <td><img src="assets/images/users/avatar-7.jpg"
                            class="avatar-xs rounded-circle " alt="...">
                        </td>
                        <td>
                          <h6 class="font-size-15 mb-1 fw-normal">Marie Kim
                          </h6>
                          <p class="text-muted font-size-13 mb-0"><i
                              class="mdi mdi-map-marker"></i> Montana</p>
                        </td>
                        <td><span
                            class="badge bg-soft-warning font-size-12">Pending</span>
                        </td>
                        <td class="text-muted fw-semibold text-end"><i
                            class="icon-xs icon me-2 text-danger"
                            data-feather="trending-down"></i>$120.00</td>
                      </tr>
                      <tr>
                        <td><img src="assets/images/users/avatar-8.jpg"
                            class="avatar-xs rounded-circle " alt="...">
                        </td>
                        <td>
                          <h6 class="font-size-15 mb-1 fw-normal">Sonya
                            Henshaw</h6>
                          <p class="text-muted font-size-13 mb-0"><i
                              class="mdi mdi-map-marker"></i> Colorado</p>
                        </td>
                        <td><span
                            class="badge bg-soft-info font-size-12">Active</span>
                        </td>
                        <td class="text-muted fw-semibold text-end"><i
                            class="icon-xs icon me-2 text-success"
                            data-feather="trending-up"></i>$112.00</td>
                      </tr>
                      <tr>
                        <td><img src="assets/images/users/avatar-2.jpg"
                            class="avatar-xs rounded-circle " alt="...">
                        </td>
                        <td>
                          <h6 class="font-size-15 mb-1 fw-normal">Marie Kim
                          </h6>
                          <p class="text-muted font-size-13 mb-0"><i
                              class="mdi mdi-map-marker"></i> Australia</p>
                        </td>
                        <td><span
                            class="badge bg-soft-success font-size-12">Success</span>
                        </td>
                        <td class="text-muted fw-semibold text-end"><i
                            class="icon-xs icon me-2 text-danger"
                            data-feather="trending-down"></i>$120.00</td>
                      </tr>
                      <tr>
                        <td><img src="assets/images/users/avatar-1.jpg"
                            class="avatar-xs rounded-circle " alt="...">
                        </td>
                        <td>
                          <h6 class="font-size-15 mb-1 fw-normal">Sonya
                            Henshaw</h6>
                          <p class="text-muted font-size-13 mb-0"><i
                              class="mdi mdi-map-marker"></i> India</p>
                        </td>
                        <td><span
                            class="badge bg-soft-danger font-size-12">Cancel</span>
                        </td>
                        <td class="text-muted fw-semibold text-end"><i
                            class="icon-xs icon me-2 text-success"
                            data-feather="trending-up"></i>$112.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div> <!-- enbd table-responsive-->
              </div> <!-- data-sidebar-->
            </div><!-- end card-body-->
          </div> <!-- end card-->
        </div><!-- end col -->

        <div class="col-xl-4">
          <div class="card">
            <div class="card-body">
              <div class="float-end">
                <div class="dropdown">
                  <a class="dropdown-toggle" href="#" id="dropdownMenuButton3"
                    data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="text-muted">Recent<i
                        class="mdi mdi-chevron-down ms-1"></i></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="dropdownMenuButton3">
                    <a class="dropdown-item" href="#">Recent</a>
                    <a class="dropdown-item" href="#">By Users</a>
                  </div>
                </div>
              </div>

              <h4 class="card-title mb-4">Recent Activity</h4>

              <ol class="activity-feed mb-0 ps-2" data-simplebar
                style="max-height: 336px;">
                <li class="feed-item">
                  <div class="feed-item-list">
                    <p class="text-muted mb-1 font-size-13">Today<small
                        class="d-inline-block ms-1">12:20 pm</small></p>
                    <p class="mb-0">Andrei Coman magna sed porta finibus,
                      risus
                      posted a new article: <span class="text-primary">Forget UX
                        Rowland</span></p>
                  </div>
                </li>
                <li class="feed-item">
                  <p class="text-muted mb-1 font-size-13">22 Jul, 2020
                    <small class="d-inline-block ms-1">12:36 pm</small>
                  </p>
                  <p class="mb-0">Andrei Coman posted a new article: <span
                      class="text-primary">Designer Alex</span></p>
                </li>
                <li class="feed-item">
                  <p class="text-muted mb-1 font-size-13">18 Jul, 2020
                    <small class="d-inline-block ms-1">07:56 am</small>
                  </p>
                  <p class="mb-0">Zack Wetass, sed porta finibus, risus
                    Chris Wallace
                    Commented <span class="text-primary"> Developer
                      Moreno</span></p>
                </li>
                <li class="feed-item">
                  <p class="text-muted mb-1 font-size-13">10 Jul, 2020
                    <small class="d-inline-block ms-1">08:42 pm</small>
                  </p>
                  <p class="mb-0">Zack Wetass, Chris combined Commented
                    <span class="text-primary">UX Murphy</span>
                  </p>
                </li>

                <li class="feed-item">
                  <p class="text-muted mb-1 font-size-13">23 Jun, 2020
                    <small class="d-inline-block ms-1">12:22 am</small>
                  </p>
                  <p class="mb-0">Zack Wetass, sed porta finibus, risus
                    Chris Wallace
                    Commented <span class="text-primary"> Developer
                      Moreno</span></p>
                </li>
                <li class="feed-item pb-1">
                  <p class="text-muted mb-1 font-size-13">20 Jun, 2020
                    <small class="d-inline-block ms-1">09:48 pm</small>
                  </p>
                  <p class="mb-0">Zack Wetass, Chris combined Commented
                    <span class="text-primary">UX Murphy</span>
                  </p>
                </li>

              </ol>

            </div>
          </div>
        </div>

        <div class="col-xl-4">
          <div class="card">
            <div class="card-body">

              <div class="float-end">
                <div class="dropdown">
                  <a class="dropdown-toggle" href="#" id="dropdownMenuButton4"
                    data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="text-muted">Monthly<i
                        class="mdi mdi-chevron-down ms-1"></i></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="dropdownMenuButton4">
                    <a class="dropdown-item" href="#">Yearly</a>
                    <a class="dropdown-item" href="#">Monthly</a>
                    <a class="dropdown-item" href="#">Weekly</a>
                  </div>
                </div>
              </div>

              <h4 class="card-title">Social Source</h4>

              <div class="text-center">
                <div class="avatar-sm mx-auto mb-4">
                  <span
                    class="avatar-title rounded-circle bg-soft-primary font-size-24">
                    <i class="mdi mdi-facebook text-primary"></i>
                  </span>
                </div>
                <p class="font-16 text-muted mb-2"></p>
                <h5><a href="#" class="text-dark">Facebook - <span
                      class="text-muted font-16">125 sales</span> </a></h5>
                <p class="text-muted">Maecenas nec odio et ante tincidunt
                  tempus. Donec vitae sapien ut libero venenatis faucibus
                  tincidunt.</p>
                <a href="#" class="text-reset font-16">Learn more <i
                    class="mdi mdi-chevron-right"></i></a>
              </div>
              <div class="row mt-4">
                <div class="col-4">
                  <div class="social-source text-center mt-3">
                    <div class="avatar-xs mx-auto mb-3">
                      <span
                        class="avatar-title rounded-circle bg-primary font-size-16">
                        <i class="mdi mdi-facebook text-white"></i>
                      </span>
                    </div>
                    <h5 class="font-size-15">Facebook</h5>
                    <p class="text-muted mb-0">125 sales</p>
                  </div>
                </div>
                <div class="col-4">
                  <div class="social-source text-center mt-3">
                    <div class="avatar-xs mx-auto mb-3">
                      <span
                        class="avatar-title rounded-circle bg-info font-size-16">
                        <i class="mdi mdi-twitter text-white"></i>
                      </span>
                    </div>
                    <h5 class="font-size-15">Twitter</h5>
                    <p class="text-muted mb-0">112 sales</p>
                  </div>
                </div>
                <div class="col-4">
                  <div class="social-source text-center mt-3">
                    <div class="avatar-xs mx-auto mb-3">
                      <span
                        class="avatar-title rounded-circle bg-pink font-size-16">
                        <i class="mdi mdi-instagram text-white"></i>
                      </span>
                    </div>
                    <h5 class="font-size-15">Instagram</h5>
                    <p class="text-muted mb-0">104 sales</p>
                  </div>
                </div>
              </div>

              <div class="mt-3 text-center">
                <a href="#" class="text-primary font-size-14 fw-medium">View
                  All Sources <i class="mdi mdi-chevron-right"></i></a>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- end row -->

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-4">Latest Transaction</h4>
              <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0">
                  <thead class="table-light">
                    <tr>
                      <th style="width: 20px;">
                        <div class="form-check font-size-16">
                          <input type="checkbox" class="form-check-input"
                            id="customCheck1">
                          <label class="form-check-label"
                            for="customCheck1">&nbsp;</label>
                        </div>
                      </th>
                      <th>Order ID</th>
                      <th>Billing Name</th>
                      <th>Date</th>
                      <th>Total</th>
                      <th>Payment Status</th>
                      <th>Payment Method</th>
                      <th>View Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check font-size-16">
                          <input type="checkbox" class="form-check-input"
                            id="customCheck2">
                          <label class="form-check-label"
                            for="customCheck2">&nbsp;</label>
                        </div>
                      </td>
                      <td><a href="javascript: void(0);"
                          class="text-body fw-bold">#MB2540</a> </td>
                      <td>Neal Matthews</td>
                      <td>
                        07 Oct, 2019
                      </td>
                      <td>
                        $400
                      </td>
                      <td>
                        <span
                          class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                      </td>
                      <td>
                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                      </td>
                      <td>
                        <button type="button"
                          class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                          View Details
                        </button>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="form-check font-size-16">
                          <input type="checkbox" class="form-check-input"
                            id="customCheck3">
                          <label class="form-check-label"
                            for="customCheck3">&nbsp;</label>
                        </div>
                      </td>
                      <td><a href="javascript: void(0);"
                          class="text-body fw-bold">#MB2541</a> </td>
                      <td>Jamal Burnett</td>
                      <td>
                        07 Oct, 2019
                      </td>
                      <td>
                        $380
                      </td>
                      <td>
                        <span
                          class="badge rounded-pill bg-soft-danger font-size-12">Chargeback</span>
                      </td>
                      <td>
                        <i class="fab fa-cc-visa me-1"></i> Visa
                      </td>
                      <td>
                        <button type="button"
                          class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                          View Details
                        </button>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="form-check font-size-16">
                          <input type="checkbox" class="form-check-input"
                            id="customCheck4">
                          <label class="form-check-label"
                            for="customCheck4">&nbsp;</label>
                        </div>
                      </td>
                      <td><a href="javascript: void(0);"
                          class="text-body fw-bold">#MB2542</a> </td>
                      <td>Juan Mitchell</td>
                      <td>
                        06 Oct, 2019
                      </td>
                      <td>
                        $384
                      </td>
                      <td>
                        <span
                          class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                      </td>
                      <td>
                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                      </td>
                      <td>
                        <button type="button"
                          class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                          View Details
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check font-size-16">
                          <input type="checkbox" class="form-check-input"
                            id="customCheck5">
                          <label class="form-check-label"
                            for="customCheck5">&nbsp;</label>
                        </div>
                      </td>
                      <td><a href="javascript: void(0);"
                          class="text-body fw-bold">#MB2543</a> </td>
                      <td>Barry Dick</td>
                      <td>
                        05 Oct, 2019
                      </td>
                      <td>
                        $412
                      </td>
                      <td>
                        <span
                          class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                      </td>
                      <td>
                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                      </td>
                      <td>
                        <button type="button"
                          class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                          View Details
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check font-size-16">
                          <input type="checkbox" class="form-check-input"
                            id="customCheck6">
                          <label class="form-check-label"
                            for="customCheck6">&nbsp;</label>
                        </div>
                      </td>
                      <td><a href="javascript: void(0);"
                          class="text-body fw-bold">#MB2544</a> </td>
                      <td>Ronald Taylor</td>
                      <td>
                        04 Oct, 2019
                      </td>
                      <td>
                        $404
                      </td>
                      <td>
                        <span
                          class="badge rounded-pill bg-soft-warning font-size-12">Refund</span>
                      </td>
                      <td>
                        <i class="fab fa-cc-visa me-1"></i> Visa
                      </td>
                      <td>
                        <button type="button"
                          class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                          View Details
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check font-size-16">
                          <input type="checkbox" class="form-check-input"
                            id="customCheck7">
                          <label class="form-check-label"
                            for="customCheck7">&nbsp;</label>
                        </div>
                      </td>
                      <td><a href="javascript: void(0);"
                          class="text-body fw-bold">#MB2545</a> </td>
                      <td>Jacob Hunter</td>
                      <td>
                        04 Oct, 2019
                      </td>
                      <td>
                        $392
                      </td>
                      <td>
                        <span
                          class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                      </td>
                      <td>
                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                      </td>
                      <td>
                        <button type="button"
                          class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                          View Details
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- end table-responsive -->
            </div>
          </div>
        </div>
      </div>
      <!-- end row -->


    </div> <!-- container-fluid -->
  </div>
  <!-- End Page-content -->


  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <script>
          document.write(new Date().getFullYear())
          </script> © Minible.
        </div>
        <div class="col-sm-6">
          <div class="text-sm-end d-none d-sm-block">
            Crafted with <i class="mdi mdi-heart text-danger"></i> by <a
              href="https://themesbrand.com/" target="_blank"
              class="text-reset">Themesbrand</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
  <div data-simplebar class="h-100">

    <div class="rightbar-title d-flex align-items-center px-3 py-4">

      <h5 class="m-0 me-2">Settings</h5>

      <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
        <i class="mdi mdi-close noti-icon"></i>
      </a>
    </div>



    <!-- Settings -->
    <hr class="mt-0" />
    <h6 class="text-center mb-0">Choose Layouts</h6>

    <div class="p-4">
      <div class="mb-2">
        <img src="assets/images/layouts/layout-1.jpg" class="img-thumbnail"
          alt="layout images">
      </div>
      <div class="form-check form-switch mb-3">
        <input type="checkbox" class="form-check-input theme-choice"
          id="light-mode-switch" checked />
        <label class="form-check-label" for="light-mode-switch">Light
          Mode</label>
      </div>

      <div class="mb-2">
        <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail"
          alt="layout images">
      </div>
      <div class="form-check form-switch mb-3">
        <input type="checkbox" class="form-check-input theme-choice"
          id="dark-mode-switch" />
        <label class="form-check-label" for="dark-mode-switch">Dark
          Mode</label>
      </div>

      <div class="mb-2">
        <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail"
          alt="layout images">
      </div>
      <div class="form-check form-switch mb-3">
        <input type="checkbox" class="form-check-input theme-choice"
          id="rtl-mode-switch" />
        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
      </div>

      <div class="mb-2">
        <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail"
          alt="layout images">
      </div>
      <div class="form-check form-switch mb-5">
        <input class="form-check-input theme-choice" type="checkbox"
          id="dark-rtl-mode-switch">
        <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL
          Mode</label>
      </div>


    </div>

  </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<?php
// Include Admin footer
include_once "adminIncludes/adminFooter.php";
?>
