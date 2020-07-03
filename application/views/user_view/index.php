    <?php require_once APPPATH.'/views/user_view/header.php' ?>
    <!-- Dashboard Full Area -->
    <div class="cryptodash-full-wrapper">
        <div class="crypto-dash-sidenav">
            <div id="sideNavWrapper" class="active">
                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <nav class="sidebar-nav">
                        <ul class="metismenu" id="menu3">
                            <li class="mm-active">
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
                            <li>
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
                <!-- Page content -->
                <div id="page-content-wrapper" class="dashboard-content">
                  <!-- Keep all page content within the page-content inset div! -->
                  <div class="page-content inset">
                    <div class="crypto-container">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="crypto-overview-wrapper">
                                    <h2 class="crypto-stitle">Overview</h2>
                                    <div class="crypto-overview">
                                        <div class="crypto-current-balance">
                                            <span>Your Current Balance</span>
                                            <h3 class="ccb">$<?php echo $login_covid_user['user_info_covid']['tokens_number'] ?></h3>
                                            <a href="<?php echo base_url(); ?>home/buy" class="btn-style-a">Buy More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="crypto-wallet">
                                    <h2 class="crypto-stitle">Wallet</h2>
                                    
                                    <script type="text/javascript">
                                        baseUrl = "https://widgets.cryptocompare.com/";
                                        var scripts = document.getElementsByTagName("script");
                                        var embedder = scripts[ scripts.length - 1 ];
                                        (function (){
                                            var appName = encodeURIComponent(window.location.hostname);
                                            if(appName==""){appName="local";}
                                            var s = document.createElement("script");
                                            s.type = "text/javascript";
                                            s.async = true;
                                            var theUrl = baseUrl+'serve/v1/coin/multi?fsyms=BTC,ETH,XMR,LTC,DASH&tsyms=BTC,USD';
                                            s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                            embedder.parentNode.appendChild(s);
                                        })();
                                    </script>


                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-7">
                             <div class="transaction-status">
                                <h2 class="crypto-stitle">Transaction Status</h2>
                                <div class="transaction-status-pie">
                                    <canvas id="pie1" data-p1value="25, 25, 15, 35" data-p1label="In Progeress, In Pending, Cancelled, Completed" data-p1color="#372CC8, #FFA726, #E91E63, #2ACD72" width="420" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">

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
