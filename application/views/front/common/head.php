<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#008fe2', 'colorSecondary': '#2d529f', 'colorTertiary': '#3aabdd', 'colorQuaternary': '#242424'}">
    <head>
        <!-- meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="" />
        <meta name="description" content="">
        <meta name="author" content="cloudnextbd.com">
        
        <title><?=$title?> | domain</title> 

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?=base_url()?>assets/img/logo/fv.png" type="image/x-icon" />

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/animate/animate.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/magnific-popup/magnific-popup.min.css">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/theme.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/theme-elements.css">
        <!-- <link rel="stylesheet" href="<?=base_url()?>assets/css/theme-blog.css"> -->
        <!-- <link rel="stylesheet" href="<?=base_url()?>assets/css/theme-shop.css"> -->

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/rs-plugin/css/layers.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/vendor/rs-plugin/css/navigation.css">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/skins/skin-medical.css">       
        <!-- <script src="<?=base_url()?>assets/master/style-switcher/style.switcher.localstorage.js"></script>  -->

        <!-- Demo CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/demos/demo-medical.css">

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css">

        <!-- Head Libs -->
        <script src="<?=base_url()?>assets/vendor/modernizr/modernizr.min.js"></script>
    </head>
    <body>
        <div class="body">
            <header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 35, 'stickySetTop': '-35px', 'stickyChangeLogo': false}">
                <div class="header-body">
                    <div class="header-top header-top header-top-style-3 header-top-custom">
                        <div class="container">
                            <nav class="header-nav-top pull-right">
                                <ul class="nav nav-pills">
                                    <li class="hidden-xs">
                                        <span class="ws-nowrap"><i class="icon-location-pin icons"></i><?=$this->settings->info->add?></span>
                                    </li>
                                    <li class="hidden-xs">
                                        <span class="ws-nowrap"><i class="icon-envelope-open icons"></i> <a class="text-decoration-none" href="<?=$this->settings->info->mail1?>"><?=$this->settings->info->mail1?></a></span>
                                    </li>
                                    <li>
                                        <span class="ws-nowrap"><i class="icon-call-out icons"></i></i> <?=$this->settings->info->phn1?></span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-logo">
                                    <a href="<?=base_url()?>">
                                        <img alt="Surgicare" width="200" src="<?=base_url()?>assets/img/logo/logo4.png">
                                    </a>
                                </div>
                            </div>
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-nav pt-xs">
                                        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                            <nav>
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li class="<?php if ($title == 'Home') echo "active"; ?>dropdown-full-color dropdown-secondary">
                                                        <a href="<?=base_url()?>">
                                                            Home
                                                        </a>
                                                    </li>
                                                    <li class="<?php if ($title == 'About us') echo "active"; ?>dropdown-full-color dropdown-secondary">
                                                        <a href="<?=site_url('about_us')?>">
                                                            About Us
                                                        </a>
                                                    </li>
                                                    <li class="<?php if ($title == 'Services' || $title == 'Services Details') echo "active"; ?>dropdown-full-color dropdown-secondary">
                                                        <a href="<?=site_url('services')?>">
                                                            Our Services
                                                        </a>
                                                    </li>
                                                    <li class="<?php if ($title == 'Departments' || $title == 'Departments Details') echo "active"; ?>dropdown-full-color dropdown-secondary">
                                                        <a href="<?=site_url('departments')?>">
                                                            Our Departments
                                                        </a>
                                                    </li>
                                                    <li class="<?php if ($title == 'Doctors' || $title == 'Doctors Profile') echo "active"; ?>dropdown-full-color dropdown-secondary">
                                                        <a href="<?=site_url('doctors')?>">
                                                            Our Doctors
                                                        </a>
                                                    </li>
                                                    <li class="<?php if ($title == 'Resource') echo "active"; ?>dropdown-full-color dropdown-secondary">
                                                        <a href="<?=site_url('resource')?>">
                                                            Resources
                                                        </a>
                                                    </li>
                                                    <li class="<?php if ($title == 'Faqs') echo "active"; ?>dropdown-full-color dropdown-secondary">
                                                        <a href="<?=site_url('faqs')?>">
                                                            faqs
                                                        </a>
                                                    </li>
                                                    <li class="<?php if ($title == 'Contact') echo "active"; ?>dropdown-full-color dropdown-secondary">
                                                        <a href="<?=site_url('contact')?>">
                                                            Contact
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div role="main" class="main">