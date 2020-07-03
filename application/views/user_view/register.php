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
    <title>Crypto-Virus | Register</title>
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




<body class="nk-body body-wider bg-light-alt">

    <div class="nk-wrap">

        <main class="nk-pages nk-pages-centered bg-theme">
            <div class="ath-container">
                <div class="ath-header text-center">
                    <a href="<?php echo base_url(); ?>" class="ath-logo"><img src="<?php echo base_url(); ?>public/assets/images/logo_login.png" srcset="<?php echo base_url(); ?>public/assets/images/logo_login.png 2x" alt="logo"></a>
                </div>
                <div class="ath-body">
                    <h5 class="ath-heading title">Sign Up</h5>
                    <?php 
                    if (validation_errors()!='')
                    {
                        ?>
                        <div class="alert alert-warning"><?php echo validation_errors(); ?></div>
                        <?php
                    }
                    if ($this->session->flashdata('msg_update_stt_fail'))
                    {
                        ?>
                        <div class="alert alert-warning"><?php echo $this->session->flashdata('msg_update_stt_fail'); ?></div>
                        <?php
                    }
                    if ($this->session->flashdata('msg_link_expire'))
                    {
                        ?>
                        <div class="alert alert-warning"><?php echo $this->session->flashdata('msg_link_expire'); ?></div>
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
                  <?php if ($this->session->flashdata('msg_check_username')) { ?>
                    <div class="alert alert-warning text-center">
                        <?php 
                        echo $this->session->flashdata('msg_check_username');
                        ?>
                    </div>
                <?php } ?>

                <form action="<?php echo base_url();?>home/register" id="page-register" method="post">
                    <div class="field-item">
                        <div class="field-wrap">
                            <input type="text" name="email" class="input-bordered" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="field-item">
                        <div class="field-wrap">
                            <input type="text" name="username" class="input-bordered" placeholder="Username">
                        </div>
                    </div>
                    <div class="field-item">
                        <div class="field-wrap">
                            <input type="password" id="password" name="password" class="input-bordered" placeholder="Password">
                        </div>
                    </div>
                    <div class="field-item">
                        <div class="field-wrap">
                            <input type="password" id="password_confirm" name="password_confirm" class="input-bordered" placeholder="Repeat Password">
                        </div>
                    </div>
                    <div class="field-item">
                        <div class="field-wrap">
                            <input type="text" id="ref_code" name="ref_code" class="input-bordered" placeholder="Referral Code" value="<?php if (isset($_GET["ref_code"])) { echo $_GET["ref_code"]; } else {echo "";} ?>">
                        </div>
                    </div>
                    <button type="submit" style="margin-left: 86px !important;" class="btn btn-primary btn-block btn-md">Sign Up</button>
                </form>

            </div>
            <div class="ath-note text-center tc-light">
                Already have an account? <a href="<?php echo base_url(); ?>home/login_view"> <strong>Sign in here</strong></a>
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
<script src="<?php  echo base_url() ?>public/assets/js/jquery.validate.min.js"></script>
<script src="<?php  echo base_url() ?>public/admin/page-register.js"></script>

<script>
    function checkForm(form)
    {
        if(!form.terms.checked) {
          alert("Please indicate that you accept the Terms and Conditions");
          form.terms.focus();
          return false;
      }
      return true;
  }  
</script>
</body>
</html>
