    <?php require_once APPPATH.'/views/admin/admin_view/header.php' ?>
    <div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
                    <div class="card-head">
                        <h4 class="card-title">User Transactions</h4>
                    </div>
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
                                <th class="data-col dt-tnxno">Username</th>
                                <th class="data-col dt-amount">Payment Proof</th>
                                <th class="data-col dt-amount">Status</th>
                                <th class="data-col dt-token">Tokens</th>
                                <th class="data-col dt-account">Created</th>
                                <th class="data-col dt-type"><div class="dt-type-text">Type</div></th>
                                <th class="data-col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="data-item">
                                <?php foreach ($list_trans as $key) { ?>
                                    <td class="data-col dt-token">
                                        <span class="lead token-amount"><?php echo $key['id']; ?></span>
                                    </td>
                                    <td class="data-col dt-tnxno">
                                        <span class="lead token-amount"><?php echo $key['username']; ?></span>
                                    </td>
                                    <td class="data-col dt-amount">
                                        <span class="lead amount-pay"><?php echo $key['payment_proof'] ?></span>
                                    </td>
                                    <td class="data-col dt-amount">
                                     <?php if ($key['status'] == 2) { ?>
                                        <span class="badge badge-success ucap">Approved</span>
                                    <?php } ?>
                                    <?php if ($key['status'] == 1) { ?>
                                        <span class="badge badge-warning ucap">Pending</span>
                                    <?php } ?>
                                </td>
                                <td class="data-col dt-token">
                                    <span class="sub sub-symbol"><?php echo $key['received_total'] ?></span>
                                </td>
                                <td class="data-col dt-account">
                                    <span class="sub sub-date"><?php echo $key['created_at'] ?></span>
                                </td>
                                <td class="data-col dt-type">
                                    <span class="dt-type-md badge badge-outline badge-success badge-md">Purchase</span>
                                    <span class="dt-type-sm badge badge-sq badge-outline badge-success badge-md">P</span>
                                </td>
                                <td class="data-col text-right">
                                    <div class="relative d-inline-block d-md-none">
                                        <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                        <div class="toggle-class dropdown-content dropdown-content-center-left pd-2x">
                                            <ul class="data-action-list">
                                                <li><a href="<?php echo base_url() ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/approve_by/<?php echo $key['id'] ?>" class="btn btn-success-alt btn-xs btn-icon"><em class="ti ti-check"></em></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#transaction_details_<?php echo $key['id'] ?>" class="btn btn-success-alt btn-xs btn-icon"><em class="ti ti-eye"></em></a></li>
                                                <li><a href="<?php echo base_url(); ?>CrytoVirusAdmin_1278792_263840balance_login29104662/delete_trans/<?php echo $key['id'] ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn btn-danger-alt btn-xs btn-icon"><em class="ti ti-trash"></em></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="data-action-list d-none d-md-inline-flex">
                                        <li><a href="<?php echo base_url() ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/approve_by/<?php echo $key['id'] ?>" class="btn btn-success-alt btn-xs btn-icon"><em class="ti ti-check"></em></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#transaction_details_<?php echo $key['id'] ?>" class="btn btn-success-alt btn-xs btn-icon"><em class="ti ti-eye"></em></a></li>
                                        <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/delete_trans/<?php echo $key['id'] ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn btn-danger-alt btn-xs btn-icon" class="btn btn-danger-alt btn-xs btn-icon"><em class="ti ti-trash"></em></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <!-- Modal Large -->
                            <div class="modal fade" id="transaction_details_<?php echo $key['id'] ?>" tabindex="-1">
                                <div class="modal-dialog modal-dialog-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                                        <div class="popup-body popup-body-lg">
                                            <div class="content-area">
                                                <div class="card-head d-flex justify-content-between align-items-center">
                                                    <h4 class="card-title mb-0">Transaction Details <?php echo $key['id'] ?></h4>
                                                </div>
                                                <div class="gaps-1-5x"></div>
                                                <div class="data-details d-md-flex">
                                                    <div class="fake-class">
                                                        <span class="data-details-title">Tranx Date</span>
                                                        <span class="data-details-info"><?php echo $key['created_at']; ?></span>
                                                    </div>
                                                    <div class="fake-class">
                                                        <?php if ($key['status'] == 2) { ?>
                                                            <span class="data-details-title">Tranx Status</span>
                                                            <span class="badge badge-success ucap">Approved</span>
                                                        <?php } ?>
                                                        <?php if ($key['status'] == 1) { ?>
                                                            <span class="data-details-title">Tranx Status</span>
                                                            <span class="badge badge-warning ucap">Pending</span>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="fake-class">
                                                        <span class="data-details-title">Tranx Approved Note</span>
                                                        <span class="data-details-info">By <strong>Admin</strong> at 24 Jul, 2018 10:12PM</span>
                                                    </div>
                                                </div>
                                                <div class="gaps-3x"></div>
                                                <h6 class="card-sub-title">Transaction Info</h6>
                                                <ul class="data-details-list">
                                                    <li>
                                                        <div class="data-details-head">Transaction Type</div>
                                                        <div class="data-details-des"><strong>Purchase</strong></div>
                                                    </li><!-- li -->
                                                    <li>
                                                        <div class="data-details-head">Payment Getway</div>
                                                        <div class="data-details-des"><strong>
                                                            <?php if ($key['payment_method'] == "tranxETH") {
                                                                echo "ETH";
                                                            } if ($key['payment_method'] == "tranxLTC") {
                                                                echo "LTC";
                                                            }
                                                            if ($key['payment_method'] == "tranxBTC") {
                                                                echo "BTC";
                                                            }
                                                            if ($key['payment_method'] == "tranxUSD") {
                                                             echo "USDT";
                                                         } ?>
                                                         <small>- Offline Payment</small></strong></div>
                                                     </li><!-- li -->
                                                        <!-- <li>
                                                            <div class="data-details-head">Deposit From</div>
                                                            <div class="data-details-des"><strong>0xa87d264f935920005810653734156d3342d5c385</strong></div>
                                                        </li> --><!-- li -->
                                                        <li>
                                                            <div class="data-details-head">Payment Proof</div>
                                                            <div class="data-details-des"><span><?php echo $key['payment_proof']; ?></span> <span></span></div>
                                                        </li><!-- li -->
                                                        <!-- <li>
                                                            <div class="data-details-head">Deposit To</div>
                                                            <div class="data-details-des"><span>0xa058106537340385156d3342d5c87d264f935920</span> <span></span></div>
                                                        </li> --><!-- li -->
                                                        <li>
                                                            <div class="data-details-head">Details</div>
                                                            <div class="data-details-des">Tokens Purchase</div>
                                                        </li><!-- li -->
                                                    </ul><!-- .data-details -->
                                                    <div class="gaps-3x"></div>
                                                    <h6 class="card-sub-title">Token Details</h6>
                                                    <ul class="data-details-list">
                                                        <li>
                                                            <div class="data-details-head">Stage Name</div>
                                                            <div class="data-details-des"><strong>ICO Phase <?php echo $key['id'] ?></strong></div>
                                                        </li><!-- li -->
                                                        <li>
                                                            <div class="data-details-head">Contribution</div>
                                                            <div class="data-details-des">
                                                                <span><strong>0 ETH</strong> <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="1 ETH = 100 TWZ"></em></span>
                                                                <span><em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="1 ETH = 100 TWZ"></em> $2540.65</span>
                                                            </div>
                                                        </li><!-- li -->
                                                        <li>
                                                            <div class="data-details-head">Tokens Added To</div>
                                                            <div class="data-details-des"><strong>PPOS-<?php echo $key['user_id']; ?> <small>- <?php  $controller->get_email( $key['user_id']); ?></small></strong></div>
                                                        </li><!-- li -->
                                                        <li>
                                                            <div class="data-details-head">Token (T)</div>
                                                            <div class="data-details-des">
                                                                <span><?php echo $key['tokens_amount'] ?></span>
                                                                <span>(<?php echo $key['tokens_amount'] ?> * 1)</span>
                                                            </div>
                                                        </li><!-- li -->
                                                        <li>
                                                            <div class="data-details-head">Bonus Tokens (B)</div>
                                                            <div class="data-details-des">
                                                                <span><?php echo $key['tokens_bonus']; ?></span>
                                                                <span>(<?php echo $key['tokens_bonus']; ?> * 1)</span>
                                                            </div>
                                                        </li><!-- li -->
                                                        <li>
                                                            <div class="data-details-head">Total Tokens</div>
                                                            <div class="data-details-des">
                                                                <span><strong><?php echo $key['received_total']; ?></strong></span>
                                                                <span>(T+B)</span>
                                                            </div>
                                                        </li><!-- li -->
                                                    </ul><!-- .data-details -->
                                                </div><!-- .card -->
                                            </div>
                                        </div><!-- .modal-content -->
                                    </div><!-- .modal-dialog -->
                                </div>
                                <!-- Modal End -->
                            <?php } ?>
                        </tr><!-- .data-item -->

                    </tbody>
                </table>
            </div><!-- .card-innr -->
        </div><!-- .card -->
    </div><!-- .container -->
</div><!-- .page-content -->


<?php require_once APPPATH.'/views/admin/admin_view/footer.php' ?>
