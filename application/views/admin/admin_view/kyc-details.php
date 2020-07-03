    <?php require_once APPPATH.'/views/admin/admin_view/header.php' ?>
   
    
    <div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
                   <?php foreach ($info_user as $key ) { ?>
                       
                    <div class="card-head d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">KYC Details</h4>
                        <div class="d-flex align-items-center guttar-20px">
                            <div class="flex-col d-sm-block d-none">
                                <a href="<?php echo base_url(); ?>kyc_list/" class="btn btn-sm btn-auto btn-primary"><em class="fas fa-arrow-left mr-3"></em>Back</a>
                            </div>
                            <div class="flex-col d-sm-none">
                                <a href="<?php echo base_url(); ?>kyc_list/" class="btn btn-icon btn-sm btn-primary"><em class="fas fa-arrow-left"></em></a>
                            </div>
                            <div class="relative d-inline-block">
                                <a href="#" class="btn btn-dark btn-sm btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                <div class="toggle-class dropdown-content dropdown-content-top-left">
                                    <ul class="dropdown-list">
                                        <li><a href="<?php echo base_url(); ?>kyc_list/kyc_approve/<?php echo $key['user_id'];?>"><em class="ti ti-check"></em> Approve</a></li>
                                        <li><a href="<?php echo base_url(); ?>kyc_list/kyc_cancel/<?php echo $key['user_id']; ?>"><em class="ti ti-na"></em> Cancel</a></li>
                                        <li><a href="<?php echo base_url(); ?>kyc_list/delete/<?php echo $key['user_id']; ?>"><em class="ti ti-trash"></em> Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gaps-1-5x"></div>
                    <div class="data-details d-md-flex flex-wrap align-items-center justify-content-between">
                        
                        
                        <div class="fake-class">
                            <span class="data-details-title">Submited On</span>
                            <span class="data-details-info"><?php echo $key['submited_on'] ?></span>
                        </div>
                        <div class="fake-class">
                            <span class="data-details-title">Checked By</span>
                            <span class="data-details-info">Admin</span>
                        </div>
                        <!-- <div class="fake-class">
                            <span class="data-details-title">Checked On</span>
                            <span class="data-details-info">2018-08-24 10:12PM</span>
                        </div> -->
                        <div class="fake-class">
                            <?php if ($key['kyc_status'] == 2) { ?>
                            <span class="badge badge-md badge-block badge-success ucap">Approved</span>
                            <?php } ?>
                            <?php if ($key['kyc_status'] == 1) { ?>
                            <span class="badge badge-md badge-block badge-warning ucap">Approved</span>
                            <?php } ?>
                             <?php if ($key['kyc_status'] == 3) { ?>
                            <span class="badge badge-md badge-block badge-warning ucap">Canceled</span>
                            <?php } ?>
                        </div>
                        <div class="gaps-2x w-100 d-none d-md-block"></div>
                        <div class="w-100">
                            <span class="data-details-title">Admin Note</span>
                            <span class="data-details-info">Verified by email</span>
                        </div>
                    </div>
                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">Personal Information</h6>
                    <ul class="data-details-list">    
            
                               
                        <li>
                            <div class="data-details-head">First Name</div>
                            <div class="data-details-des"><?php echo $key['first_name']; ?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Last Name</div>
                            <div class="data-details-des"><?php echo $key['last_name']; ?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Email Address</div>
                            <div class="data-details-des"><?php echo $key['email']; ?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Phone Number</div>
                            <div class="data-details-des"><?php echo $key['phone']; ?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Date of Birth</div>
                            <div class="data-details-des"><?php echo $key['date_of_birth']; ?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Full Address</div>
                            <div class="data-details-des"><?php echo $key['address_line_1']; ?> <?php if ($key['address_line_2'] == '') {
                                echo ""; } else { echo ",".$key['address_line_2'];} ?>, <?php echo $key['city']; ?>, <?php echo $key['zip_code']; ?>.</div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Country of Residence</div>
                            <div class="data-details-des"><?php echo $key['nationality'] ?></div>
                        </li><!-- li -->
                        <li>
                            <div class="data-details-head">Telegram Username</div>
                            <div class="data-details-des"><span><?php echo $key['telegram_username']; ?> <em class="far fa-paper-plane"></em></span></div>
                        </li><!-- li -->
                    </ul>

                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">Uploaded Documnets</h6>
                    <ul class="data-details-list">
                        <li>
                            <div class="data-details-head">Image Card</div>
                            <ul class="data-details-docs">
                                <li>
                                    <span class="data-details-docs-title">Front Side</span>
                                    <div class="data-doc-item data-doc-item-lg">
                                        <div class="data-doc-image">
                                            <img src="<?php echo base_url(); ?>upload/<?php echo $key['fontside_img']?>" alt="Front Side" >
                                        </div>
                                        <ul class="data-doc-actions">
                                            <li><a href="#"><em class="ti ti-import"></em></a></li>
                                        </ul>
                                    </div>
                                </li><!-- li -->
                                 <li>
                                    <span class="data-details-docs-title">Back Side</span>
                                    <div class="data-doc-item data-doc-item-lg">
                                        <div class="data-doc-image">
                                            <img src="<?php echo base_url(); ?>upload/<?php echo $key['backside_img']?>" alt="Back Side">
                                        </div>
                                        <ul class="data-doc-actions">
                                            <li><a href="#"><em class="ti ti-import"></em></a></li>
                                        </ul>
                                    </div>
                                </li><!-- li -->
                                 <li>
                                    <span class="data-details-docs-title">Selfie</span>
                                    <div class="data-doc-item data-doc-item-lg">
                                        <div class="data-doc-image">
                                            <img src="<?php echo base_url(); ?>upload/<?php echo $key['selfife_img']?>" alt="Back Side">
                                        </div>
                                        <ul class="data-doc-actions">
                                            <li><a href="#"><em class="ti ti-import"></em></a></li>
                                        </ul>
                                    </div>
                                </li><!-- li -->
                               
                                </li><!-- li -->
                            </ul>
                        </li><!-- li -->
                    </ul>
                    <?php } ?>
                </div><!-- .card-innr -->
            </div><!-- .card -->
        </div><!-- .container -->
    </div><!-- .page-content -->
    
    <?php require_once APPPATH.'/views/admin/admin_view/footer.php' ?>