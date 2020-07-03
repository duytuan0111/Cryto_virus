 <?php require_once APPPATH.'/views/admin/admin_view/header.php' ?>
<!-- .page-header -->
    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    <div class="kyc-status card mx-lg-4">
                        <div class="card-innr">
                            <div class="status status-thank px-md-5">
                                <div class="status-icon">
                                    <em class="ti ti-check"></em>
                                </div>
                                <span class="status-text large text-dark">You have completed the process of KYC</span>
                                <p class="px-md-5">We are still waiting for your identity verification. Once our team verified your indentity, you will be notified by email. You can also check your KYC  compliance status from your profile page.</p>
                                <a href="<?php echo base_url(); ?>" class="btn btn-primary">Back to Profile</a>
                            </div>
                        </div>
                    </div><!-- .card -->
                    <p class="text-light text-center mgmt-1x">If you have any question, please contact our support team <a href="#">info@tokenwiz.com</a>.</p>
                    <div class="gaps-1x"></div>
                    <div class="gaps-3x d-none d-sm-block"></div>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .page-content -->
    
     <?php require_once APPPATH.'/views/admin/admin_view/footer.php' ?>
