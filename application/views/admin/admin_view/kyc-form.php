
    <?php require_once APPPATH.'/views/admin/admin_view/header.php' ?>
    <!-- .page-content -->
    <div class="page-header page-header-kyc">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7 text-center">
                    <h2 class="page-title">Begin your ID-Verification</h2>
                    <p class="large">Verify your identity to participate in tokensale.</p>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .page-header -->
    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    <div class="kyc-form-steps card mx-lg-4">
                        <div class="form-step form-step1">
                            <div class="form-step-head card-innr">
                                <div class="step-head">
                                    <div class="step-number">01</div>
                                    <div class="step-head-text">
                                        <h4>Personal Details</h4>
                                        <p>Your simple personal information required for identification</p>
                                    </div>
                                </div>
                            </div><!-- .step-head -->
                            <div class="form-step-fields card-innr">
                                <div class="note note-plane note-light-alt note-md pdb-1x">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Please type carefully and fill out the form with your personal details. Your can’t edit these details once you submitted the form.</p>
                                    <?php 
                                    if (validation_errors()!='')
                                    {
                                        ?>
                                        <div class="alert alert-warning"><?php echo validation_errors(); ?></div>
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
                                      <?php 
                                       if ($this->session->flashdata('msg_up_fontimg'))
                                    {
                                        ?>
                                        <div class="alert alert-warning text-center">
                                          <?php 
                                          echo $this->session->flashdata('msg_up_fontimg');
                                          ?>
                                      </div> 
                                      <?php 
                                       if ($this->session->flashdata('msg_up_backimg'))
                                    {
                                        ?>
                                        <div class="alert alert-warning text-center">
                                          <?php 
                                          echo $this->session->flashdata('msg_up_backimg');
                                          ?>
                                      </div> 
                                      <?php } ?> 
                                  <?php } ?>
                                </div>
                                <form action="<?php echo base_url(); ?>home/insert_kyc" method="POST" id="form" enctype="multipart/form-data" onsubmit="return checkForm(this);">  
                        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">First Name <span class="text-danger">*</span></label>
                                            <input class="input-bordered" name="first_name" type="text">
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Last Name <span class="text-danger">*</span></label>
                                            <input class="input-bordered" name="last_name" type="text">
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Email Address <span class="text-danger">*</span></label>
                                            <input class="input-bordered" name="email" type="text">

                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Phone Number <span class="text-danger">*</span></label>
                                            <input class="input-bordered" name="phone" type="text">
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Date of Birth <span class="text-danger">*</span></label>
                                            <input class="input-bordered date-picker" name="date_of_birth" type="text">
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Telegram Username</label>
                                            <input class="input-bordered" name="telegram_user" type="text">
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                                <h4 class="text-secondary mgt-0-5x">Your Address</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Address Line 1 <span class="text-danger">*</span></label>
                                            <input class="input-bordered" name="address_1" type="text">
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Address Line 2</label>
                                            <input class="input-bordered" name="address_2" type="text">
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">City <span class="text-danger">*</span></label>
                                            <input class="input-bordered" name="city" type="text">
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">State <span class="text-danger">*</span></label>
                                            <input class="input-bordered" name="state" type="text">
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label for="nationality" class="input-item-label">Nationality <span class="text-danger">*</span></label>
                                            <select class="select-bordered select-block" name="nationality" id="nationality">
                                                <option value="us">United State</option>
                                                <option value="uk">United KingDom</option>
                                                <option value="fr">France</option>
                                                <option value="ch">China</option>
                                                <option value="cr">Czech Republic</option>
                                                <option value="cb">Colombia</option>
                                            </select>
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Zip Code <span class="text-danger">*</span></label>
                                            <input class="input-bordered" name="zip_code" type="text">
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .step-fields -->
                        </div>
                        <div class="form-step form-step2">
                            <div class="form-step-head card-innr">
                                <div class="step-head">
                                    <div class="step-number">02</div>
                                    <div class="step-head-text">
                                        <h4>Document Upload</h4>
                                        <p>To verify your identity, please upload any of your document</p>
                                    </div>
                                </div>
                            </div><!-- .step-head -->
                            <div class="form-step-fields card-innr">
                                <div class="note note-plane note-light-alt note-md pdb-0-5x">
                                    <em class="fas fa-info-circle"></em>
                                    <p>In order to complete, please upload any of the following personal document.</p>
                                </div>
                                <div class="gaps-2x"></div>
                                <ul class="nav nav-tabs nav-tabs-bordered row flex-wrap guttar-20px" role="tablist">
                                    <div class="checkbox">
                                            <div class="radio" >
                                                <label>
                                                    <input type="radio" name="kyc_type" id="kyc_type" value="PASSPORT">
                                                    <li class="nav-item flex-grow-0">
                                                        <a class="nav-link d-flex align-items-center" data-toggle="tab" href="">
                                                            <div class="nav-tabs-icon">
                                                                <img src="<?php  echo base_url() ?>public/public_admin/images/icon-passport-color.png" alt="icon">
                                                                <img src="<?php  echo base_url() ?>public/public_admin/images/icon-passport-color.png" alt="icon">
                                                            </div>
                                                            <span>Passport</span>
                                                        </a>
                                                    </li>
                                                    <input type="radio" name="kyc_type" id="kyc_type" value="NATIONL CARD">
                                                    <li class="nav-item flex-grow-0">
                                                        <a class="nav-link d-flex align-items-center" data-toggle="tab" href="">
                                                            <div class="nav-tabs-icon">
                                                                <img src="<?php  echo base_url() ?>public/public_admin/images/icon-national-id-color.png" alt="icon">
                                                                <img src="<?php  echo base_url() ?>public/public_admin/images/icon-national-id-color.png" alt="icon">
                                                            </div>
                                                            <span>National Card</span>
                                                        </a>
                                                    </li>
                                                   
                                                </label>
                                            </div>
                                    </div>
        
                                </ul><!-- .nav-tabs-line -->
                                <div class="tab-content" id="myTabContent">
                                    
                                        <h5 class="text-secondary font-bold">To avoid delays when verifying account, Please make sure bellow:</h5>
                                        <ul class="list-check">
                                            <li>Chosen credential must not be expaired.</li>
                                            <li>Document should be good condition and clearly visible.</li>
                                            <li>Make sure that there is no light glare on the card.</li>
                                        </ul>
                                        <div class="gaps-2x"></div>
                                        <h5 class="font-mid">Upload Here Your frontside image</h5>
                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                                <input type="file" class="btn btn-primary" required="" name="fontside_img" id="fontside_img">
                                            </div>
                                            <div class="col-sm-4 d-none d-sm-block">
                                                <div class="mx-md-4">
                                                    <img src="<?php  echo base_url() ?>public/public_admin/images/passport-a-fornt.jpg" alt="vector">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gaps-3x"></div>
                                        <h5 class="font-mid">Upload Here Your backside image</h5>
                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                                <input type="file" class="btn btn-primary" required="" name="backside_img" id="backside_img">
                                            </div>
                                            <div class="col-sm-4 d-none d-sm-block">
                                                <div class="mx-md-4">
                                                    <img src="<?php  echo base_url() ?>public/public_admin/images/passport-a-back.jpg" alt="vector">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gaps-3x"></div>
                                        <h5 class="font-mid">Upload Here Your selfie image</h5>
                                        <div class="row align-items-center">
                                            <div class="col-sm-8">
                                                <input type="file" class="btn btn-primary" required="" name="selfife_img" id="selfile_img">
                                            </div>
                                            <div class="col-sm-4 d-none d-sm-block">
                                                <div class="mx-md-4">
                                                    <img src="<?php  echo base_url() ?>public/public_admin/images/sefile_img.jpg" alt="vector">
                                                </div>
                                            </div>
                                   
                                    
                                </div><!-- .tab-content -->
                            </div><!-- .step-fields -->
                        </div>
                        <div class="form-step form-step3">
                            <div class="form-step-head card-innr">
                                <div class="step-head">
                                    <div class="step-number">03</div>
                                    <div class="step-head-text">
                                        <h4>Your Paying Wallet</h4>
                                        <p>Submit your wallet address that you are going to send funds</p>
                                    </div>
                                </div>
                            </div><!-- .step-head -->
                            <div class="form-step-fields card-innr">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-with-label">
                                            <label for="swalllet" class="input-item-label">Select Wallet </label>
                                            <select class="select-bordered select-block" name="swalllet" id="swalllet">
                                                <option value="Ethereum">Ethereum</option>
                                                <option value="DashCoin">DashCoin</option>
                                                <option value="BitCoin">BitCoin</option>
                                            </select>
                                        </div><!-- .input-item -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                                <div class="input-item input-with-label">
                                    <label for="token-address" class="input-item-label">Your Address for tokens:</label>
                                    <input class="input-bordered" type="text" id="token_address" name="token_address" value="">
                                    <span class="input-note">Note: Address should be ERC20-compliant.</span>
                                </div><!-- .input-item -->
                            </div><!-- .step-fields -->
                        </div>
                        <div class="form-step form-step-final">
                            <div class="form-step-fields card-innr">
                                <div class="input-item">
                                    <input class="input-checkbox input-checkbox-md" id="term-condition" name="term_condition" type="checkbox" value="1">
                                    <label for="term-condition">I have read the <a href="#">Terms of Condition</a> and <a href="#">Privary Policy.</a></label>
                                </div>
                                <div class="input-item">
                                    <input class="input-checkbox input-checkbox-md" name="info_currect" id="info-currect" type="checkbox" value="1">
                                    <label for="info-currect">All the personal information I have entered is correct.</label>
                                </div>
                                <div class="gaps-1x"></div>
                                <button type="submit" class="btn btn-primary">Process for Verify</button>
                                </form>

                            </div><!-- .step-fields -->
                        </div>
                    </div><!-- .card -->
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .page-content -->
    <script type="text/javascript">
        function checkForm(form)
        {
            if (!form.term_condition.checked) {
                alert("Please indicate that you accept the Terms and Conditions.");
                form.term_condition.focus();
                return false;
            }

            if (!form.info_currect.checked) {
                alert("Please indicate that your information you have entered  is correct.");
                form.info_currect.focus();
                return false;
            }
            if ((!form.term_condition.checked) && (!form.info_currect.checked)) {
                alert("Please indicate that you accept the Term and Conditions and Entered your information is correct.")
            }
          
            return true;
        }
    </script>

    <?php require_once APPPATH.'/views/admin/admin_view/footer.php' ?>
    