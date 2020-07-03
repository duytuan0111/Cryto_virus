    <?php require_once APPPATH.'/views/admin/admin_view/header.php' ?>
    <div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
                    <div class="card-head">
                        <h4 class="card-title">Change Current Price & Date</h4>
                        <div class="gaps-2x"></div>
                        
                    </div>
                    <?php 
                    if (validation_errors()!='')
                    {
                        ?>
                        <div class="alert alert-warning text-center"><?php echo validation_errors(); ?></div>
                        <?php
                    } ?>
                    <?php if ($this->session->flashdata('msg_change_1')) { ?>
                        <div class="alert alert-success text-center">
                            <?php echo $this->session->flashdata('msg_change_1'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('msg_change_2')) { ?>
                        <div class="alert alert-warning text-center">
                            <?php echo $this->session->flashdata('msg_change_2'); ?>
                        </div>
                    <?php } ?>
                    
                    
                    <table class="data-table dt-init user-tnx">
                        <thead>
                            <tr class="data-item data-head">
                                <th class="data-col dt-tnxno">ID</th>
                                <th class="data-col dt-amount">Current Price</th>
                                <th class="data-col dt-tnxno">Date</th>
                                <th class="data-col"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                                <tr class="data-item">

                                    <td class="data-col dt-token">
                                        <span class="lead token-amount"><?php echo $cost['id'] ?></span>
                                    </td>
                                    <td class="data-col dt-amount">
                                        <span class="lead token-amount"><?php echo $cost['current_price'] ?></span>
                                    </td>
                                    <td class="data-col dt-tnxno">
                                        <span class="lead token-amount"><?php echo $cost['time'] ?></span>
                                    </td>

                                <td class="data-col text-right">
                                    <div class="relative d-inline-block d-md-none">
                                        <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                        <div class="toggle-class dropdown-content dropdown-content-center-left pd-2x">
                                            <ul class="data-action-list">
                                                <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/change_cost" class="btn btn-success-alt btn-xs btn-icon"><em class="ti ti-pencil"></em></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="data-action-list d-none d-md-inline-flex">
                                        <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/change_cost/1" class="btn btn-success-alt btn-xs btn-icon"><em class="ti ti-pencil"></em></a></li>
                                       
                                    </ul>
                                </td>

                            </tr>


                    </tbody>
                </table>
            </div><!-- .card-innr -->
        </div><!-- .card -->
    </div><!-- .container -->
</div><!-- .page-content -->


<?php require_once APPPATH.'/views/admin/admin_view/footer.php' ?>
