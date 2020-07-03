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
    <title>Crypt-Virus | Forgot Password</title>
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/staking/assets/css/vendor.bundle.css?ver=192">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/staking/assets/css/style.css?ver=192" id="changeTheme">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/staking/assets/css/theme.css?ver=192">




</head>



<body class="nk-body body-wider bg-light-alt">

    <div class="nk-wrap">

        <main class="nk-pages nk-pages-centered bg-theme">
            <div class="ath-container">
                <div class="ath-header text-center">
                    <a href="<?php echo base_url(); ?>home/ " class="ath-logo"><img src="<?php echo base_url(); ?>public/assets/images/logo_login.png" srcset="<?php echo base_url(); ?>public/assets/images/logo_login.png 2x" alt="logo"></a>
                </div>
                <?php if ($this->session->flashdata('msg_link_expire')) { ?>

                   <br/>
                   <div class="alert alert-info text-center">The link does not exist or has expired</div>
               <?php } ?>
               <?php  if($this->session->flashdata('msg_update_stt_fail')) { ?>
                <div class="alert alert-warning text-center">
                  <?php 
                  echo $this->session->flashdata('msg_update_stt_fail');
                  ?>
              </div>
          <?php } ?>
          <?php if ($this->session->flashdata('msg_reset_pass_succ')) { ?>
            <div class="alert alert-success text-center">
                <?php echo $this->session->flashdata('msg_reset_pass_succ') ?>
            </div>
        <?php } ?>
        <?php if (!($this->session->flashdata('msg_link_expire'))) { ?>
            <div class="ath-body">
                <h5 class="ath-heading title">Reset Pasword</h5>
                <form action="" method="post" id="form_user">

                    <div class="field-item">
                        <div class="field-wrap">
                            <input type="password" class="input-bordered" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="field-item">
                        <div class="field-wrap">
                            <input type="password" class="input-bordered" name="password_confirm" id="password_confirm" placeholder="Repeat Password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-md">Reset</button>
                </form>


            </div>
        <?php } ?>


    </div>
</main>

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
<script src="<?php  echo base_url() ?>public/admin/page-reset-user.js"></script>
</body>
</html>
