        <?php require_once APPPATH.'/views/user_view/header.php' ?>
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
                                        <i class="fa fa-dollar-sign" aria-hidden="true"></i>
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
                                <li class="mm-active">
                                    <a href="<?php echo base_url(); ?>home/wallet">
                                        <i class="fa fa-google-wallet" aria-hidden="true"></i>
                                        <span class="msm-text">Wallet</span>
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
                                <div class="col-xl-12">
                                    <div class="wallet-details-content-wrapper">
                                        <h2 class="wd-page-title"><i class="fa fa-google-wallet" aria-hidden="true"></i>Wallet Details</h2>

                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="ico-destribution-token">
                                                    <h2 class="crypto-stitle">Wallet Balance</h2>
                                                    <div class="w-balance-tavle">
                                                        <table class="wbt">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="wbt-crncy">
                                                                            <img src="assets/img/currency/usd.png" alt="">
                                                                            <span>USDT</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="usdt-other">
                                                                            <h4>$15491.00</h4>
                                                                            <p>8.0001254 BTC</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="wbt-crncy">
                                                                            <img src="assets/img/currency/btc.png" alt="">
                                                                            <span>Bitcoin</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="usdt-other">
                                                                            <h4>$48541.00</h4>
                                                                            <p>8.0001254 BTC</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="wbt-crncy">
                                                                            <img src="assets/img/currency/eth.png" alt="">
                                                                            <span>Ethereum</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="usdt-other">
                                                                            <h4>$6541.00</h4>
                                                                            <p>30.54812 ETH</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="ico-destribution-bounce-rate">
                                                    <h2 class="crypto-stitle">Analytics</h2>
                                                    <div class="wallet-analytics-chart">
                                                        <select>
                                                            <option value="2017">Bitcoin</option>
                                                            <option value="2016">Litecoin</option>
                                                            <option value="2015">Etherium</option>
                                                            <option value="2014">USD</option>
                                                        </select>
                                                        <h4>$254324.00</h4>
                                                        <div class="added-value-box">
                                                            <p>$3424.000</p>
                                                            <p>17% Value Added</p>
                                                        </div>
                                                        <div class="wacChart">
                                                            <canvas id="chart0"></canvas>
                                                        </div>
                                                        <ul class="nav nav-pills">
                                                            <li class="nav-item"><a class="btn-style-b-m active" id="au-1"
                                                                data-toggle="pill">Day</a></li>
                                                                <li class="nav-item"><a class="btn-style-b-m" id="au-2" data-toggle="pill">Week</a></li>
                                                                <li class="nav-item"><a class="btn-style-b-m" id="au-3" data-toggle="pill">Month</a>
                                                                </li>
                                                                <li class="nav-item"><a class="btn-style-b-m" id="au-4" data-toggle="pill">Year</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

