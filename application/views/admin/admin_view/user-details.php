<?php require_once APPPATH.'/views/admin/admin_view/header.php' ?>
    
    <div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr card-innr-fix">
                    <div class="card-head d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">User Details</h4>
                        <div class="d-flex align-items-center guttar-20px">
                            <div class="flex-col d-sm-block d-none">
                                <a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/home" class="btn btn-sm btn-auto btn-primary"><em class="fas fa-arrow-left mr-3"></em>Back</a>
                            </div>
                            <div class="flex-col d-sm-none">
                                <a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/home" class="btn btn-sm btn-auto btn-primary" class="btn btn-icon btn-sm btn-primary"><em class="fas fa-arrow-left"></em></a>
                            </div>
                            <div class="relative d-inline-block">
                                <a href="#" class="btn btn-dark btn-sm btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                <div class="toggle-class dropdown-content dropdown-content-top-left">
                                    <ul class="dropdown-list">
                                        <!-- <li><a href="#"><em class="far fa-envelope"></em> Send Mail</a></li>
                                        <li><a href="#"><em class="fas fa-shield-alt"></em> Reset Pass</a></li> -->
                                        <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/delete/<?php echo $info_user['id'] ?>" onclick="return confirm('Are you sure you want to delete this record?');"><em class="fas fa-trash"></em> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gaps-1-5x"></div>
                    <div class="data-details d-md-flex">
                        <div class="fake-class">
                            <span class="data-details-title">Token Balance</span>
                            <span class="data-details-info large"><?php echo $info_user['tokens_number'] ?></span>
                        </div>
                       <!--  <div class="fake-class">
                            <span class="data-details-title">Contributed</span>
                            <span class="data-details-info large">10 <small>ETH</small></span>
                        </div> -->
                       <!--  <div class="fake-class">
                            <span class="data-details-title">Tranx Status</span>
                            <span class="badge badge-success ucap">Approved</span>
                        </div> -->
                        <ul class="data-vr-list">
                            <?php if ($info_user['email_fa'] == "1") { ?>
                                        <li><div class="data-state data-state-sm data-state-approved"></div> Email</li>
                                        <?php } ?>
                                        <?php if ($info_user['email_fa'] == "0") { ?>
                                        <li><div class="data-state data-state-sm data-state-pending"></div> Email</li>
                                        <?php } ?>
                            <?php if (($info_user['kyc_status'] == "0") || ($info_user['kyc_status'] == null)) { ?>
                                        <li><div class="data-state data-state-sm data-state-pending"></div> KYC</li>
                                        <?php } ?>
                                        <?php if ($info_user['kyc_status'] == "1") { ?>
                                        <li><div class="data-state data-state-sm data-state-approved"></div> KYC</li>
                                        <?php } ?>
                                        <?php if ($info_user['kyc_status'] == "2") { ?>
                                        <li><div class="data-state data-state-sm data-state-pending"></div> KYC</li>
                                        <?php } ?>
                           <!--  <li><div class="data-state data-state-sm data-state-approved"></div> WL</li> -->
                        </ul>
                    </div>
                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">User Information</h6>
                    <ul class="data-details-list">
                        <li>
                            <div class="data-details-head">FirstName</div>
                            <div class="data-details-des"><?php echo $info_user['firstname']; ?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">LastName</div>
                            <div class="data-details-des"><?php echo $info_user['lastname']; ?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Email Address</div>
                            <div class="data-details-des"><?php echo $info_user['email']; ?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Mobile Number</div>
                            <div class="data-details-des"><?php echo $info_user['phone']; ?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Date of Birth</div>
                            <div class="data-details-des"><?php echo $info_user['date_of_birth']; ?></div>
                        </li><!-- li -->
                    </ul>
                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">More Information</h6>
                    <ul class="data-details-list">
                        <li>
                            <div class="data-details-head">Joining Date</div>
                            <div class="data-details-des"><?php echo $info_user['register_time'] ?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Reg Method</div>
                            <div class="data-details-des">Email</div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Last Login</div>
                            <div class="data-details-des"><?php echo $info_user['last_login'] ?></div>
                        </li><!-- li -->
                    </ul>
                </div><!-- .card-innr -->
            </div><!-- .card -->
        </div><!-- .container -->
    </div><!-- .page-content -->

    <?php require_once APPPATH.'/views/admin/admin_view/footer.php' ?>