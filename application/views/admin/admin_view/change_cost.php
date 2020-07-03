<?php require_once APPPATH.'/views/admin/admin_view/header.php' ?>

<div class="page-content">
    <div class="container">
        <div class="card content-area">
            <div class="card-innr card-innr-fix">
                <div class="card-head d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Exit News</h4>
                    <div class="d-flex align-items-center guttar-20px">
                        <div class="flex-col d-sm-block d-none">
                            <a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/cost" class="btn btn-sm btn-auto btn-primary"><em class="fas fa-arrow-left mr-3"></em>Back</a>
                        </div>
                        <div class="flex-col d-sm-none">
                            <a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/cost" class="btn btn-sm btn-auto btn-primary" class="btn btn-icon btn-sm btn-primary"><em class="fas fa-arrow-left"></em></a>
                        </div>
                    </div>
                </div>
                <div class="gaps-3x"></div>
                <form action="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/change/1" method="POST" role="form" id="form_cost" >    
                    <div class="form-group">
                        <label for="current_price">Current Price:</label>
                        <input type="text" class="form-control" id="current_price" name="current_price" placeholder="Input field" value="<?php echo $cost['current_price'] ?>" >
                    </div>
                     <div class="form-group">
                        <label for="time">Date:</label>
                        <input type="text" class="form-control" id="time" name="time" placeholder="Input field" value="<?php echo $cost['time'] ?>" >
                    </div>
            
                    <button type="submit" class="btn btn-primary" >Exit</button>

                </form>

            </div><!-- .card-innr -->
        </div><!-- .card -->
    </div><!-- .container -->
</div><!-- .page-content -->

<?php require_once APPPATH.'/views/admin/admin_view/footer.php' ?>