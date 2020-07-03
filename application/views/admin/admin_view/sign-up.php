<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Softnio">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Fully featured and complete ICO Dashboard template for ICO backend management.">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="<?php  echo base_url() ?>public/public_admin/images/favicon.png">
	<!-- Site Title  -->
	<title>TokenWiz - ICO User Dashboard Admin Template</title>
	<!-- Vendor Bundle CSS -->
	<link rel="stylesheet" href="<?php  echo base_url() ?>public/public_admin/assets/css/vendor.bundle.css?ver=104">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php  echo base_url() ?>public/public_admin/assets/css/style.css?ver=104">
	
</head>

<body class="page-ath">
    
    <div class="page-ath-wrap">
        <div class="page-ath-content">
            <div class="page-ath-header">
                <a href="./" class="page-ath-logo"><img src="<?php  echo base_url() ?>public/public_admin/images/logo.png" srcset="images/logo2x.png 2x" alt="logo"></a>
            </div>
            <div class="page-ath-form">
                <h2 class="page-ath-heading">Sign up <small>Create New TokenWiz Account</small></h2>
                <?php 
                if (validation_errors()!='')
                {
                    ?>
                    <div class="alert alert-warning"><?php echo validation_errors(); ?></div>
                    <?php
                }

                if ($this->session->flashdata('msg_check_email'))
                {
                    ?>
                    <div class="alert alert-warning text-center">
                      <?php 
                      echo $this->session->flashdata('msg_check_email');
                    ?>
                  </div>  
                <?php } ?>
                <form action="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/register" method="post" onsubmit="return checkForm(this)">
                    <input type="hidden" name="id" id="id">
                    <div class="input-item">
                        <input type="text" name="fullname" placeholder="Your Name" class="input-bordered">
                    </div>
                    <div class="input-item">
                        <input type="text" name= "username" placeholder="Username" class="input-bordered">
                    </div>
                    <div class="input-item">
                        <input type="password" name="password" placeholder="Password" class="input-bordered">
                    </div>
                    <div class="input-item">
                        <input type="password" name="password_confirm" placeholder="Repeat Password" class="input-bordered">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                </form>
    
                <div class="gaps-2x"></div>
                <div class="gaps-2x"></div>
                <div class="form-note">
                    Already have an account ? <a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/"> <strong>Sign in instead</strong></a>
                </div>
            </div>
            <div class="page-ath-footer">
                <ul class="footer-links">
                    <li><a href="regular-page.html">Privacy Policy</a></li>
                    <li><a href="regular-page.html">Terms</a></li>
                    <li>&copy; 2018 TokenWiz.</li>
                </ul>
            </div>
        </div>
        <div class="page-ath-gfx">
           <div class="w-100 d-flex justify-content-center">
               <div class="col-md-8 col-xl-5">
                   <img src="<?php  echo base_url() ?>public/public_admin/images/ath-gfx.png" alt="image">
               </div>
           </div>            
        </div>
    </div>

	<!-- JavaScript (include all script here) -->
	<script src="<?php  echo base_url() ?>public/public_admin/assets/js/jquery.bundle.js?ver=104"></script>
	<script src="<?php  echo base_url() ?>public/public_admin/assets/js/script.js?ver=104"></script>
     <script src="<?php echo base_url(); ?>public/public_admin/assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>public/public_user/assets/js/additional-methods.min.js"></script>
</body>
</html>
