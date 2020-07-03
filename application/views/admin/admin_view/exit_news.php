<?php require_once APPPATH.'/views/admin/admin_view/header.php' ?>

<div class="page-content">
    <div class="container">
        <div class="card content-area">
            <div class="card-innr card-innr-fix">
                <div class="card-head d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">Exit News</h4>
                    <div class="d-flex align-items-center guttar-20px">
                        <div class="flex-col d-sm-block d-none">
                            <a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/news" class="btn btn-sm btn-auto btn-primary"><em class="fas fa-arrow-left mr-3"></em>Back</a>
                        </div>
                        <div class="flex-col d-sm-none">
                            <a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/news" class="btn btn-sm btn-auto btn-primary" class="btn btn-icon btn-sm btn-primary"><em class="fas fa-arrow-left"></em></a>
                        </div>
                        <div class="relative d-inline-block">
                            <a href="#" class="btn btn-dark btn-sm btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                            <div class="toggle-class dropdown-content dropdown-content-top-left">
                                <ul class="dropdown-list">
                                    <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/delete_news/<?php echo $info_news['id'];  ?>" onclick="return confirm('Are you sure you want to delete this record?');"><em class="fas fa-trash"></em> Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gaps-3x"></div>
                <form action="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/exit_new/<?php echo $info_news['id'] ?>" method="POST" role="form" id="form_exit_" >    
                    <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Input field" value="<?php echo $info_news['id'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <textarea class="form-control" rows="3" id="title" name="title" ><?php echo $info_news['title'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="time">Time:</label>
                        <input type="text" class="form-control" id="time" name="time" placeholder="Input field" value="<?php echo $info_news['time'] ?>" >
                    </div>
                    <div class="form-group">
                        <label for="author">Author:</label>
                        <input type="text" class="form-control" id="author" name="author" placeholder="Input field" value="<?php echo $info_news['author'] ?>" >
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" rows="3" id="description" name="description" ><?php echo $info_news['description'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img_url">Image Url:</label>
                        <textarea class="form-control" rows="2" id="img_url" name="img_url" ><?php echo $info_news['img_url'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="new_url">News Url:</label>
                        <textarea class="form-control" rows="2" id="new_url" name="new_url" ><?php echo $info_news['new_url'] ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" >Exit</button>

                </form>

            </div><!-- .card-innr -->
        </div><!-- .card -->
    </div><!-- .container -->
</div><!-- .page-content -->

<?php require_once APPPATH.'/views/admin/admin_view/footer.php' ?>