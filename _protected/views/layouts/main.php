<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
    <?php $this->head() ?>
</head>
<body data-topbar="colored" data-layout="horizontal" data-layout-size="boxed">
<?php $this->beginBody() ?>
<div class="wrap">
  
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="container-fluid">
                        <div class="float-right">

                            <div class="dropdown d-inline-block ml-2">
                                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                    <i class="mdi mdi-tune"></i>
                                </button>
                            </div>

                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="d-none d-sm-inline-block ml-1">Smith</span>
                                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> Billing</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock font-size-16 align-middle mr-1"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                                </div>
                            </div>
                        </div>

                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm-dark.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="20">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm-light.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <div class="topnav">
                            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                                <div class="collapse navbar-collapse" id="topnav-menu-content">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html">
                                                Dashboard
                                            </a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Elements <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu dropdown-mega-menu-xl px-2" aria-labelledby="topnav-uielement">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="dropdown-item-text font-weight-semibold font-size-16">
                                                            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-box"></i></div> UI Elements</div>

                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                                <a href="ui-alerts.html" class="dropdown-item">Alerts</a>
                                                                <a href="ui-badge.html" class="dropdown-item">Badge</a>
                                                                <a href="ui-buttons.html" class="dropdown-item">Buttons</a>
                                                                <a href="ui-cards.html" class="dropdown-item">Cards</a>
                                                                <a href="ui-dropdowns.html" class="dropdown-item">Dropdowns</a>
                                                                <a href="ui-navs.html" class="dropdown-item">Navs</a>
                                                            </div>
                                                            <div class="col-lg-5">
                                                                <div>
                                                                    <a href="ui-tabs-accordions.html" class="dropdown-item">Tabs &amp; Accordions</a>
                                                                    <a href="ui-modals.html" class="dropdown-item">Modals</a>
                                                                    <a href="ui-images.html" class="dropdown-item">Images</a>
                                                                    <a href="ui-progressbars.html" class="dropdown-item">Progress Bars</a>
                                                                    <a href="ui-pagination.html" class="dropdown-item">Pagination</a>
                                                                    <a href="ui-popover-tooltips.html" class="dropdown-item">Popover & Tooltips</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="dropdown-item-text font-weight-semibold font-size-16">
                                                            <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layer-group"></i></div> Advanced UI</div>

                                                        <div>
                                                            <a href="advanced-alertify.html" class="dropdown-item">Alertify</a>
                                                            <a href="advanced-rating.html" class="dropdown-item">Rating</a>
                                                            <a href="advanced-nestable.html" class="dropdown-item">Nestable</a>
                                                            <a href="advanced-rangeslider.html" class="dropdown-item">Range Slider</a>
                                                            <a href="advanced-sweet-alert.html" class="dropdown-item">Sweet-Alert</a>
                                                            <a href="advanced-lightbox.html" class="dropdown-item">Lightbox</a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Components <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-components">
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class="d-inline-block icons-sm mr-2"><i class="uim uim-comment-message"></i></div> Email
                                                        <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                        <a href="email-inbox.html" class="dropdown-item">Inbox</a>
                                                        <a href="email-read.html" class="dropdown-item">Email Read</a>
                                                        <a href="email-compose.html" class="dropdown-item">Email Compose</a>
                                                    </div>
                                                </div>
                                                <a href="calendar.html" class="dropdown-item">
                                                    <div class="d-inline-block icons-sm mr-2"><i class="uim uim-schedule"></i></div> Calendar</a>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icon" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class="d-inline-block icons-sm mr-2"><i class="uim uim-object-ungroup"></i></div>Icons
                                                        <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-icon">
                                                        <a href="icons-materialdesign.html" class="dropdown-item">Material Design</a>
                                                        <a href="icons-dripicons.html" class="dropdown-item">Dripicons</a>
                                                        <a href="icons-fontawesome.html" class="dropdown-item">Font awesome 5</a>
                                                        <a href="icons-themify.html" class="dropdown-item">Themify</a>
                                                        <a href="icons-unicons.html" class="dropdown-item">Unicons - Dual Tone</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class="d-inline-block icons-sm mr-2"><i class="uim uim-table"></i></div>Tables
                                                        <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-table">
                                                        <a href="tables-basic.html" class="dropdown-item">Basic Tables</a>
                                                        <a href="tables-datatable.html" class="dropdown-item">Data Tables</a>
                                                        <a href="tables-responsive.html" class="dropdown-item">Responsive Table</a>
                                                        <a href="tables-editable.html" class="dropdown-item">Editable Table</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class="d-inline-block icons-sm mr-2"><i class="uim uim-document-layout-left"></i></div>Forms
                                                        <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-form">
                                                        <a href="form-elements.html" class="dropdown-item">Form Elements</a>
                                                        <a href="form-validation.html" class="dropdown-item">Form Validation</a>
                                                        <a href="form-advanced.html" class="dropdown-item">Form Advanced</a>
                                                        <a href="form-editors.html" class="dropdown-item">Form Editors</a>
                                                        <a href="form-uploads.html" class="dropdown-item">Form File Upload</a>
                                                        <a href="form-mask.html" class="dropdown-item">Form Mask</a>
                                                        <a href="form-summernote.html" class="dropdown-item">Summernote</a>
                                                    </div>
                                                </div>

                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-chart" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class="d-inline-block icons-sm mr-2"><i class="uim uim-chart-pie"></i></div>Charts
                                                        <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-chart">
                                                        <a href="charts-morris.html" class="dropdown-item">Morris</a>
                                                        <a href="charts-apex.html" class="dropdown-item">Apex</a>
                                                        <a href="charts-chartist.html" class="dropdown-item">Chartist</a>
                                                        <a href="charts-chartjs.html" class="dropdown-item">Chartjs</a>
                                                        <a href="charts-flot.html" class="dropdown-item">Flot</a>
                                                        <a href="charts-sparkline.html" class="dropdown-item">Sparkline</a>
                                                        <a href="charts-knob.html" class="dropdown-item">Jquery Knob</a>
                                                    </div>
                                                </div>

                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-maps" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class="d-inline-block icons-sm mr-2"><i class="uim uim-comment-plus"></i></div>Maps
                                                        <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-maps">
                                                        <a href="maps-google.html" class="dropdown-item">Google map</a>
                                                        <a href="maps-vector.html" class="dropdown-item">Vector map</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Extra pages <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-more">
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Authentication <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                                        <a href="auth-login.html" class="dropdown-item">Login</a>
                                                        <a href="auth-register.html" class="dropdown-item">Register</a>
                                                        <a href="auth-recoverpw.html" class="dropdown-item">Recover Password</a>
                                                        <a href="auth-lock-screen.html" class="dropdown-item">Lock Screen</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Utility <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                                        <a href="pages-starter.html" class="dropdown-item">Starter Page</a>
                                                        <a href="pages-maintenance.html" class="dropdown-item">Maintenance</a>
                                                        <a href="pages-comingsoon.html" class="dropdown-item">Coming Soon</a>
                                                        <a href="pages-timeline.html" class="dropdown-item">Timeline</a>
                                                        <a href="pages-gallery.html" class="dropdown-item">Gallery</a>
                                                        <a href="pages-faqs.html" class="dropdown-item">FAQs</a>
                                                        <a href="pages-pricing.html" class="dropdown-item">Pricing</a>
                                                        <a href="pages-404.html" class="dropdown-item">Error 404</a>
                                                        <a href="pages-500.html" class="dropdown-item">Error 500</a>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Layouts <div class="arrow-down"></div>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="topnav-layout">
                                                        <a href="layouts-vertical.html" class="dropdown-item">Vertical</a>
                                                        <a href="layouts-topbar-light.html" class="dropdown-item">Light Topbar</a>
                                                        <a href="layouts-topbar-dark.html" class="dropdown-item">Dark Topbar</a>
                                                        <a href="layouts-full-width.html" class="dropdown-item">Full width</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

    
            </header>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    
                    <!-- Page-Title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title mb-1">Dashboard</h4>
                                    <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">Welcome to Xoric Dashboard</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-settings-outline mr-1"></i> Settings
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-6">
                                                    <h5>Welcome Back !</h5>
                                                    <p class="text-muted">Xoric Dashboard</p>

                                                    <div class="mt-4">
                                                        <a href="#" class="btn btn-primary btn-sm">View more <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="assets/images/widget-img.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title mb-4">Monthy sale Report</h5>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">This month Sale</p>
                                                    <h4>$ 13,425</h4>
                                                </div>
                                                <div dir="ltr" class="ml-2">
                                                    <input data-plugin="knob" data-width="56" data-height="56" data-linecap=round data-displayInput=false
                                                    data-fgColor="#3051d3" value="56" data-skin="tron" data-angleOffset="56"
                                                    data-readOnly=true data-thickness=".17" />
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="text-muted">Sale status</p>
                                                    <h5 class="mb-0"> + 12 % <span class="font-size-14 text-muted ml-1">From previous period</span></h5>
                                                </div>

                                                <div class="align-self-end ml-2">
                                                    <a href="#" class="btn btn-primary btn-sm">View more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="form-inline float-right">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control form-control-sm datepicker-here" data-range="true"  data-multiple-dates-separator=" - " data-language="en" placeholder="Select Date" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="far fa-calendar font-size-12"></i></span>
                                                    </div>
                                                </div>
                                            </form>
                                            <h5 class="header-title mb-4">Sales Report</h5>
                                            <div id="yearly-sale-chart" class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-transparent p-3">
                                            <h5 class="header-title mb-0">Sales Status</h5>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="media my-2">
                                                    
                                                    <div class="media-body">
                                                        <p class="text-muted mb-2">Number of Sales</p>
                                                        <h5 class="mb-0">1,625</h5>
                                                    </div>
                                                    <div class="icons-lg ml-2 align-self-center">
                                                        <i class="uim uim-layer-group"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media my-2">
                                                    <div class="media-body">
                                                        <p class="text-muted mb-2">Sales Revenue </p>
                                                        <h5 class="mb-0">$ 42,235</h5>
                                                    </div>
                                                    <div class="icons-lg ml-2 align-self-center">
                                                        <i class="uim uim-analytics"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media my-2">
                                                    <div class="media-body">
                                                        <p class="text-muted mb-2">Average Price</p>
                                                        <h5 class="mb-0">$ 14.56</h5>
                                                    </div>
                                                    <div class="icons-lg ml-2 align-self-center">
                                                        <i class="uim uim-ruler"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media my-2">
                                                    <div class="media-body">
                                                        <p class="text-muted mb-2">Product Sold</p>
                                                        <h5 class="mb-0">8,235</h5>
                                                    </div>
                                                    <div class="icons-lg ml-2 align-self-center">
                                                        <i class="uim uim-box"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title mb-4">Social Source</h5>
                                            <div id="radial-chart" class="apex-charts"></div>

                                            <div class="text-center mt-3">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted"><i class="mdi mdi-circle text-primary mr-1"></i> Facebook</p>
                                                            <h5>$ 1,625</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted"><i class="mdi mdi-circle text-warning mr-1"></i> Twitter</p>
                                                            <h5>$ 1,504</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title">Recent Activity</h5>

                                            <div id="activity-chart" class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="float-right ml-2">
                                                <a href="#">View all</a>
                                            </div>
                                            <h5 class="header-title mb-4">Latest Transaction</h5>

                                            <div class="table-responsive">
                                                <table class="table table-centered table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Transaction ID</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">status</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">
                                                                <a href="#"># XO1345</a>
                                                            </th>
                                                            <td>Danny Johnson</td>
                                                            <td>26 Jan</td>
                                                            <td>
                                                                <div class="badge badge-soft-primary">Confirm</div>
                                                            </td>
                                                            <td>$124</td>
                                                            <td>
                                                                <div class="btn-group" role="group">
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                                                        <i class="mdi mdi-eye"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                        <i class="mdi mdi-pencil"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                        <i class="mdi mdi-trash-can"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <a href="#"># XO1346</a>
                                                            </th>
                                                            <td>Alvin Newton</td>
                                                            <td>21 Jan</td>
                                                            <td>
                                                                <div class="badge badge-soft-warning">Pending</div>
                                                            </td>
                                                            <td>$112</td>
                                                            <td>
                                                                <div class="btn-group" role="group">
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                                                        <i class="mdi mdi-eye"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                        <i class="mdi mdi-pencil"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                        <i class="mdi mdi-trash-can"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <a href="#"># XO1347</a>
                                                            </th>
                                                            <td>Bennie Perez</td>
                                                            <td>15 Jan</td>
                                                            <td>
                                                                <div class="badge badge-soft-primary">Confirm</div>
                                                            </td>
                                                            <td>$106</td>
                                                            <td>
                                                                <div class="btn-group" role="group">
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                                                        <i class="mdi mdi-eye"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                        <i class="mdi mdi-pencil"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                        <i class="mdi mdi-trash-can"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <a href="#"># XO1348</a>
                                                            </th>
                                                            <td>Steven Kwon</td>
                                                            <td>11 Jan</td>
                                                            <td>
                                                                <div class="badge badge-soft-primary">Confirm</div>
                                                            </td>
                                                            <td>$115</td>
                                                            <td>
                                                                <div class="btn-group" role="group">
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                                                        <i class="mdi mdi-eye"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                        <i class="mdi mdi-pencil"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                        <i class="mdi mdi-trash-can"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <a href="#"># XO1349</a>
                                                            </th>
                                                            <td>Bryan Roark</td>
                                                            <td>08 Jan</td>
                                                            <td>
                                                                <div class="badge badge-soft-danger">Cancel</div>
                                                            </td>
                                                            <td>$105</td>
                                                            <td>
                                                                <div class="btn-group" role="group">
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                                                        <i class="mdi mdi-eye"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                        <i class="mdi mdi-pencil"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                        <i class="mdi mdi-trash-can"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="mt-4">
                                                <ul class="pagination pagination-rounded justify-content-center mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <i class="mdi mdi-chevron-left"></i>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <i class="mdi mdi-chevron-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title mb-4">Revenue by Location</h5>

                                            <div id="usa-map"  style="height: 150px" class="mb-5"></div>

                                            <div class="table-responsive">
                                                <table class="table table-centered">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">California</th>
                                                            <td>$ 8,257</td>
                                                            <td>
                                                                <div dir="ltr" class="ml-2">
                                                                    <input data-plugin="knob" data-width="36" data-height="36" data-linecap=round data-displayInput=false
                                                                    data-fgColor="#3051d3" value="56" data-skin="tron" data-angleOffset="36"
                                                                    data-readOnly=true data-thickness=".2" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">New York</th>
                                                            <td>$ 7,253</td>
                                                            <td>
                                                                <div dir="ltr" class="ml-2">
                                                                    <input data-plugin="knob" data-width="36" data-height="36" data-linecap=round data-displayInput=false
                                                                    data-fgColor="#3051d3" value="42" data-skin="tron" data-angleOffset="36"
                                                                    data-readOnly=true data-thickness=".2" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="text-center">
                                                    <a href="#" class="btn btn-primary btn-sm">View more <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                        </div> <!-- container-fluid -->
                    </div>
                    <!-- end page-content-wrapper -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2020 © Xoric.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>










  
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Yii::t('app', Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>