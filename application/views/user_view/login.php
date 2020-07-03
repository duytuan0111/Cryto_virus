<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>public/assets/images/x-icon/2.png">
    <!-- Site Title  -->
    <title>Crypto-Virus | Login</title>
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/staking/assets/css/vendor.bundle.css?ver=192">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/staking/assets/css/style.css?ver=192" id="changeTheme">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/staking/assets/css/theme.css?ver=192">
    <style type="text/css">
        .error
        {
            color:red;
            font-family:verdana, Helvetica;
        }
    </style>
</head>



<body class="nk-body body-wider bg-light-alt" >

    <div class="nk-wrap">

        <main class="nk-pages nk-pages-centered bg-theme">
            <div class="ath-container">
                 <div class="ath-header text-center">
                    <a href="<?php echo base_url(); ?>" class="ath-logo"><img src="<?php echo base_url(); ?>public/assets/images/logo_login.png" srcset="<?php echo base_url(); ?>public/assets/images/logo_login.png 2x" alt="logo"></a>
                </div>
                <div class="ath-body">
                <h5 class="ath-heading title">Sign in</h5>
                <?php 
                if (validation_errors()!='')
                {
                    ?>
                    <div class="alert alert-warning"><?php echo validation_errors(); ?></div>
                    <?php
                }
                if ($this->session->flashdata('msg_update_stt_suc'))
                {
                    ?>
                    <div class="alert alert-success"><?php echo $this->session->flashdata('msg_update_stt_suc'); ?></div>
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

              <form action="<?php echo base_url(); ?>home/login" method="post" id="page-login">
                <div class="field-item">
                    <div class="field-wrap">
                        <input type="text" name="username" class="input-bordered" placeholder="Username" value="<?php if(get_cookie('uusername_covid')) { echo get_cookie('uusername_covid');} ?>">
                    </div>
                </div>
                <div class="field-item">
                    <div class="field-wrap">
                        <input type="password" name="password" class="input-bordered" placeholder="Password" value="<?php if(get_cookie('upassword_covid')) { echo get_cookie('upassword_covid');} ?>">
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center pdb-r">
                    <div class="field-item pb-0">
                       <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember me" name="remember_me" <?php if (get_cookie('uusername_covid')) { ?> checked="checked" <?php } ?>>
                            Remember Me
                        </label>
                    </div>
                </div>
                <div class="forget-link fz-6">
                    <a href="<?php echo base_url(); ?>home/forgotpass_view">Forgot password?</a>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-md btn-sign-in">Sign In</button>
        </form>



    </div>
    <div class="ath-note text-center tc-light">
        Don’t have an account? <a href="<?php echo base_url(); ?>home/register_view"> <strong>Sign up here</strong></a>
    </div>
</div>
</main>

</div>
<!-- <div class="preloader"><span class="spinner spinner-round"></span></div> -->

<!-- JavaScript -->
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
</html>
