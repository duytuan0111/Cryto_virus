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
                        <li class="mm-active">
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
                        <li>
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
                                <h3>Referral</h3>
                                <p>Introduce your friends through referral codes to build a healthy community together and repel the influence of Covid-19 globally</p>
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
                                <form class="crypto-form" action="#" method="post" id="page_pass">
                                    <div class="cfi">
                                        <label for="referral_link">Your referral code:</label>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <input type="text" name="referral_link" id="referral_link" value="<?php echo base_url(); ?>home/register?ref_code=<?php echo $login_covid_user['user_info_covid']['ref_code'] ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <a onclick="Copied_to()" data-original-title="Copy Addrees To Clipboard"><i class="fa fa-copy"></i> Copy</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </form>
                                <h3>Share with: &nbsp  <a href="http://www.facebook.com/sharer.php?u=<?php echo base_url(); ?>home/register?ref_code=<?php echo $login_covid_user['user_info_covid']['ref_code'] ?>"><i class="fa fa-2x fa-facebook-f"></i></a> <a href="http://www.twitter.com/share?url=<?php echo base_url(); ?>home/register?ref_code=<?php echo $login_covid_user['user_info_covid']['ref_code'] ?>">&nbsp  <i class="fa fa-2x fa-twitter"></i></a>&nbsp <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url(); ?>home/register?ref_code=<?php echo $login_covid_user['user_info_covid']['ref_code'] ?>"><i class="fa fa-2x fa-linkedin"></i></a>&nbsp <a href="https://plus.google.com/share?url=<?php echo base_url(); ?>home/register?ref_code=<?php echo $login_covid_user['user_info_covid']['ref_code'] ?>"><i class="fa fa-2x fa-google"></i></a></h3>
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
<script type="text/javascript">
    function Copied_to() {
        var copyText = document.getElementById("referral_link");
      copyText.select();
      document.execCommand("copy");
      alert("Copied referral link : " + copyText.value);
  }
</script>




















