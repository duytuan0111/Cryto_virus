<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.voidcoders.com/htmldemo/cryptomio/main-files/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Mar 2020 14:40:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Crypto-Virus | Login</title>
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


    <div class="login-register-wrapper">
        <div class="container">
            <div class="lr-box">
                <div class="row">
                 <div class="col-md-6">
                    <div class="lr-img">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>public/profile/assets/img/bg/login-reg.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="<?php echo base_url(); ?>home/login" method="post" id="page-login">

                        <div class="lr-form login-form">
                            <h3>Login Now!</h3>
                            

                            <?php if ($this->session->flashdata('msg_login_warning')) { ?>
                                <div class="alert alert-warning">
                                    <?php echo $this->session->flashdata('msg_login_warning'); ?>
                                </div>
                            <?php } ?>
                            <?php if ($this->session->flashdata('msg_update_stt_suc')) { ?>
                               <div class="alert alert-success"><?php echo $this->session->flashdata('msg_update_stt_suc'); ?></div>
                           <?php } ?>
                           <div class="crypto-form">
                            <div class="cfi">
                                <input type="text" name="username" id="user" placeholder="Username" value="<?php if(get_cookie('uusername_covid')) { echo get_cookie('uusername_covid');} ?>">
                            </div>
                            <div class="cfi">
                                <input type="password" name="password" id="password" placeholder="Password" value="<?php if(get_cookie('upassword_covid')) { echo get_cookie('upassword_covid');} ?>">
                            </div>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"  value="remember me" name="remember_me" <?php if (get_cookie('uusername_covid')) { ?> checked="checked" <?php } ?>>
                                Remember Me
                            </label>
                        </div>
                        <div class="needac-forgetpass">
                            <a class ="lfpass" href="<?php echo base_url(); ?>home/forgotpass_view">Forget Password ?</a>
                            <a class ="needacc" href="<?php echo base_url(); ?>home/register_view">Need Account ?</a>
                        </div>
                        <button type="submit" name="login" class="cfi-button">Login</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
</div>

<!-- Scripts -->
<!-- jQuery Plugin -->
<script src="<?php echo base_url(); ?>public/profile/assets/js/jquery-3.2.0.min.js"></script>
<script src="<?php echo base_url(); ?>public/profile/assets/js/jquery-ui.js"></script>
<!-- Main Counterup Plugin-->
<script src="<?php echo base_url(); ?>public/profile/assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url(); ?>public/profile/assets/js/countdown.js"></script>
<script src="<?php echo base_url(); ?>public/profile/assets/js/jquery.scrollUp.js"></script>
<script src="<?php echo base_url(); ?>public/profile/assets/js/jquery.waypoints.min.js"></script>
<!-- Chart JS Plugin-->
<script src="<?php echo base_url(); ?>public/profile/assets/js/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>public/profile/assets/js/ChartUtils.js"></script>
<!-- Metismenu Plugin-->
<script src="<?php echo base_url(); ?>public/profile/assets/dist/metismenu/metisMenu.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo base_url(); ?>public/profile/assets/js/bootstrap.min.js"></script>
<!-- Main Script -->
<script src="<?php echo base_url(); ?>public/profile/assets/js/graph-chart-activation.js"></script>
<script src="<?php echo base_url(); ?>public/profile/assets/js/theme.js"></script>
<script src="<?php  echo base_url() ?>public/assets/js/jquery.validate.min.js"></script>
<script src="<?php  echo base_url() ?>public/admin/page-login.js"></script>



</body>


<!-- Mirrored from demo.voidcoders.com/htmldemo/cryptomio/main-files/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Mar 2020 14:40:11 GMT -->
</html>
