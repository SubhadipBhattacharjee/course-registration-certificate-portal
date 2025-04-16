<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>APJ | <?php echo $title; ?></title>


    <!-- ********|| STYLESHEETS STARTS ||******** -->
<link href="<?php echo base_url();?>project/html/assets/lib/bootstrap4/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>project/html/assets/css/animate.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>project/html/assets/lib/fontawesome5-all/css/all.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url();?>project/html/assets/lib/owl-carousel/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>project/html/assets/lib/owl-carousel/owl.theme.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url();?>project/html/assets/lib/fancybox/jquery.fancybox.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>project/html/assets/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>project/html/assets/css/responsive.css" rel="stylesheet" type="text/css">
<!-- Toastr CSS/JS File --> 
<link rel="stylesheet" href="<?php echo base_url();?>project/admin/plugins/toastr/toastr.min.css" type="text/css">

<!-- ********|| STYLESHEETS ENDS ||******** -->

    <!-- ********|| STYLESHEETS STARTS ||******** -->
    <style>
        :root {
            --primaryColor: #4677bb;
            --secondaryColor: #e27e27;
            --thirdColor: #efefef;
            --textColor: #f8fbfd;
            --lightColor: #f6f5f7;
        }

        img {
            max-width: 100%;
        }

        .preloader {
            position: fixed;
            width: 100%;
            height: 100%;
            text-align: center;
            z-index: 999999;
            background-color: #fff;
            opacity: 1;
            visibility: visible;
            transition: all 0.3s ease;
        }

        .preloader.inactive {
            opacity: 0;
            visibility: hidden;
        }

        .preloader:after {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
            margin-right: -.25em
        }

        .preloader:before {
            content: '';
            display: block;
            height: 100%;
        }

        .preloader .content {
            box-sizing: border-box;
            animation: fadein 0.5s 1s linear forwards;
            display: inline-block;
            vertical-align: middle;
            text-align: left;
            font-size: 0;
            opacity: 0
        }

        .loader-line-mask {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 30px;
            height: 60px;
            margin-left: -30px;
            margin-top: -30px;
            overflow: hidden;
            transform-origin: 30px 30px;
            -webkit-mask-image: -webkit-linear-gradient(top, var(--primaryColor), rgba(0, 0, 0, 0));
            mix-blend-mode: hard-light;
            opacity: .8
        }

        .loader-line-mask .loader-line {
            width: 60px;
            height: 60px;
            border-radius: 50%
        }

        .loader-line-mask.one {
            animation: rotate 1.6s infinite linear
        }

        .loader-line-mask.one .loader-line {
            box-shadow: inset 0 0 0 8px var(--primaryColor);
        }

        .loader-line-mask.two {
            animation: rotate 1.6s 0.8s infinite linear
        }

        .loader-line-mask.two .loader-line {
            box-shadow: inset 0 0 0 8px var(--primaryColor);
        }

        @keyframes rotate {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes fadein {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }
    </style>
    <link rel="shortcut icon" href="<?php echo base_url();?>project/html/assets/img/favicon.png" type="image/x-icon">
    <!-- ********|| STYLESHEETS ENDS ||******** -->
    <!--[if gte IE 9]
<style type="text/css"> .gradient{filter: none;}</style>
<![endif]-->
</head>

<body>
    <div class="preloader">
        <div class="content">
            <div class="loader-circle"></div>
            <div class="loader-line-mask one">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-mask two">
                <div class="loader-line"></div>
            </div>
        </div>
    </div>


    <!-- ********|| HEADER START ||******** -->
    <header class="header">
        <div class="top-heder">
            <div class="container">
                <div class="brand">
                    <a href="<?php echo base_url();?>" class="logo">
                        <img class="img-fluid" src="<?php echo base_url();?>project/html/assets/images/logo.jpg" alt="" title="Brand">
                    </a>
                </div>
                <div class="search">
                    <div class="brand-name">APJ Abdul Kalam Youth Computer Education</div>
                    <div class="sub-text">LEARN TODAY, LEAD TOMORROW</div>
                </div>
                <div class="hearder-options">
                    <div class="my-account">

                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="menu-link dropdown-toggle" data-toggle="dropdown"><i class="fad fa-fw fa-user"></i><span>Log In</span></a>
                                            <div class="dropdown-menu">
                                                <ul class="dropdown-menu-list">
                                                    <li><a href="<?php echo base_url('admin'); ?>" class="dropdown-menu-item" target="_blank">Admin</a></li>
                                                    <li><a href="<?php echo base_url('partner'); ?>" class="dropdown-menu-item" target="_blank">Franchise</a></li>
                                                </ul>
                                            </div>
                                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-navigation">
            <div class="container">
                <div class="navigation">
                    <div class="responsive-action">
                        <a href="javascript:void(0)" class="btn-menu"><i class="far fa-fw fa-bars"></i></a>
                    </div>
                    <div class="navigation-wrap">
                        <ul class="navigation-menu">
                            <li class="<?= ($this->uri->segment(1)=='') ? 'active' : NULL ; ?>"><a href="<?php echo base_url();?>" class="menu-link"><i
                                        class="fad fa-fw fa-home"></i><span>HOME</span></a></li>
                            <li class="<?= ($this->uri->segment(1)=='about-us') ? 'active' : NULL ; ?>"><a href="<?php echo base_url('about-us');?>" class="menu-link"><i
                                        class="fad fa-fw fa-users"></i><span>ABOUT US</span></a></li>
                            <li class="<?= ($this->uri->segment(1)=='offered-courses') ? 'active' : NULL ; ?>"><a href="<?php echo base_url();?>offered-courses" class="menu-link"><i
                                        class="fad fa-fw fa-graduation-cap"></i><span>Courses</span></a></li>


                                        <li class="dropdown">
                                            <a href="javascript:void(0)" class="menu-link dropdown-toggle" data-toggle="dropdown"><i class="fad fa-fw fa-user-graduate"></i><span>Student Corner</span></a>
                                            <div class="dropdown-menu">
                                                <ul class="dropdown-menu-list">
                                                    <li><a href="<?php echo base_url('student-registration');?>" class="dropdown-menu-item">New Registration</a></li>
                                                    <li><a href="<?php echo base_url('studens/view-profile');?>" class="dropdown-menu-item">View Profile</a></li>
                                                    <li><a href="<?php echo base_url('students/view-result');?>" class="dropdown-menu-item">View Result</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        
                           


                            <li class="<?= ($this->uri->segment(1)=='franchise') ? 'active' : NULL ; ?>"><a href="<?php echo base_url('franchise'); ?>" class="menu-link"><i
                                        class="fad fa-fw fa-user-crown"></i><span>Franchise</span></a></li>
                            <li class="<?= ($this->uri->segment(1)=='training-centre') ? 'active' : NULL ; ?>"><a href="<?php echo base_url();?>training-centre" class="menu-link"><i
                                        class="fad fa-fw fa-university"></i><span>Study Center</span></a></li>
                            <li class="<?= ($this->uri->segment(1)=='image-gallery') ? 'active' : NULL ; ?>"><a href="<?php echo base_url();?>image-gallery" class="menu-link">
                                        <i class="fad fa-fw fa-images"></i><span>Gallery</span></a></li>
                            <li class="<?= ($this->uri->segment(1)=='contact-us') ? 'active' : NULL ; ?>"><a href="<?php echo base_url('contact-us');?>" class="menu-link"><i
                                        class="fad fa-fw fa-address-card"></i><span>Contact us</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-overlay"></div>
    </header>
    <!-- ********|| HEADER ENDS ||******** -->