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
                                    <i class="fa fa-dollar" aria-hidden="true"></i>
                                    <span class="msm-text">Buy NCOR</span>
                                </a>
                            </li>
                            <li class="mm-active">
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
                            <div class="col-xl-12">
                                <div class="transaction-details-wrapper">
                                    <h2 class="crypto-stitle">Transection Details</h2>
                                    <div class="transaction-details-table">
                                        <table class="tdt">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>STATUS </th>
                                                    <th>AMOUNT</th>
                                                    <th>PAYMENT METHOD</th>
                                                    <th>PAYMENT SUBMIT PROOF</th>
                                                    <th>DATE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($user_trans as $key ) { ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $key['id'] ?></td>
                                                        <td>
                                                           <?php if ($key['status'] == 2) { ?>
                                                            <span class="badge badge-success ucap">Approved</span>
                                                        <?php } ?>
                                                        <?php if ($key['status'] == 1) { ?>
                                                            <span class="badge badge-warning ucap">Pending</span>
                                                        <?php } ?>
                                                    </td>
                                                    <td>$<?php echo $key['received_total'] ?></td>
                                                    <td><?php echo $key['payment_method'] ?></td>
                                                    <td><?php echo $key['payment_proof'] ?></td>
                                                    <td><?php echo $key['created_at'] ?></td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-5">

                            <div class="monthly-transaction-history-wrapper">
                                <h2 class="crypto-stitle">Recent Transections</h2>
                                <div class="m-transaction-history">
                                    <canvas id="myChart" data-rtcdata="100, 90 , 95, 80, 75, 87, 98, 40, 25, 60, 90, 80, 67, 87, 98, 88, 67" data-rtclabel="6, 10, 12, 14, 16, 17, 18, 20, 22, 23, 24, 25, 26, 27, 28, 29, 30"></canvas>
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