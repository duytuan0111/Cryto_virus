    <?php require_once APPPATH.'/views/admin/admin_view/header.php' ?>
    <div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
                    <div class="card-head">
                        <h4 class="card-title">List Email</h4>
                    </div>
                    <?php if ($this->session->flashdata('msg_mail_suc')) { ?>
                        <div class="alert alert-success text-center">
                            <?php echo $this->session->flashdata('msg_mail_suc'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('msg_mail_fail')) { ?>
                        <div class="alert alert-warning text-center">
                            <?php echo $this->session->flashdata('msg_mail_fail'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('msg_app_fail')) { ?>
                        <div class="alert alert-warning text-center">
                            <?php echo $this->session->flashdata('msg_app_fail'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('msg_app_suc')) { ?>
                        <div class="alert alert-success text-center">
                            <?php echo $this->session->flashdata('msg_app_suc'); ?>
                        </div>
                    <?php } ?>
                    <table class="data-table dt-init user-tnx">
                        <thead>
                            <tr class="data-item data-head">
                                <th class="data-col dt-tnxno">ID</th>
                                <th class="data-col dt-tnxno">Email</th>
                                <th class="data-col"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="data-item">
                                <?php foreach ($list_email as $key) { ?>
                                    <td class="data-col dt-token">
                                        <span class="lead token-amount"><?php echo $key['id']; ?></span>
                                    </td>
                                    <td class="data-col dt-tnxno">
                                        <span class="lead token-amount"><?php echo $key['email']; ?></span>
                                    </td>
                                   
                                     <td class="data-col text-right">
                                        <div class="relative d-inline-block d-md-none">
                                            <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                            <div class="toggle-class dropdown-content dropdown-content-center-left pd-2x">
                                                <ul class="data-action-list">
    
                                                 <li><a href="<?php echo base_url(); ?>CrytoVirusAdmin_1278792_263840balance_login29104662/delete_email/<?php echo $key['id'] ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn btn-danger-alt btn-xs btn-icon"><em class="ti ti-trash"></em></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <ul class="data-action-list d-none d-md-inline-flex">
                                        <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/delete_email/<?php echo $key['id'] ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn btn-danger-alt btn-xs btn-icon" class="btn btn-danger-alt btn-xs btn-icon"><em class="ti ti-trash"></em></a></li>
                                    </ul>
                                </td>
                            </tr>
                            
                            <?php } ?>
                        </tr><!-- .data-item -->

                    </tbody>
                </table>
            </div><!-- .card-innr -->
        </div><!-- .card -->
    </div><!-- .container -->
</div><!-- .page-content -->


<?php require_once APPPATH.'/views/admin/admin_view/footer.php' ?>
