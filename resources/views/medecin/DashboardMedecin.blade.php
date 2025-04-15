@extends('home')

@section('title', 'about')

@section('content')

@endsection

<body>
    <h1>je suis dans Dashboard Medecin</h1>
</body>

<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Invoice | Light Able Admin & Dashboard Template</title>
  <!-- [Meta] -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta
    name="description"
    content="Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective."
  />
  <meta name="author" content="phoenixcoded" />

  <!-- [Favicon] icon -->
  <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon" />

  <!-- [Google Font : Public Sans] icon -->
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- [Tabler Icons] https://tablericons.com -->
  <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" >
  <!-- [Feather Icons] https://feathericons.com -->
  <link rel="stylesheet" href="../assets/fonts/feather.css" >
  <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
  <link rel="stylesheet" href="../assets/fonts/fontawesome.css" >
  <!-- [Material Icons] https://fonts.google.com/icons -->
  <link rel="stylesheet" href="../assets/fonts/material.css" >
  <!-- [Template CSS Files] -->
  <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" >
  <link rel="stylesheet" href="../assets/css/style-preset.css" >

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="../dashboard/index.html" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="../assets/images/logo-dark.svg" alt="logo image" class="logo-lg" />
        <span class="badge bg-brand-color-2 rounded-pill ms-2 theme-version">v1.0</span>
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>Navigation</label>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-gauge"></i>
            </span>
            <span class="pc-mtext">Dashboard</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
            <span class="pc-badge">2</span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../dashboard/index.html">Analytics</a></li>
            <li class="pc-item"><a class="pc-link" href="../dashboard/affiliate.html">Affiliate</a></li>
            <li class="pc-item"><a class="pc-link" href="../dashboard/finance.html">Finance</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-dashboard.html">Helpdesk</a></li>
            <li class="pc-item"><a class="pc-link" href="../dashboard/invoice.html">Invoice</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"
            ><span class="pc-micon"> <i class="ph-duotone ph-layout"></i></span><span class="pc-mtext">Layouts</span
            ><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../demo/layout-horizontal.html">Horizontal</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-vertical.html">Vertical</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-vertical-tab.html">Vertical + Tab</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-tab.html">Tab</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-2-column.html">2 Column</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-big-compact.html">Big Compact</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-compact.html">Compact</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-moduler.html">Moduler</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-creative.html">Creative</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-detached.html">Detached</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-advanced.html">Advanced</a></li>
            <li class="pc-item"><a class="pc-link" href="../demo/layout-extended.html">Extended</a></li>
          </ul>
        </li>
        <li class="pc-item pc-caption">
          <label>Widget</label>
          <i class="ph-duotone ph-chart-pie"></i>
        </li>
        <li class="pc-item">
          <a href="../widget/w_statistics.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-projector-screen-chart"></i>
            </span>
            <span class="pc-mtext">Statistics</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../widget/w_user.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-identification-card"></i>
            </span>
            <span class="pc-mtext">User</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../widget/w_data.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-database"></i>
            </span>
            <span class="pc-mtext">Data</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../widget/w_chart.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-chart-pie"></i>
            </span>
            <span class="pc-mtext">Chart</span></a
          >
        </li>
        <li class="pc-item pc-caption">
          <label>Application</label>
          <i class="ph-duotone ph-buildings"></i>
        </li>
        <li class="pc-item">
          <a href="../application/calendar.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-calendar-blank"></i>
            </span>
            <span class="pc-mtext">Calendar</span></a
          >
        </li>
        <li class="pc-item">
          <a href="../application/chat.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-chats-circle"></i>
            </span>
            <span class="pc-mtext">Chat</span></a
          >
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-image"></i>
            </span>
            <span class="pc-mtext">Gallery</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../application/gallery-grid.html">Grid</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/gallery-masonry.html">Masonry</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-shopping-cart"></i>
            </span>
            <span class="pc-mtext">E-commerce</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../application/ecom_product.html">Product</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/ecom_product-details.html">Product details</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/ecom_product-list.html">Product List</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/ecom_product-add.html">Add New Product</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/ecom_checkout.html">Checkout</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"
            ><span class="pc-micon"><i class="ph-duotone ph-lifebuoy"></i></span><span class="pc-mtext">Helpdesk</span
            ><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-dashboard.html">Dashboard</a></li>
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#!"
                >Ticket<span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-create-ticket.html">Create</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-ticket.html">List</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-ticket-details.html">Details</a></li>
              </ul>
            </li>
            <li class="pc-item"><a class="pc-link" href="../admins/helpdesk-customer.html">Customer</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-newspaper"></i>
            </span>
            <span class="pc-mtext">Invoice 1</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../application/invoice-list.html">Invoice List</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/invoice-create.html">Create</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/invoice-view.html">Preview</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"
            ><span class="pc-micon"><i class="ph-duotone ph-newspaper"></i></span><span class="pc-mtext">Invoice 2</span
            ><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../admins/invoice-dashboard.html">Dashboard</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/invoice-create.html">Create</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/invoice-view.html">Details</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/invoice-list.html">List</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/invoice-edit.html">Edit</a></li>
          </ul>
        </li>
        <li class="pc-item">
          <a href="../application/mail.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-envelope-open"></i>
            </span>
            <span class="pc-mtext">Mail</span></a
          >
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-identification-badge"></i>
            </span>
            <span class="pc-mtext">Membership</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../admins/membership-dashboard.html">Dashboard</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/membership-list.html">List</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/membership-pricing.html">Pricing</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/membership-setting.html">Setting</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-books"></i>
            </span>
            <span class="pc-mtext">Online Courses</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../admins/course-dashboard.html">Dashboard</a></li>
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#!"
                >Teacher<span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../admins/course-teacher-list.html">List</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/course-teacher-apply.html">Apply</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/course-teacher-add.html">Add</a></li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#!"
                >Student<span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../admins/course-student-list.html">list</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/course-student-Apply.html">Apply</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/course-student-add.html">Add</a></li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#!"
                >Courses<span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../admins/course-course-view.html">View</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/course-course-add.html">Add</a></li>
              </ul>
            </li>
            <li class="pc-item"><a class="pc-link" href="../admins/course-pricing.html">Pricing</a></li>
            <li class="pc-item"><a class="pc-link" href="../admins/course-site.html">Site</a></li>
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#!"
                >Setting<span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../admins/course-setting-payment.html">Payment</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/course-setting-pricing.html">Pricing</a></li>
                <li class="pc-item"><a class="pc-link" href="../admins/course-setting-notifications.html">Notifications</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="pc-item">
          <a href="../application/plans.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-currency-circle-dollar"></i>
            </span>
            <span class="pc-mtext">Plans</span></a
          >
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-user-circle"></i>
            </span>
            <span class="pc-mtext">Users</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../application/account-profile.html">Account Profile</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/social-media.html">Social media</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/user-card.html">User Card</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/user-list.html">User List</a></li>
            <li class="pc-item"><a class="pc-link" href="../application/team.html">Team</a></li>
          </ul>
        </li>

        <li class="pc-item pc-caption">
          <label>Pages</label>
          <i class="ph-duotone ph-devices"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-shield-checkered"></i>
            </span>
            <span class="pc-mtext">Authentication</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"
                >Authentication 1<span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/login-v1.html">Login</a></li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/register-v1.html">Register</a></li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/forgot-password-v1.html">Forgot Password</a></li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/reset-password-v1.html">reset password</a> </li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/code-verification-v1.html">code verification</a></li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"
                >Authentication 2<span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/login-v2.html">Login</a></li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/register-v2.html">Register</a></li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/forgot-password-v2.html">Forgot password</a> </li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/reset-password-v2.html">reset password</a> </li>
                <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/code-verification-v2.html">code verification</a></li>
              </ul>
            </li>
            <li class="pc-item"><a class="pc-link" href="../pages/login-modal.html">Login Modal</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-wrench"></i>
            </span>
            <span class="pc-mtext">Maintenance</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/error-404.html">Error 404</a></li>
            <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/connection-lost.html">Connection lost</a></li>
            <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/under-construction.html">Under Construction</a></li>
            <li class="pc-item"><a class="pc-link" target="_blank" href="../pages/coming-soon.html">Coming soon</a></li>
          </ul>
        </li>
        <li class="pc-item"
          ><a href="../pages/contact-us.html" class="pc-link"
            ><span class="pc-micon"> <i class="ph-duotone ph-target"></i> </span><span class="pc-mtext">Contact Us</span></a
          >
        </li>
        <li class="pc-item"
          ><a href="../index.html" class="pc-link" target="_blank"
            ><span class="pc-micon"> <i class="ph-duotone ph-rocket"></i> </span>
            <span class="pc-mtext pc-icon-link">Landing <i class="ti ti-link text-primary f-14"></i></span>
          </a>
        </li>
        <li class="pc-item"
          ><a href="../pages/loading.html" class="pc-link"
            ><span class="pc-micon"> <i class="ph-duotone ph-fan"></i> </span><span class="pc-mtext">Loading</span></a
          >
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-magnifying-glass"></i>
            </span>
            <span class="pc-mtext">Search</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../pages/search-page.html">Search Page</a></li>
            <li class="pc-item"><a class="pc-link" href="../pages/contact-search.html">Contact Search</a></li>
          </ul>
        </li>
        <li class="pc-item">
          <a href="../pages/settings.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-globe"></i>
            </span>
            <span class="pc-mtext">Site Settings</span>
          </a>
        </li>
        <li class="pc-item pc-caption">
          <label>UI Components</label>
          <i class="ph-duotone ph-compass-tool"></i>
        </li>
        <li class="pc-item">
          <a href="../elements/bc_alert.html" class="pc-link" target="_blank"
            ><span class="pc-micon"> <i class="ph-duotone ph-compass-tool"></i></span>
            <span class="pc-mtext pc-icon-link">Components <i class="ti ti-link text-primary f-14"></i></span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../elements/animation.html" class="pc-link">
            <span class="pc-micon"> <i class="ph-duotone ph-flower"></i> </span><span class="pc-mtext">Animation</span></a
          >
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"
            ><span class="pc-micon"> <i class="ph-duotone ph-flower-lotus"></i></span><span class="pc-mtext">Icons</span
            ><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../elements/icon-feather.html">Feather</a></li>
            <li class="pc-item"><a class="pc-link" href="../elements/icon-fontawesome.html">Font Awesome 5</a></li>
            <li class="pc-item"><a class="pc-link" href="../elements/icon-material.html">Material</a></li>
            <li class="pc-item"><a class="pc-link" href="../elements/icon-tabler.html">Tabler</a></li>
            <li class="pc-item"><a class="pc-link" href="../elements/icon-phosphor.html">Phosphor</a></li>
            <li class="pc-item"><a class="pc-link" href="../elements/icon-custom.html">Custom</a></li>
          </ul>
        </li>
        <li class="pc-item pc-caption">
          <label>Forms</label>
          <i class="ph-duotone ph-textbox"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-textbox"></i>
            </span>
            <span class="pc-mtext">Forms Elements</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../forms/form_elements.html">Form Basic</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form_floating.html">Form Floating</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_basic.html">Form Options</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_input_group.html">Input Groups</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_checkbox.html">Checkbox</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_radio.html">Radio</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_switch.html">Switch</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_megaoption.html">Mega option</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-plug-charging"></i>
            </span>
            <span class="pc-mtext">Forms Plugins</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#"
                >Date<span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../forms/form2_datepicker.html">Datepicker</a></li>
                <li class="pc-item"><a class="pc-link" href="../forms/form2_daterangepicker.html">Date Range Picker</a> </li>
                <li class="pc-item"><a class="pc-link" href="../forms/form2_timepicker.html">Timepicker</a></li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#"
                >Select<span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../forms/form2_choices.html">Choices js</a></li>
              </ul>
            </li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_rating.html">Rating</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_recaptcha.html">Google reCaptcha</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_inputmask.html">Input Masks</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_clipboard.html">Clipboard</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_nouislider.html">Nouislider</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_switchjs.html">Bootstrap Switch</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_typeahead.html">Typeahead</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-pen-nib"></i>
            </span>
            <span class="pc-mtext">Text Editors</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../forms/form2_tinymce.html">Tinymce</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_quill.html">Quill</a></li>
            <li class="pc-item pc-hasmenu">
              <a class="pc-link" href="#"
                >CK editor<span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../forms/editor-classic.html">classic</a></li>
                <li class="pc-item"><a class="pc-link" href="../forms/editor-document.html">Document</a></li>
                <li class="pc-item"><a class="pc-link" href="../forms/editor-inline.html">Inline</a></li>
                <li class="pc-item"><a class="pc-link" href="../forms/editor-balloon.html">Balloon</a></li>
              </ul>
            </li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_markdown.html">Markdown</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-windows-logo"></i>
            </span>
            <span class="pc-mtext">Form Layouts</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-default.html">Layouts</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-multicolumn.html">Multicolumn</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-actionbars.html">Actionbars</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_lay-stickyactionbars.html">Sticky Action bars</a> </li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-cloud-arrow-up"></i>
            </span>
            <span class="pc-mtext">File upload</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../forms/file-upload.html">Dropzone</a></li>
            <li class="pc-item"><a class="pc-link" href="../forms/form2_flu-uppy.html">Uppy</a></li>
          </ul>
        </li>
        <li class="pc-item">
          <a href="../forms/form2_wizard.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-tabs"></i>
            </span>
            <span class="pc-mtext">wizard</span></a
          >
        </li>
        <li class="pc-item">
          <a href="../forms/form-validation.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-password"></i>
            </span>
            <span class="pc-mtext">Form Validation</span></a
          >
        </li>
        <li class="pc-item"
          ><a href="../forms/image_crop.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-crop"></i>
            </span>
            <span class="pc-mtext">Image cropper</span></a
          ></li
        >
        <li class="pc-item pc-caption">
          <label>table</label>
          <i class="ph-duotone ph-table"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-table"></i>
            </span>
            <span class="pc-mtext">Bootstrap Table</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../table/tbl_bootstrap.html">Basic table</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_sizing.html">Sizing table</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_border.html">Border table</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_styling.html">Styling table</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-grid-nine"></i>
            </span>
            <span class="pc-mtext">Vanilla Table</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-simple.html">Basic initialization</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-dynamic-import.html">Dynamic Import</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-render-column-cells.html">Render Column Cells</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-column-manipulation.html">Column Manipulation</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-datetime-sorting.html">Datetime Sorting</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-methods.html">Methods</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-add-rows.html">Add Rows</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-fetch-api.html">Fetch API</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-filters.html">Filters</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/tbl_dt-export.html">Export</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-text-columns"></i>
            </span>
            <span class="pc-mtext">Data table</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../table/dt_advance.html">Advance initialization</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_styling.html">Styling</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_api.html">API</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_plugin.html">Plug-in</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_sources.html">Data sources</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-wall"></i>
            </span>
            <span class="pc-mtext">DT extensions</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_autofill.html">Autofill</a></li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"
                >Button<span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="../table/dt_ext_basic_buttons.html">Basic button</a></li>
                <li class="pc-item"><a class="pc-link" href="../table/dt_ext_export_buttons.html">Data export</a></li>
              </ul>
            </li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_col_reorder.html">Col reorder</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_fixed_columns.html">Fixed columns</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_fixed_header.html">Fixed header</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_key_table.html">Key table</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_responsive.html">Responsive</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_row_reorder.html">Row reorder</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_scroller.html">Scroller</a></li>
            <li class="pc-item"><a class="pc-link" href="../table/dt_ext_select.html">Select table</a></li>
          </ul>
        </li>
        <li class="pc-item pc-caption">
          <label>Charts &amp; Maps</label>
          <i class="ph-duotone ph-chart-pie-slice"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-chart-donut"></i>
            </span>
            <span class="pc-mtext">Charts</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../chart/chart-apex.html">Apex Chart</a></li>
            <li class="pc-item"><a class="pc-link" href="../chart/chart-peity.html">Peity Chart</a></li>
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-map-trifold"></i>
            </span>
            <span class="pc-mtext">Maps</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="../chart/map-vector.html">Vector Map</a></li>
            <li class="pc-item"><a class="pc-link" href="../chart/map-gmap.html">Gmaps</a></li>
          </ul>
        </li>

        <li class="pc-item pc-caption">
          <label>Other</label>
          <i class="ph-duotone ph-suitcase"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"
            ><span class="pc-micon"> <i class="ph-duotone ph-tree-structure"></i> </span><span class="pc-mtext">Menu levels</span
            ><span class="pc-arrow"><i data-feather="chevron-right"></i></span
          ></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"
                >Level 2.2<span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link"
                    >Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                  ></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"
                >Level 2.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span
              ></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link"
                    >Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span
                  ></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="pc-item"
          ><a href="../other/sample-page.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-desktop"></i>
            </span>
            <span class="pc-mtext">Sample page</span></a
          ></li
        >

      </ul>
      <div class="card nav-action-card bg-brand-color-4">
        <div class="card-body" style="background-image: url('../assets/images/layout/nav-card-bg.svg')">
          <h5 class="text-dark">Help Center</h5>
          <p class="text-dark text-opacity-75">Please contact us for more questions.</p>
          <a href="https://phoenixcoded.support-hub.io/" class="btn btn-primary" target="_blank">Go to help Center</a>
        </div>
      </div>
    </div>
    <div class="card pc-user-card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
          </div>
          <div class="flex-grow-1 ms-3">
            <div class="dropdown">
              <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1 me-2">
                    <h6 class="mb-0">Jonh Smith</h6>
                    <small>Administrator</small>
                  </div>
                  <div class="flex-shrink-0">
                    <div class="btn btn-icon btn-link-secondary avtar">
                      <i class="ph-duotone ph-windows-logo"></i>    
                    </div>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu">
                <ul>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-user"></i>
                      <span>My Account</span>
                    </a>
                  </li>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-gear"></i>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-lock-key"></i>
                      <span>Lock Screen</span>
                    </a>
                    </li>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-power"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item d-inline-flex d-md-none">
      <a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i class="ph-duotone ph-magnifying-glass"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-3">
          <div class="mb-0 d-flex align-items-center">
            <input type="search" class="form-control border-0 shadow-none" placeholder="Search..." />
            <button class="btn btn-light-secondary btn-search">Search</button>
          </div>
        </form>
      </div>
    </li>
    <li class="pc-h-item d-none d-md-inline-flex">
      <form class="form-search">
        <i class="ph-duotone ph-magnifying-glass icon-search"></i>
        <input type="search" class="form-control" placeholder="Search..." />

        <button class="btn btn-search" style="padding: 0"><kbd>ctrl+k</kbd></button>
      </form>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item d-none d-md-inline-flex">
      <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i class="ph-duotone ph-circles-four"></i>
      </a>
      <div class="dropdown-menu dropdown-qta dropdown-menu-end pc-h-dropdown">
        <div class="overflow-hidden">
          <div class="qta-links m-n1">
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-shopping-cart"></i>
              <span>E-commerce</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-lifebuoy"></i>
              <span>Helpdesk</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-scroll"></i>
              <span>Invoice</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-books"></i>
              <span>Online Courses</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-envelope-open"></i>
              <span>Mail</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-identification-badge"></i>
              <span>Membership</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-chats-circle"></i>
              <span>Chat</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-currency-circle-dollar"></i>
              <span>Plans</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ph-duotone ph-user-circle"></i>
              <span>Users</span>
            </a>
          </div>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item">
      <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i class="ph-duotone ph-sun-dim"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
          <i class="ph-duotone ph-moon"></i>
          <span>Dark</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
          <i class="ph-duotone ph-sun-dim"></i>
          <span>Light</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change_default()">
          <i class="ph-duotone ph-cpu"></i>
          <span>Default</span>
        </a>
      </div>
    </li>
    <li class="pc-h-item">
      <a class="pc-head-link pct-c-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout">
        <i class="ph-duotone ph-gear-six"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item">
      <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i class="ph-duotone ph-diamonds-four"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item">
          <i class="ph-duotone ph-user"></i>
          <span>My Account</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ph-duotone ph-gear"></i>
          <span>Settings</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ph-duotone ph-lifebuoy"></i>
          <span>Support</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ph-duotone ph-lock-key"></i>
          <span>Lock Screen</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ph-duotone ph-power"></i>
          <span>Logout</span>
        </a>
      </div>
    </li>
    <li class="dropdown pc-h-item">
      <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i class="ph-duotone ph-bell"></i>
        <span class="badge bg-success pc-h-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Notifications</h5>
          <ul class="list-inline ms-auto mb-0">
            <li class="list-inline-item">
              <a href="../application/mail.html" class="avtar avtar-s btn-link-hover-primary">
                <i class="ti ti-link f-18"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="dropdown-body text-wrap header-notification-scroll position-relative"
          style="max-height: calc(100vh - 235px)">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p class="text-span">Today</p>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar avtar avtar-s" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Keefe Bond added new tags to 💪 Design system</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">2 min ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"><br /><span class="text-truncate">Lorem Ipsum has been the
                      industry's standard dummy text ever since the 1500s.</span></p>
                  <span class="badge bg-light-primary border border-primary me-1 mt-1">web design</span>
                  <span class="badge bg-light-warning border border-warning me-1 mt-1">Dashobard</span>
                  <span class="badge bg-light-success border border-success me-1 mt-1">Design System</span>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avtar avtar-s bg-light-primary">
                    <i class="ph-duotone ph-chats-teardrop f-18"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Message</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">1 hour ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"><br /><span class="text-truncate">Lorem Ipsum has been the
                      industry's standard dummy text ever since the 1500s.</span></p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <p class="text-span">Yesterday</p>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avtar avtar-s bg-light-danger">
                    <i class="ph-duotone ph-user f-18"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Challenge invitation</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">12 hour ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"><br /><span class="text-truncate"><strong> Jonny aber </strong>
                      invites to join the challenge</span></p>
                  <button class="btn btn-sm rounded-pill btn-outline-secondary me-2">Decline</button>
                  <button class="btn btn-sm rounded-pill btn-primary">Accept</button>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avtar avtar-s bg-light-info">
                    <i class="ph-duotone ph-notebook f-18"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Forms</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">2 hour ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s.</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar avtar avtar-s" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Keefe Bond added new tags to 💪 Design system</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">2 min ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2"><br /><span class="text-truncate">Lorem Ipsum has been the
                      industry's standard dummy text ever since the 1500s.</span></p>
                  <button class="btn btn-sm rounded-pill btn-outline-secondary me-2">Decline</button>
                  <button class="btn btn-sm rounded-pill btn-primary">Accept</button>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avtar avtar-s bg-light-success">
                    <i class="ph-duotone ph-shield-checkered f-18"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <div class="d-flex">
                    <div class="flex-grow-1 me-3 position-relative">
                      <h6 class="mb-0 text-truncate">Security</h6>
                    </div>
                    <div class="flex-shrink-0">
                      <span class="text-sm">5 hour ago</span>
                    </div>
                  </div>
                  <p class="position-relative mt-1 mb-2">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s.</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="dropdown-footer">
          <div class="row g-3">
            <div class="col-6">
              <div class="d-grid"><button class="btn btn-primary">Archive all</button></div>
            </div>
            <div class="col-6">
              <div class="d-grid"><button class="btn btn-outline-secondary">Mark all as read</button></div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
        <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Profile</h5>
        </div>
        <div class="dropdown-body">
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
            <ul class="list-group list-group-flush w-100">
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="wid-50 rounded-circle" />
                  </div>
                  <div class="flex-grow-1 mx-3">
                    <h5 class="mb-0">Carson Darrin</h5>
                    <a class="link-primary" href="mailto:carson.darrin@company.io">carson.darrin@company.io</a>
                  </div>
                  <span class="badge bg-primary">PRO</span>
                </div>
              </li>
              <li class="list-group-item">
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-key"></i>
                    <span>Change password</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-envelope-simple"></i>
                    <span>Recently mail</span>
                  </span>
                  <div class="user-group">
                    <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="avtar" />
                    <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="avtar" />
                    <img src="../assets/images/user/avatar-3.jpg" alt="user-image" class="avtar" />
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-calendar-blank"></i>
                    <span>Schedule meetings</span>
                  </span>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-heart"></i>
                    <span>Favorite</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-arrow-circle-down"></i>
                    <span>Download</span>
                  </span>
                  <span class="avtar avtar-xs rounded-circle bg-danger text-white">10</span>
                </a>
              </li>
              <li class="list-group-item">
                <div class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-globe-hemisphere-west"></i>
                    <span>Languages</span>
                  </span>
                  <span class="flex-shrink-0">
                    <select class="form-select bg-transparent form-select-sm border-0 shadow-none">
                      <option value="1">English</option>
                      <option value="2">Spain</option>
                      <option value="3">Arbic</option>
                    </select>
                  </span>
                </div>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-flag"></i>
                    <span>Country</span>
                  </span>
                </a>
                <div class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-moon"></i>
                    <span>Dark mode</span>
                  </span>
                  <div class="form-check form-switch form-check-reverse m-0">
                    <input class="form-check-input f-18" id="dark-mode" type="checkbox" onclick="dark_mode()"
                      role="switch" />
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-user-circle"></i>
                    <span>Edit profile</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-star text-warning"></i>
                    <span>Upgrade account</span>
                    <span class="badge bg-light-success border border-success ms-2">NEW</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-bell"></i>
                    <span>Notifications</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-gear-six"></i>
                    <span>Settings</span>
                  </span>
                </a>
              </li>
              <li class="list-group-item">
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-plus-circle"></i>
                    <span>Add account</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="d-flex align-items-center">
                    <i class="ph-duotone ph-power"></i>
                    <span>Logout</span>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div> </div>
</header>
<!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Invoice</a></li>
                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Dashboard</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-lg-9">
          <div class="card">
            <div class="card-body">
              <div class="row g-3 mb-3">
                <div class="col-md-6 col-xxl-3">
                  <div class="card border mb-0">
                    <div class="card-body p-3">
                      <div class="d-flex align-items-center justify-content-between gap-1">
                        <h6 class="mb-0">Total</h6>
                        <p class="mb-0 text-muted d-flex align-items-center gap-1">
                          <svg class="pc-icon text-warning wid-15 hei-15">
                            <use xlink:href="#custom-arrow-down"></use>
                          </svg>
                          20.3%</p>
                      </div>
                      <h5 class="mb-2 mt-3">£5678.09</h5>
                      <div class="d-flex align-items-center gap-1">
                        <h5 class="mb-0">3</h5>
                        <p class="mb-0 text-muted d-flex align-items-center gap-2">invoices</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                  <div class="card border mb-0">
                    <div class="card-body p-3">
                      <div class="d-flex align-items-center justify-content-between gap-1">
                        <h6 class="mb-0">Paid</h6>
                        <p class="mb-0 text-muted d-flex align-items-center gap-1">
                          <svg class="pc-icon text-danger wid-15 hei-15">
                            <use xlink:href="#custom-arrow-down"></use>
                          </svg>
                          -8.73%</p>
                      </div>
                      <h5 class="mb-2 mt-3">£5678.09</h5>
                      <div class="d-flex align-items-center gap-1">
                        <h5 class="mb-0">5</h5>
                        <p class="mb-0 text-muted d-flex align-items-center gap-2">invoices</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                  <div class="card border mb-0">
                    <div class="card-body p-3">
                      <div class="d-flex align-items-center justify-content-between gap-1">
                        <h6 class="mb-0">Pending</h6>
                        <p class="mb-0 text-muted d-flex align-items-center gap-1">
                          <svg class="pc-icon text-success wid-15 hei-15">
                            <use xlink:href="#custom-arrow-up"></use>
                          </svg>
                          10.73%</p>
                      </div>
                      <h5 class="mb-2 mt-3">£5678.09</h5>
                      <div class="d-flex align-items-center gap-1">
                        <h5 class="mb-0">20</h5>
                        <p class="mb-0 text-muted d-flex align-items-center gap-2">invoices</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                  <div class="card border mb-0">
                    <div class="card-body p-3">
                      <div class="d-flex align-items-center justify-content-between gap-1">
                        <h6 class="mb-0">Overdue</h6>
                        <p class="mb-0 text-muted d-flex align-items-center gap-1">
                          <svg class="pc-icon text-primary wid-15 hei-15">
                            <use xlink:href="#custom-arrow-down"></use>
                          </svg>
                          -4.73%</p>
                      </div>
                      <h5 class="mb-2 mt-3">£5678.09</h5>
                      <div class="d-flex align-items-center gap-1">
                        <h5 class="mb-0">5</h5>
                        <p class="mb-0 text-muted d-flex align-items-center gap-2">invoices</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="invoice-chart"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="row g-3 text-center">
                <div class="col-6">
                  <div class="card mb-0">
                    <div class="card-body py-4 px-2">
                      <div class="avtar bg-primary rounded-circle">
                        <svg class="pc-icon text-white">
                          <use xlink:href="#custom-document-text"></use>
                        </svg>
                      </div>
                      <h6 class="mb-0 mt-3 text-muted">All Invoices</h6>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card mb-0">
                    <div class="card-body py-4 px-2">
                      <div class="avtar bg-info rounded-circle">
                        <svg class="pc-icon text-white">
                          <use xlink:href="#custom-archive-book"></use>
                        </svg>
                      </div>
                      <h6 class="mb-0 mt-3 text-muted">Reports</h6>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card mb-0">
                    <div class="card-body py-4 px-2">
                      <div class="avtar bg-success rounded-circle">
                        <svg class="pc-icon text-white">
                          <use xlink:href="#custom-dollar-circle"></use>
                        </svg>
                      </div>
                      <h6 class="mb-0 mt-3 text-muted">Paid</h6>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card mb-0">
                    <div class="card-body py-4 px-2">
                      <div class="avtar bg-warning rounded-circle">
                        <svg class="pc-icon text-white">
                          <use xlink:href="#custom-document-filter"></use>
                        </svg>
                      </div>
                      <h6 class="mb-0 mt-3 text-muted">Pending</h6>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card mb-0">
                    <div class="card-body py-4 px-2">
                      <div class="avtar bg-danger rounded-circle">
                        <svg class="pc-icon text-white">
                          <use xlink:href="#custom-close-circle"></use>
                        </svg>
                      </div>
                      <h6 class="mb-0 mt-3 text-muted">Cancelled</h6>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card mb-0">
                    <div class="card-body py-4 px-2">
                      <div class="avtar bg-primary rounded-circle">
                        <svg class="pc-icon text-white">
                          <use xlink:href="#custom-shopping-bag"></use>
                        </svg>
                      </div>
                      <h6 class="mb-0 mt-3 text-muted">Draft</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="card">
            <div class="card-body pb-0">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Recent Invoice</h5>
                <div class="dropdown">
                  <a
                    class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                    href="#"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="ti ti-dots-vertical f-18"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">Today</a>
                    <a class="dropdown-item" href="#">Weekly</a>
                    <a class="dropdown-item" href="#">Monthly</a>
                  </div>
                </div>
              </div>
            </div>
            <ul class="list-group list-group-flush border-top-0">
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img src="../assets/images/user/avatar-10.jpg" alt="user-image" class="user-avtar rounded-circle wid-40 hie-40" />
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">David Jones <span class="text-muted"> - #790841</span></h6>
                    <p class="mb-0 text-primary">$329.20</p>
                  </div>
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">5 min ago</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar rounded-circle wid-40 hie-40" />
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Jenny Jones <span class="text-muted"> - #790841</span></h6>
                    <p class="mb-0 text-primary">$329.20</p>
                  </div>
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">1 day ago</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img src="../assets/images/user/avatar-3.jpg" alt="user-image" class="user-avtar rounded-circle wid-40 hie-40" />
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Harry Ben <span class="text-muted"> - #790841</span></h6>
                    <p class="mb-0 text-primary">3 week ago</p>
                  </div>
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">5 min ago</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar rounded-circle wid-40 hie-40" />
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Jenifer Vintage <span class="text-muted"> - #790841</span></h6>
                    <p class="mb-0 text-primary">$329.20</p>
                  </div>
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">3 week ago</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img src="../assets/images/user/avatar-3.jpg" alt="user-image" class="user-avtar rounded-circle wid-40 hie-40" />
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Stebin Ben <span class="text-muted"> - #790841</span></h6>
                    <p class="mb-0 text-primary">$329.20</p>
                  </div>
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">1 month ago</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-grid">
                  <button class="btn btn-outline-secondary">View All</button>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="card">
            <div class="card-body pb-0">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Total Expenses</h5>
                <div class="dropdown">
                  <a
                    class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                    href="#"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="ti ti-dots-vertical f-18"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">Today</a>
                    <a class="dropdown-item" href="#">Weekly</a>
                    <a class="dropdown-item" href="#">Monthly</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div id="total-income-graph"></div>
              <div class="mb-2 mt-3 d-flex align-items-center justify-content-between">
                <h6 class="mb-0 d-flex align-items-center gap-2"><i class="fas fa-circle text-warning f-12"></i>
                  Pending</h6>
                <p class="mb-0 text-muted">$3,202</p>
              </div>
              <div class="mb-2 d-flex align-items-center justify-content-between">
                <h6 class="mb-0 d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-12"></i>
                  Paid</h6>
                <p class="mb-0 text-muted">$45,050</p>
              </div>
              <div class="mb-2 d-flex align-items-center justify-content-between">
                <h6 class="mb-0 d-flex align-items-center gap-2"><i class="fas fa-circle text-danger f-12"></i>
                  Overdue</h6>
                <p class="mb-0 text-muted">$25,000</p>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <h6 class="mb-0 d-flex align-items-center gap-2"><i class="fas fa-circle text-primary text-opacity-25 f-12"></i>
                  Draft</h6>
                <p class="mb-0 text-muted">$7,694</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="card">
            <div class="card-body pb-0">
              <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Notification</h5>
                <div class="dropdown">
                  <a
                    class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                    href="#"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="ti ti-dots-vertical f-18"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">Today</a>
                    <a class="dropdown-item" href="#">Weekly</a>
                    <a class="dropdown-item" href="#">Monthly</a>
                  </div>
                </div>
              </div>
            </div>
            <ul class="list-group list-group-flush border-top-0">
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar bg-light-success rounded-circle">
                      <i class="ti ti-file-download f-26"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Johnny sent you an invoice billed <a href="#!" class="link-primary">$1,000</a>.</h6>
                    <p class="mb-0 text-muted text-sm">2 August</p>
                  </div>
                  <div class="flex-shrink-0">
                    <a href="#!" class="avtar avtar-s btn-link-secondary"><i class="ti ti-link"></i></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar bg-light-primary rounded-circle">
                      <i class="ti ti-file-text f-26"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Sent an invoice to Aida Bugg amount of <a href="#!" class="link-primary">$200</a>.</h6>
                    <p class="mb-0 text-muted text-sm">7 hours ago</p>
                  </div>
                  <div class="flex-shrink-0">
                    <a href="#!" class="avtar avtar-s btn-link-secondary"><i class="ti ti-link"></i></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar bg-light-danger rounded-circle">
                      <i class="ti ti-adjustments f-26"></i>
                    </div>
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">There was a failure to your setup</h6>
                    <p class="mb-0 text-muted text-sm">7 hours ago</p>
                  </div>
                  <div class="flex-shrink-0">
                    <a href="#!" class="avtar avtar-s btn-link-secondary"><i class="ti ti-link"></i></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar bg-light-primary rounded-circle">
                      <span class="f-24 fw-normal">c</span>
                    </div>
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Cristina danny invited to you join Meeting</h6>
                    <p class="mb-0 text-muted text-sm">7 hours ago</p>
                  </div>
                  <div class="flex-shrink-0">
                    <a href="#!" class="avtar avtar-s btn-link-secondary"><i class="ti ti-link"></i></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <div class="avtar bg-light-primary rounded-circle">
                      <span class="f-24 fw-normal">c</span>
                    </div>
                  </div>
                  <div class="flex-grow-1 mx-2">
                    <h6 class="mb-1">Cristina danny invited to you join Meeting</h6>
                    <p class="mb-0 text-muted text-sm">7 hours ago</p>
                  </div>
                  <div class="flex-shrink-0">
                    <a href="#!" class="avtar avtar-s btn-link-secondary"><i class="ti ti-link"></i></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0">
                <div class="d-grid">
                  <button class="btn btn-outline-secondary">View All</button>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>

  <!-- [ Main Content ] end -->
  <footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
      <div class="row">
        <div class="col-sm-6 my-1">
          <p class="m-0">Made with &#9829; by Team <a href="https://themeforest.net/user/phoenixcoded" target="_blank"> Phoenixcoded</a></p>
        </div>
        <div class="col-sm-6 ms-auto my-1">
          <ul class="list-inline footer-link mb-0 justify-content-sm-end d-flex">
            <li class="list-inline-item"><a href="../index.html">Home</a></li>
            <li class="list-inline-item"><a href="https://pcoded.gitbook.io/light-able/" target="_blank">Documentation</a></li>
            <li class="list-inline-item"><a href="https://phoenixcoded.support-hub.io/" target="_blank">Support</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
 <!-- Required Js -->
<script src="../assets/js/plugins/popper.min.js"></script>
<script src="../assets/js/plugins/simplebar.min.js"></script>
<script src="../assets/js/plugins/bootstrap.min.js"></script>
<script src="../assets/js/fonts/custom-font.js"></script>
<script src="../assets/js/pcoded.js"></script>
<script src="../assets/js/plugins/feather.min.js"></script>





<script>layout_change('light');</script>




<script>layout_sidebar_change('light');</script>



<script>change_box_container('false');</script>


<script>layout_caption_change('true');</script>




<script>layout_rtl_change('false');</script>


<script>preset_change("preset-1");</script>

  <!-- [Page Specific JS] start -->
  <script src="../assets/js/plugins/apexcharts.min.js"></script>
  <script src="../assets/js/pages/invoice-dashboard.js"></script>
  <!-- [Page Specific JS] end -->
  <div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
    <div class="offcanvas-header justify-content-between">
      <h5 class="offcanvas-title">Settings</h5>
      <button type="button" class="btn btn-icon btn-link-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i
          class="ti ti-x"></i></button>
    </div>
    <div class="pct-body customizer-body">
      <div class="offcanvas-body py-0">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="pc-dark">
              <h6 class="mb-1">Theme Mode</h6>
              <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
              <div class="row theme-color theme-layout">
                <div class="col-4">
                  <div class="d-grid">
                    <button class="preset-btn btn active" data-value="true" onclick="layout_change('light');">
                      <span class="btn-label">Light</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="false" onclick="layout_change('dark');">
                      <span class="btn-label">Dark</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="default" onclick="layout_change_default();"
                      data-bs-toggle="tooltip"
                      title="Automatically sets the theme based on user's operating system's color scheme.">
                      <span class="btn-label">Default</span>
                      <span class="pc-lay-icon d-flex align-items-center justify-content-center">
                        <i class="ph-duotone ph-cpu"></i>
                      </span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <h6 class="mb-1">Sidebar Theme</h6>
            <p class="text-muted text-sm">Choose Sidebar Theme</p>
            <div class="row theme-color theme-sidebar-color">
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn" data-value="true" onclick="layout_sidebar_change('dark');">
                    <span class="btn-label">Dark</span>
                    <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                  </button>
                </div>
              </div>
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn active" data-value="false" onclick="layout_sidebar_change('light');">
                    <span class="btn-label">Light</span>
                    <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                  </button>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <h6 class="mb-1">Accent color</h6>
            <p class="text-muted text-sm">Choose your primary theme color</p>
            <div class="theme-color preset-color">
              <a href="#!" class="active" data-value="preset-1"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-2"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-3"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-4"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-5"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-6"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-7"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-8"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-9"><i class="ti ti-check"></i></a>
              <a href="#!" data-value="preset-10"><i class="ti ti-check"></i></a>
            </div>
          </li>
          <li class="list-group-item">
            <h6 class="mb-1">Sidebar Caption</h6>
            <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
            <div class="row theme-color theme-nav-caption">
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn active" data-value="true" onclick="layout_caption_change('true');">
                    <span class="btn-label">Caption Show</span>
                    <span
                      class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                  </button>
                </div>
              </div>
              <div class="col-6">
                <div class="d-grid">
                  <button class="preset-btn btn" data-value="false" onclick="layout_caption_change('false');">
                    <span class="btn-label">Caption Hide</span>
                    <span
                      class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                  </button>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="pc-rtl">
              <h6 class="mb-1">Theme Layout</h6>
              <p class="text-muted text-sm">LTR/RTL</p>
              <div class="row theme-color theme-direction">
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn active" data-value="false" onclick="layout_rtl_change('false');">
                      <span class="btn-label">LTR</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="true" onclick="layout_rtl_change('true');">
                      <span class="btn-label">RTL</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item pc-box-width">
            <div class="pc-container-width">
              <h6 class="mb-1">Layout Width</h6>
              <p class="text-muted text-sm">Choose Full or Container Layout</p>
              <div class="row theme-color theme-container">
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn active" data-value="false" onclick="change_box_container('false')">
                      <span class="btn-label">Full Width</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                    </button>
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-grid">
                    <button class="preset-btn btn" data-value="true" onclick="change_box_container('true')">
                      <span class="btn-label">Fixed Width</span>
                      <span class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="d-grid">
              <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</body>
<!-- [Body] end -->

</html>