<?php 
$login_covid_user = $this->session->get_userdata();
$this->session->set_userdata('_current_link', current_url());
if (!isset($login_covid_user['user_info_covid']) || !isset($login_covid_user['user_login_url']) || $login_covid_user['user_login_url']!=base_url())
{
 redirect('home/');
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.voidcoders.com/htmldemo/cryptomio/main-files/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Mar 2020 14:39:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Cryto - Virus | Covid-19</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">

    <!-- CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/profile/assets/css/bootstrap.min.css">
    <!-- Jquery ui CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/profile/assets/css/jquery-ui.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/profile/assets/css/font-awesome.min.css">
    <!-- Metismenu CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/profile/assets/dist/metismenu/metisMenu.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/profile/assets/css/animate.css">
    <!-- Main StyleSheet CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/profile/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/profile/assets/css/responsive.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>public/assets/images/x-icon/2.png">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .error
        {
            color:red !important;
            font-family:verdana, Helvetica !important;
        }
    </style>
</head>

<body>
    <div id="preloader"></div>

    <!-- Header Area -->
    <header class="cryptodash-header cdh-light">
        <nav class="navbar navbar-expand-lg cryptodash-nav">
            <a class="navbar-brand" href="<?php echo base_url() ?>">
                <div class="logo">
                    <img  src="<?php echo base_url(); ?>public/profile/assets/img/common/logo_55.png" alt="">
                </div>
            </a>
            <a id="sideNav-toggle" href="#"><span id="main_icon" class="fa fa-bars"></span></a>
            <div class="collapse navbar-collapse right-nav" id="navbarTogglerDemo02">
                
                <ul class="nav navbar-header-nav ml-auto crypto-user-btn">
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        <img class="img-circle" src="<?php echo base_url(); ?>public/profile/assets/img/avatar/user.png" alt="Jone Doe">
                        
                    </a>
                    <ul class="dropdown-menu animated flipInX pull-right admin-user">
                        <li>
                            <b class="user-display-name"><?php echo $login_covid_user['user_info_covid']['username'] ?></b>
                            <a href="#">Profile</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="<?php echo base_url(); ?>home/logout"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- /Header Area -->
