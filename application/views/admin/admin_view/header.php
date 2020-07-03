<?php 
$login_ppos_admin_covid_covid = $this->session->get_userdata();
$this->session->set_userdata('_current_link', current_url());
if (!isset($login_ppos_admin_covid_covid['user_login_admin_covid']) || !isset($login_ppos_admin_covid_covid['user_login_url_admin']) || $login_ppos_admin_covid_covid['user_login_url_admin']!=base_url())
{
 redirect('admin/CrytoVirusAdmin_1278792_263840balance_login29104662');
}
?>
<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Softnio">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Fully featured and complete ICO Dashboard template for ICO backend management.">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>public/assets/images/x-icon/2.png">
	<!-- Site Title  -->
	<title>Cryto-Virus | Admin</title>
	<!-- Vendor Bundle CSS -->
	<link rel="stylesheet" href="<?php  echo base_url() ?>public/public_admin/assets/css/vendor.bundle.css?ver=104">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php  echo base_url() ?>public/public_admin/assets/css/style.css?ver=104">
    <style type="text/css">
        .error
        {
            color:red !important;
            font-family:verdana, Helvetica !important;
        }
    </style>
    
</head>

<body class="page-user">
 
    <div class="topbar-wrap">
        <div class="topbar is-sticky" style="background-color: #06264d">
            <div class="container" >
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="topbar-nav d-lg-none">
                        <li class="topbar-nav-item relative">
                            <a class="toggle-nav" href="#">
                                <div class="toggle-icon">
                                    <span class="toggle-line"></span>
                                    <span class="toggle-line"></span>
                                    <span class="toggle-line"></span>
                                    <span class="toggle-line"></span>
                                </div>
                            </a>
                        </li><!-- .topbar-nav-item -->
                    </ul><!-- .topbar-nav -->
                    <a class="topbar-logo" href="./">
                     <img src="<?php  echo base_url() ?>public/assets/images/logo-virus.png" srcset="<?php  echo base_url() ?>public/assets/images/logo-virus.png 2x" alt="logo">
                 </a>
                 <ul class="topbar-nav">
                    <li class="topbar-nav-item relative">
                        <span class="user-welcome d-none d-lg-inline-block">Welcome! <?php echo $login_ppos_admin_covid_covid['user_login_admin_covid']['name'] ?></span>
                        <a class="toggle-tigger user-thumb" href="#"><em class="ti ti-user"></em></a>
                        <div class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right user-dropdown">
                            <div class="user-status">
                                <h6 class="user-status-title"><?php if ($login_ppos_admin_covid_covid['user_login_admin_covid']['role'] == "1") {
                                    echo "Welcome, Admin Cryto Virus";
                                } else { echo "Welcome, Manager Ctyto Virus"; } ?></h6>
                                <!-- <div class="user-status-balance"><?php echo $login_ppos_admin_covid_covid['user_login_admin_covid']['bot_num'] ?> <small>TWZ</small></div> -->
                            </div>
                            
                            <ul class="user-links bg-light">
                                <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/setting"><i class="ti ti-settings"></i>Setting</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/logout"><i class="ti ti-power-off"></i>Logout</a></li>
                            </ul>
                        </div>
                    </li><!-- .topbar-nav-item -->
                </ul><!-- .topbar-nav -->
            </div>
        </div><!-- .container -->
    </div><!-- .topbar -->
    <div class="navbar">
        <div class="container">
            <div class="navbar-innr">
                <ul class="navbar-menu">
                    <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/home"><i class="fas fa-users"></i>&nbsp; List User</a></li>
                    <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/list_admin"><i class="fa fa-users-cog"></i>&nbsp; List Admin User</a></li>
                    <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/transactions"><i class="fa fa-exchange-alt"></i>&nbsp; Transactions</a></li>
                    <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/withdraw_ppos"><i class="fa fa-dollar-sign"></i>&nbsp;  Withdraw Cryto Virus</a></li>
                    <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/news"><i class="far fa-newspaper"></i>&nbsp;  News</a></li>
                     <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/cost"><i class="fas fa-pencil-alt"></i>&nbsp; Change Cost</a></li>

                </ul>
                <ul class="navbar-btns">
                    <li><a href="#" class="btn btn-sm btn-outline btn-light"><em class="text-primary ti ti-files"></em><span>List KYC</span></a></li>
                    <li class="d-none"><span class="badge badge-outline badge-success badge-lg"><em class="text-success ti ti-files mgr-1x"></em><span class="text-success">List KYC/span></span></li>
                </ul>
            </div><!-- .navbar-innr -->
        </div><!-- .container -->
    </div><!-- .navbar -->
    </div><!-- .topbar-wrap -->