    <?php require_once APPPATH.'/views/admin/admin_view/header.php' ?>
    <div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
                    <div class="card-head">
                        <h4 class="card-title">Withdraw Cryto Virus</h4>
                    </div>
                    <?php 
                    if (validation_errors()!='')
                    {
                        ?>
                        <div class="alert alert-warning text-center"><?php echo validation_errors(); ?></div>
                        <?php
                    } ?>
                    <?php if ($this->session->flashdata('msg_exit_suc')) { ?>
                        <div class="alert alert-success text-center">
                            <?php echo $this->session->flashdata('msg_exit_suc'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('msg_exit_fail')) { ?>
                        <div class="alert alert-warning text-center">
                            <?php echo $this->session->flashdata('msg_exit_fail'); ?>
                        </div>
                    <?php } ?>
                    
                    <table class="data-table dt-init user-tnx">
                        <thead>
                            <tr class="data-item data-head">
                                <th class="data-col dt-tnxno">ID</th>
                                <th class="data-col dt-tnxno">Username</th>
                                <th class="data-col dt-amount">TOKENS AMOUNT</th>
                                <th class="data-col dt-tnxno">Recipientent Addresses</th>
                                <th class="data-col dt-amount">Status</th>
                                <th class="data-col dt-amount">Created Time</th>
                                <th class="data-col dt-amount">Updated Time</th>
                                <th class="data-col"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="data-item">
                                <?php foreach ($list_withdraw as $key) { ?>
                                 <!-- Modal Large -->
                                 <div class="modal fade" id="ppos_<?php echo $key['id'] ?>" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                                            <div class="popup-body popup-body-lg">
                                                <div class="content-area">
                                                    <div class="card-head d-flex justify-content-between align-items-center">
                                                        <h4 class="card-title mb-0">Withdraw PPOS <?php echo $key['id'] ?></h4>
                                                    </div>
                                                    <div class="gaps-1-5x"></div>
                                                    <div class="data-details d-md-flex">
                                                       <div class="fake-class">
                                                        <?php if ($key['status'] == 2) { ?>
                                                            <span class="data-details-title">Status</span>
                                                            <span class="badge badge-success ucap">Approved</span>
                                                        <?php } ?>
                                                        <?php if ($key['status'] == 1) { ?>
                                                            <span class="data-details-title">Status</span>
                                                            <span class="badge badge-warning ucap">Pending</span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="gaps-3x"></div>
                                                <h6 class="card-sub-title">Withdraw PPOS Info</h6>
                                                <ul class="data-details-list">
                                                    <li>
                                                        <div class="data-details-head">Username</div>
                                                        <div class="data-details-des"><strong><?php echo $key['username'] ?></strong></div>
                                                    </li><!-- li -->
                                                    <li>
                                                        <div class="data-details-head">TOKENS AMOUNT</div>
                                                        <div class="data-details-des"><strong><?php echo $key['tokens_amount'] ?></strong></div>
                                                    </li><!-- li -->
                                                    <li>
                                                        <div class="data-details-head">RECIPIENTENT ADDRESSES</div>
                                                        <div class="data-details-des"><strong><?php echo $key['recipiend_add'] ?></strong></div>
                                                    </li><!-- li -->
                                                    <li>
                                                        <div class="data-details-head">Created Time</div>
                                                        <div class="data-details-des"><span><?php echo $key['created_at'] ?></span> <span></span></div>
                                                    </li><!-- li -->
                                                    <li>
                                                        <div class="data-details-head">Updated Time</div>
                                                        <div class="data-details-des"><span><?php echo $key['updated_at'] ?></span> <span></span></div>
                                                    </li><!-- li -->

                                                </ul><!-- .data-details -->       
                                            </div><!-- .card -->
                                        </div>
                                    </div><!-- .modal-content -->
                                </div><!-- .modal-dialog -->
                            </div>
                            <!-- Modal End -->
                            <!-- Modal Large -->
                            <div class="modal fade" id="ppos_exit_<?php echo $key['id'] ?>" tabindex="-1">
                                <div class="modal-dialog modal-dialog-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                                        <div class="popup-body popup-body-lg">
                                            <div class="content-area">
                                                <div class="card-head d-flex justify-content-between align-items-center">
                                                    <h4 class="card-title mb-0">Exit Withdraw PPOS <?php echo $key['id'] ?></h4>
                                                </div>
                                                <div class="gaps-1-5x"></div>
                                                <div class="data-details d-md-flex">
                                                   <div class="fake-class">
                                                    <?php if ($key['status'] == 2) { ?>
                                                        <span class="data-details-title">Status</span>
                                                        <span class="badge badge-success ucap">Approved</span>
                                                    <?php } ?>
                                                    <?php if ($key['status'] == 1) { ?>
                                                        <span class="data-details-title">Status</span>
                                                        <span class="badge badge-warning ucap">Pending</span>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="gaps-3x"></div>
                                            <h6 class="card-sub-title">Exit Withdraw PPOS Info</h6>
                                            <ul class="data-details-list">
                                                <form action="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/exit_ppos/<?php echo $key['id'] ?>" method="POST" role="form" id="ppos_exit">
                                                    <li>
                                                        <div class="data-details-head">Username</div>
                                                        <div class="data-details-des"><input type="text" class="form-control" name="username" value="<?php echo $key['username'] ?>" readonly></div>
                                                    </li><!-- li -->
                                                    <li>
                                                        <div class="data-details-head">TOKENS AMOUNT</div>
                                                        <div class="data-details-des"><input type="text" class="form-control" name="tokens_amount" id="tokens_amount" value="<?php echo $key['tokens_amount'] ?>"></div>
                                                    </li><!-- li -->
                                                    <li>
                                                        <div class="data-details-head">RECIPIENTENT ADDRESSES</div>
                                                        <div class="data-details-des"><input type="text" class="form-control" name="rep_add" id="rep_add" value="<?php echo $key['recipiend_add'] ?>"></div>
                                                    </li><!-- li -->
                                                    <li>
                                                        <div class="data-details-head">Created Time</div>
                                                        <div class="data-details-des"><input type="text" class="form-control" name="created_at" value="<?php echo $key['created_at'] ?>" readonly></div>
                                                    </li><!-- li -->
                                                    <li>
                                                        <div class="data-details-head">Updated Time</div>
                                                        <div class="data-details-des"><input type="text" class="form-control" name="updated_at" value="<?php echo $key['updated_at'] ?>" readonly><span></span></div>
                                                    </li><!-- li -->
                                                </ul><!-- .data-details -->  
                                                <div class="gaps-3x"></div>
                                                <button type="submit" class="btn btn-success" id="btn_submit">Submit</button>

                                            </div><!-- .card -->
                                        </div>
                                    </div><!-- .modal-content -->
                                </form>
                            </div><!-- .modal-dialog -->
                        </div>
                        <!-- Modal End -->
                        <td class="data-col dt-token">
                            <span class="lead token-amount"><?php echo $key['id']; ?></span>
                        </td>
                        <td class="data-col dt-tnxno">
                            <span class="lead token-amount"><?php echo $key['username']; ?></span>
                        </td>
                        <td class="data-col dt-amount">
                            <span class="lead amount-pay"><?php echo $key['tokens_amount']; ?></span>
                        </td>
                        <td class="data-col dt-tnxno">
                            <span class="lead token-amount"><?php echo $key['recipiend_add']; ?></span>
                        </td>
                        <td class="data-col dt-amount">
                            <?php if ($key['status'] == 2) { ?>
                                <span class="badge badge-success ucap">Approved</span>
                            <?php } ?>
                            <?php if ($key['status'] == 1) { ?>
                                <span class="badge badge-warning ucap">Pending</span>
                            <?php } ?>
                        </td>
                        <td class="data-col dt-amount">
                            <span class="lead amount-pay"><?php echo $key['created_at']; ?></span>
                        </td>
                        <td class="data-col dt-amount">
                            <span class="lead amount-pay"><?php echo $key['updated_at']; ?></span>
                        </td>

                        <td class="data-col text-right">
                            <div class="relative d-inline-block d-md-none">
                                <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                <div class="toggle-class dropdown-content dropdown-content-center-left pd-2x">
                                    <ul class="data-action-list">
                                        <li><a href='#' data-toggle="modal" data-target="#ppos_exit_<?php echo $key['id'] ?>" class="btn btn-success-alt btn-xs btn-icon"><em class="ti ti-pencil"></em></a></li>
                                        <li><a href='#' data-toggle="modal" data-target="#ppos_<?php echo $key['id'] ?>" class="btn btn-success-alt btn-xs btn-icon"><em class="ti ti-eye"></em></a></li>
                                        <li><a href="<?php echo base_url(); ?>CrytoVirusAdmin_1278792_263840balance_login29104662/delete_email/<?php echo $key['id'] ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn btn-danger-alt btn-xs btn-icon"><em class="ti ti-trash"></em></a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="data-action-list d-none d-md-inline-flex">
                                <li><a href='#' data-toggle="modal" data-target="#ppos_exit_<?php echo $key['id'] ?>" class="btn btn-success-alt btn-xs btn-icon"><em class="ti ti-pencil"></em></a></li>
                                <li><a href='#' data-toggle="modal" data-target="#ppos_<?php echo $key['id'] ?>" class="btn btn-success-alt btn-xs btn-icon"><em class="ti ti-eye"></em></a></li>
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
