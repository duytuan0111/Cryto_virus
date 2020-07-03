    <?php require_once APPPATH.'/views/admin/admin_view/header.php' ?>
    
    <div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
                    <?php if ($this->session->flashdata('msg_del_suc')) { ?>
                        <div class="alert alert-success text-center">
                            <?php echo $this->session->flashdata('msg_del_suc'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('msg_del_fail')) { ?>
                        <div class="alert alert-warning text-center">
                            <?php echo $this->session->flashdata('msg_del_fail'); ?>
                        </div>
                    <?php } ?>
                    <div class="card-head">
                        <h4 class="card-title">User List</h4>
                    </div>
                    <table class="data-table dt-filter-init-user user-list">
                        <thead>
                            <tr class="data-item data-head">
                                <th class="data-col dt-email">ID</th>
                                <th class="data-col dt-user">Username</th>
                                <th class="data-col dt-email">Tokens Number</th>
                                <th class="data-col dt-email">Tokens Wallet</th>
                                <th class="data-col dt-email">Cash Wallet</th>  
                                <th class="data-col dt-token">Email</th>
                                <th class="data-col dt-email">Phone</th>
                                <th class="data-col dt-email">Country</th>
                                <th class="data-col dt-email">Ref Code</th>
                                <!-- <th class="data-col dt-verify">Verified Status</th> -->
                                <th class="data-col dt-login">Last Login</th>
                               <!--  <th class="data-col dt-status"><div class="dt-status-text">Status</div></th> -->
                                <th class="data-col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_user as $key ) { ?>

                            <tr class="data-item">
                                <td class="data-col dt-email">
                                    <span class="sub user-id"><?php echo $key['id'] ?></span>
                                </td>
                                <td class="data-col dt-user">
                                    <span class="sub sub-s2 sub-user"><?php echo $key['username'] ?></span>
                                </td>
                                <td class="data-col dt-email">
                                    <span class="lead lead-btoken"><?php echo $key['tokens_number'] ?></span>
                                </td>
                                <td class="data-col dt-email">
                                    <span class="lead lead-btoken"><?php echo $key['tokens_wallet'] ?></span>
                                </td>
                                 <td class="data-col dt-email">
                                    <span class="lead lead-btoken"><?php echo $key['cash_wallet'] ?></span>
                                </td>
                                <td class="data-col dt-token">
                                    <span class="lead lead-btoken"><?php echo $key['email'] ?></span>
                                </td>
                                <td class="data-col dt-email">
                                    <span class="lead lead-btoken"><?php echo $key['phone'] ?></span>
                                </td>
                                <td class="data-col dt-email">
                                    <span class="lead lead-btoken"><?php echo $key['country'] ?></span>
                                </td>
                                 <td class="data-col dt-email">
                                    <span class="lead lead-btoken"><?php echo $key['ref_code'] ?></span>
                                </td>
                                <!-- <td class="data-col dt-verify">
                                    <ul class="data-vr-list">
                                        <?php if ($key['email_fa'] == "1") { ?>
                                        <li><div class="data-state data-state-sm data-state-approved"></div> Email</li>
                                        <?php } ?>
                                        <?php if ($key['email_fa'] == "0") { ?>
                                        <li><div class="data-state data-state-sm data-state-pending"></div> Email</li>
                                        <?php } ?>
                                        <?php if (($key['kyc_status'] == "0") || ($key['kyc_status'] == null)) { ?>
                                        <li><div class="data-state data-state-sm data-state-pending"></div> KYC</li>
                                        <?php } ?>
                                        <?php if ($key['kyc_status'] == "1") { ?>
                                        <li><div class="data-state data-state-sm data-state-pending"></div> KYC</li>
                                        <?php } ?>
                                        <?php if ($key['kyc_status'] == "2") { ?>
                                        <li><div class="data-state data-state-sm data-state-approved"></div> KYC</li>
                                        <?php } ?>
                                        <?php if ($key['kyc_status'] == "3") { ?>
                                        <li><div class="data-state data-state-sm data-state-pending"></div> KYC</li>
                                        <?php } ?>
                                    </ul>
                                </td> -->
                                <td class="data-col dt-login">
                                    <span class="sub sub-s2 sub-time"><?php echo $key['last_login'] ?></span>
                                </td>
                               <!--  <td class="data-col dt-status">
                                    <span class="dt-status-md badge badge-outline badge-success badge-md">Active</span>
                                    <span class="dt-status-sm badge badge-sq badge-outline badge-success badge-md">A</span>
                                </td> -->
                                <td class="data-col text-right">
                                    <div class="relative d-inline-block">
                                        <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                        <div class="toggle-class dropdown-content dropdown-content-top-left">
                                            <ul class="dropdown-list">
                                                <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/user_details/<?php echo $key['id'] ?> "><em class="ti ti-eye"></em> View Details</a></li>
                                                <!-- <li><a href="#"><em class="ti ti-na"></em> Suspend</a></li> -->
                                                <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/delete/<?php echo $key['id'] ?>" onclick="return confirm('Are you sure you want to delete this record?');"><em class="ti ti-trash"></em> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr><!-- .data-item -->
                        <?php } ?>
                            
                            
                        </tbody>
                    </table>
                </div><!-- .card-innr -->
            </div><!-- .card -->
        </div><!-- .container -->
    </div><!-- .page-content -->
    
     <?php require_once APPPATH.'/views/admin/admin_view/footer.php' ?>
