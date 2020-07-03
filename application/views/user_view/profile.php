<?php require_once APPPATH.'/views/user_view/header.php' ?>
<!-- /Header Area -->
<!-- Dashboard Full Area -->
<div class="cryptodash-full-wrapper">
    <div class="crypto-dash-sidenav">
        <div id="sideNavWrapper" class="active">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <nav class="sidebar-nav">
                    <ul class="metismenu" id="menu3">
                        <li>
                            <a href="<?php echo base_url(); ?>home/profile">
                                <i class="fa fa-tachometer" aria-hidden="true"></i>
                                <span class="msm-text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>home/buy">
                                <i class="fa fa-dollar" aria-hidden="true"></i>
                                <span class="msm-text">Buy NCOR</span>
                            </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url(); ?>home/trans/<?php echo $login_covid_user['user_info_covid']['id'] ?>">
                                <i class="fa fa-exchange" aria-hidden="true"></i>
                                <span class="msm-text">Transaction</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>home/referral">
                                <i class="fa fa-link" aria-hidden="true"></i>
                                <span class="msm-text">Referral</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>home/info">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="msm-text">Account</span>
                            </a>
                        </li>
                        <li class="mm-active">
                            <a href="<?php echo base_url(); ?>home/profile_view">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <span class="msm-text">Security</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>home/logout">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                <span class="msm-text">Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /Sidebar -->
            <!-- /Sidebar -->

            <!-- Page content -->
            <div id="page-content-wrapper" class="dashboard-content">
              <!-- Keep all page content within the page-content inset div! -->
              <div class="page-content inset">
                <div class="crypto-container">


                    <div class="row">
                        <div class="col-xl-8">
                            <div class="crypto-form-wrapper">
                                <h3>Update Your Password</h3>
                                <?php if ($this->session->flashdata('msg_check_pass')) { ?>
                                    <div class="alert alert-warning text-center">
                                        <?php echo $this->session->flashdata('msg_check_pass'); ?>
                                    </div>
                                <?php } ?>
                                <?php if ($this->session->flashdata('msg_update_suc')) { ?>
                                    <div class="alert alert-success text-center">
                                        <?php echo $this->session->flashdata('msg_update_suc'); ?>
                                    </div>
                                <?php } ?>
                                <?php if ($this->session->flashdata('msg_update_fail')) { ?>
                                    <div class="alert alert-warning text-center">
                                        <?php echo $this->session->flashdata('msg_update_fail'); ?>
                                    </div>
                                <?php } ?>
                                <form class="crypto-form" action="<?php echo base_url(); ?>home/update_password" method="post" id="page_pass">
                                    <input type="hidden" name="email" value="<?php echo $login_covid_user['user_info_covid']['email'] ?>">
                                    <div class="cfi">
                                        <label for="old_password">Old Password</label>
                                        <input type="password" name="old_password" id="old_password" placeholder="Enter your old password">
                                    </div>
                                    <div class="cfi">
                                        <label for="new_password">New Password</label>
                                        <input type="password" name="new_password" id="new_password" placeholder="Enter your new password">
                                    </div>
                                    <div class="cfi">
                                        <label for="password_confirm">Confirm New Password</label>
                                        <input type="password" name="password_confirm" id="password_confirm"
                                        placeholder="Enter your new password again to confirm it">
                                    </div>
                                    <button type="submit" name="submit_pass" class="cfi-button">Update Password</button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
        <!-- /Page content -->
    </div>
</div>
</div>
<!-- Dashboard Full Area -->
<?php require_once APPPATH.'/views/user_view/footer.php' ?>




















