    <?php require_once APPPATH.'/views/admin/admin_view/header.php' ?>
    
    <div class="page-content">
        <div class="container">
            <div class="content-area card">
                <div class="card-innr">
                    <div class="card-head">
                        <h4 class="card-title">KYC List</h4>
                    </div>
                    <?php if ($this->session->flashdata('msg_approve_suc')) { ?>
                         <div class="alert alert-success text-center">
                            <?php echo $this->session->flashdata('msg_approve_suc') ?>
                         </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('msg_approve_fail')) { ?>
                         <div class="alert alert-warning text-center">
                            <?php echo $this->session->flashdata('msg_approve_fail') ?>
                         </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('msg_cancel_suc')) { ?>
                         <div class="alert alert-success text-center">
                            <?php echo $this->session->flashdata('msg_cancel_suc') ?>
                         </div>
                    <?php } ?>
                      <?php if ($this->session->flashdata('msg_cancel_fail')) { ?>
                         <div class="alert alert-warning text-center">
                            <?php echo $this->session->flashdata('msg_cancel_fail') ?>
                         </div>
                    <?php } ?>

                    <table class="data-table dt-filter-init kyc-list">
                        <thead>
                            <tr class="data-item data-head">
                                <th class="data-col dt-user">ID</th>
                                <th class="data-col dt-user">Username</th>
                                <th class="data-col dt-doc-type">Email</th>
                                <th class="data-col dt-doc-type">Phone</th>
                                <th class="data-col dt-doc-type">Doc Type</th>
                                <th class="data-col dt-doc-front">Documents</th>
                                <th class="data-col dt-doc-back">&nbsp;</th>
                                <th class="data-col dt-status">Status</th>
                                <th class="data-col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr class="data-item">
                            <?php foreach ($kyc_list as $key) { ?>    
                                <td class="data-col dt-user">
                                    <span class="sub user-id"><?php echo $key['id']; ?></span>
                                </td>
                                <td class="data-col dt-user">
                                    <span class="lead user-name"><?php echo $key['username']; ?></span>
                                </td>
                                <td class="data-col dt-doc-type">
                                    <span class="sub sub-s2 sub-dtype"><?php echo $key['email']; ?></span>
                                </td>
                                <td class="data-col dt-doc-type">
                                    <span class="sub sub-s2 sub-dtype"><?php echo $key['phone']; ?></span>
                                </td>
                                <td class="data-col dt-doc-type">
                                    <span class="sub sub-s2 sub-dtype"><?php echo $key['kyc_type']; ?></span>
                                </td>
                                <td class="data-col dt-doc-front">
                                    <a href="<?php echo base_url(); ?>upload/<?php echo $key['fontside_img']; ?>" class="image-popup">Front Part</a> &nbsp; &nbsp; <a href="#"><em class="fas fa-download"></em></a>
                                </td>
                                <td class="data-col dt-doc-back">
                                    <a href="<?php echo base_url(); ?>upload/<?php echo $key['backside_img']; ?>" class="image-popup">Back Part</a> &nbsp; &nbsp; <a href="#"><em class="fas fa-download"></em></a>
                                </td>
                                <td class="data-col dt-status">
                                    <!-- <span class="dt-status-md badge badge-outline badge-success badge-md">Approved</span> -->
                                    <?php 
                                    if ($key['kyc_status'] == 2) 
                                    {
                                        echo '<span class="dt-status-md badge badge-outline badge-success badge-md">Approved</span>';
                                    }
                                    if ($key['kyc_status'] == 1) 
                                    {
                                        echo '<span class="dt-status-md badge badge-outline badge-warning badge-md">Pending</span>';
                                    } 
                                    if ($key['kyc_status'] == 3) 
                                    {
                                        echo '<span class="dt-status-md badge badge-outline badge-danger badge-md">Canceled</span>';
                                    } 
                                    ?>
                                    <span class="dt-status-sm badge badge-sq badge-outline badge-success badge-md">A</span>
                                </td>
                                <td class="data-col text-right">
                                    <div class="relative d-inline-block">
                                        <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                        <div class="toggle-class dropdown-content dropdown-content-top-left">
                                            <ul class="dropdown-list">
                                                <li><a href="<?php echo base_url(); ?>kyc_list/kyc_details/<?php echo $key['user_id'] ?> "><em class="ti ti-eye"></em> View Details</a></li>
                                                <li><a href="<?php echo base_url(); ?>kyc_list/kyc_approve/<?php echo $key['user_id'];?> "><em class="ti ti-check"></em> Approve</a></li>
                                                <li><a href="<?php echo base_url(); ?>kyc_list/kyc_cancel/<?php echo $key['user_id']; ?>  "><em class="ti ti-na"></em> Cancel</a></li>
                                                <li><a href="<?php echo base_url(); ?>kyc_list/delete/<?php echo $key['user_id']; ?> " onclick="return confirm('Are you sure you want to delete this kyc user?');"><em class="ti ti-trash" ></em> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr><!-- .data-item -->
                            <?php } ?>
                           <!-- .data-item -->
                        </tbody>
                    </table>
                </div><!-- .card-innr -->
            </div><!-- .card -->
        </div><!-- .container -->
    </div><!-- .page-content -->
    <?php require_once APPPATH.'/views/admin/admin_view/footer.php' ?>
