 <?php require_once APPPATH.'/views/admin/admin_view/header.php' ?>
    <div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
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
                    <div class="card-head">
                        <h4 class="card-title">Change Your Password</h4>
                    </div>
                
                    <form action="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/update_password" method="POST" role="form" id="admin_change">
                                <input type="hidden" name="admin_username" id="admin_username" value="<?php echo $login_ppos_admin_covid_covid['user_login_admin_covid']['username'] ?>">
                               <div class="form-group">
                                   <label for="old_password">Old Password</label>
                                   <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Old Password">
                               </div>
                               <div class="form-group">
                                   <label for="new_password">New Password</label>
                                   <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter your new password">
                               </div>
                               <div class="form-group">
                                   <label for="password_confirm">New Password</label>
                                   <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Enter your new password again to confirm it">
                               </div>
                           
                               
                           
                               <button type="submit" class="btn btn-primary">Update Password</button>
                           </form>       
                </div><!-- .card-innr -->
            </div><!-- .card -->
        </div><!-- .container -->
    </div><!-- .page-content -->
    
    <?php require_once APPPATH.'/views/admin/admin_view/footer.php' ?>