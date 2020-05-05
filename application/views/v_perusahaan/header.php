<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/open-iconic-bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/aos.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/jquery.timepicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/flaticon.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/icomoon.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/style.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url(); ?>c_perusahaan/HomePerusahaan">Jobpply</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>c_perusahaan/HomePerusahaan">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>c_perusahaan/c_profile_perusahaan/index/<?php echo $this->session->userdata('ses_id'); ?>">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>c_perusahaan/c_about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>c_perusahaan/c_contact">Contact</a>
                    </li>
                    <li class="nav-item cta mr-md-1">
                        <a class="nav-link" href="<?php echo base_url(); ?>c_perusahaan/new_post">Tambahkan Loker</a>
                    </li>
                    <li class="nav-item cta cta-colored mr-1">
                        <a class="nav-link" href="<?php echo base_url(); ?>c_perusahaan/c_list/index/<?php echo $this->session->userdata('ses_id'); ?>">List Loker</a>
                    </li>
                    <li class="nav-item cta cta-colored">
                        <a class="nav-link" href="<?php echo base_url(); ?>c_perusahaan/list_form/index/<?php echo $this->session->userdata('ses_id'); ?>">Info Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>Login/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>