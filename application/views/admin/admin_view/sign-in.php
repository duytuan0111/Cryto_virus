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
	<title>Cryto-Virus | Admin Dashboard</title>
	<!-- Vendor Bundle CSS -->
	<link rel="stylesheet" href="<?php  echo base_url() ?>public/public_admin/assets/css/vendor.bundle.css?ver=104">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php  echo base_url() ?>public/public_admin/assets/css/style.css?ver=104">
	
</head>

<body class="page-ath">
    
    <div class="page-ath-wrap">
        <div class="page-ath-content">
            <div class="page-ath-header">
                <a href="./" class="page-ath-logo"><img src="<?php echo base_url(); ?>public/assets/images/Coronavirus.png" srcset="<?php echo base_url(); ?>public/assets/images/Coronavirus.png 2x" alt="logo"></a>
            </div>
            <div class="page-ath-form">
                <h2 class="page-ath-heading">Sign in</h2>
                <?php 
                if (validation_errors()!='')
                {
                    ?>
                    <div class="alert alert-warning"><?php echo validation_errors(); ?></div>
                    <?php
                }

                if ($this->session->flashdata('msg_login_warning'))
                {
                    ?>
                    <div class="alert alert-warning text-center">
                      <?php 
                      echo $this->session->flashdata('msg_login_warning');
                      ?>
                  </div>  
                <?php } ?>

                <form action="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/login" method="post" id="admin_form_login">
                    <div class="input-item">
                        <input type="text" name="username" placeholder="Username" id="username" class="input-bordered" value ="<?php if(get_cookie('uusername_admmin')) { echo get_cookie('uusername_admmin');} ?>">
                    </div>
                    <div class="input-item">
                        <input type="password" name="password" placeholder="Password" class="input-bordered" value="<?php if(get_cookie('upassword_password')) { echo get_cookie('upassword_password');} ?>">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- <div class="input-item text-left">
                            <input class="input-checkbox input-checkbox-md" name="remember-me" id="remember-me" type="checkbox">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember me" name="remember_me" <?php if (get_cookie('uusername_admmin')) { ?> checked="checked" <?php } ?>>
                                    Remember Me
                                </label>
                            </div>
                        </div> -->
                        <!-- <div>
                            <a href="forgot.html">Forgot password?</a>
                            <div class="gaps-2x"></div>
                        </div> -->
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </form>
                <!-- <div class="sap-text"><span>Or Sign In With</span></div>
                <ul class="row guttar-20px guttar-vr-20px">
                    <li class="col"><a href="#" class="btn btn-outline btn-dark btn-facebook btn-block"><em class="fab fa-facebook-f"></em><span>Facebook</span></a></li>
                    <li class="col"><a href="#" class="btn btn-outline btn-dark btn-google btn-block"><em class="fab fa-google"></em><span>Google</span></a></li>
                </ul>
                <div class="gaps-2x"></div>
                <div class="gaps-2x"></div>
                <div class="form-note">
                    Don’t have an account? <a href="<?php echo base_url(); ?>admin/home/register_view"> <strong>Sign up here</strong></a>
                </div> -->
            </div>
            <div class="page-ath-footer">
                <ul class="footer-links">
                    <!-- <li><a href="regular-page.html">Privacy Policy</a></li>
                    <li><a href="regular-page.html">Terms</a></li> -->
                    <li>&copy; 2020 Cryto Virus.</li>
                </ul>
            </div>
        </div>
        <div class="page-ath-gfx" style="background-image: url(<?php echo base_url('public/assets/images/banner/home-3/01.jpg') ?>);">
           <div class="w-100 d-flex justify-content-center" >
               <div class="col-md-8 col-xl-5">
                   <img src="<?php  echo base_url() ?>public/assets/images/banner/home-3/01.png" alt="image">
               </div>
           </div>            
        </div>
    </div>

	<!-- JavaScript (include all script here) -->
   
	<script src="<?php  echo base_url() ?>public/public_admin/assets/js/jquery.bundle.js?ver=104"></script>
	<script src="<?php  echo base_url() ?>public/public_admin/assets/js/script.js?ver=104"></script>
    <script src="<?php echo base_url(); ?>public/public_admin/assets/js/jquery.validate.min.js"></script>
    <script src="<?php  echo base_url() ?>public/assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>public/admin/js/pages/admin-page-login.js"></script>
</body>
</html>
