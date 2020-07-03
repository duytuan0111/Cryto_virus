    <?php require_once APPPATH.'/views/admin/admin_view/header.php' ?>
    <div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
                    <div class="card-head">
                        <h4 class="card-title">Cryto Virus Blog</h4>
                        <div class="gaps-2x"></div>
                        <a href='#modal-id' data-toggle="modal" class="btn btn-primary">Add Blog</a>
                        <div class="modal fade" id="modal-id">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <legend class="text-center">Add Blog</legend>
                                    <div class="modal-body">
                                        <form action="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/add_news" method="post" onsubmit="return checkForm(this)" id="add_news">
                                            <input type="hidden" name="role" id="role" value="<?php echo $login_ppos_admin_covid_covid['user_login_admin_covid']['role'] ?> ">
                                            <div class="input-item">
                                                <input type="text" name="title" id="title" placeholder="Title News" class="input-bordered">
                                            </div>
                                            <div class="input-item">
                                                <input type="text" name="slug" id="slug" placeholder="Slug" class="input-bordered">
                                            </div>
                                            <div class="input-item">
                                                <input type="text" name= "time" id="time" placeholder="Time News" class="input-bordered">
                                            </div>
                                            <div class="input-item">
                                                <input type="text" name="author" id="author" placeholder="Author News" class="input-bordered">
                                            </div>
                                            <div class="input-item">
                                                <input type="text" name="description" id="description" placeholder="Description News" class="input-bordered">
                                            </div>
                                            <div class="input-item">
                                                <input type="file" name="img_blog" id="img_blog" class="input-bordered">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                                            <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                    if (validation_errors()!='')
                    {
                        ?>
                        <div class="alert alert-warning text-center"><?php echo validation_errors(); ?></div>
                        <?php
                    } ?>
                    <?php if ($this->session->flashdata('msg_exit_news_1')) { ?>
                        <div class="alert alert-success text-center">
                            <?php echo $this->session->flashdata('msg_exit_news_1'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('msg_exit_news_2')) { ?>
                        <div class="alert alert-warning text-center">
                            <?php echo $this->session->flashdata('msg_exit_news_2'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('msg_ins_news_1')) { ?>
                        <div class="alert alert-success text-center">
                            <?php echo $this->session->flashdata('msg_ins_news_1'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('msg_ins_news_2')) { ?>
                        <div class="alert alert-warning text-center">
                            <?php echo $this->session->flashdata('msg_ins_news_2'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('del_new_suc')) { ?>
                        <div class="alert alert-success text-center">
                            <?php echo $this->session->flashdata('del_new_suc'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('del_new_fail')) { ?>
                        <div class="alert alert-warning text-center">
                            <?php echo $this->session->flashdata('del_new_fail'); ?>
                        </div>
                    <?php } ?>
                    
                    <table class="data-table dt-init user-tnx">
                        <thead>
                            <tr class="data-item data-head">
                                <th class="data-col dt-tnxno">ID</th>
                                <th class="data-col dt-amount">Title</th>
                                <th class="data-col dt-tnxno">Time</th>
                                <th class="data-col dt-tnxno">Author</th>
                                <th class="data-col"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_news as $key) { ?>

                                <tr class="data-item">

                                    <td class="data-col dt-token">
                                        <span class="lead token-amount"><?php echo $key['id'] ?></span>
                                    </td>
                                    <td class="data-col dt-amount">
                                        <span class="lead token-amount"><?php echo $key['title'] ?></span>
                                    </td>
                                    <td class="data-col dt-tnxno">
                                        <span class="lead token-amount"><?php echo $key['time'] ?></span>
                                    </td>
                                    <td class="data-col dt-tnxno">
                                        <span class="lead token-amount"><?php echo $key['author'] ?></span>
                                    </td>

                                    <!--  moda news detail -->
                                    <div class="modal fade" id="modal-news-<?php echo $key['id'] ?>" >
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                   <h3>News Details</h3>
                                               </div>
                                               <div class="modal-body">
                                                <form action="" method="POST" role="form">    
                                                    <div class="form-group">
                                                        <label for="">ID:</label>
                                                        <input type="text" class="form-control" id="" placeholder="Input field" value="<?php echo $key['id'] ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="comment">Title:</label>
                                                        <textarea class="form-control" rows="3" id="comment" readonly><?php echo $key['title'] ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Time:</label>
                                                        <input type="text" class="form-control" id="" placeholder="Input field" value="<?php echo $key['time'] ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Author:</label>
                                                        <input type="text" class="form-control" id="" placeholder="Input field" value="<?php echo $key['author'] ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="comment">Description:</label>
                                                        <textarea class="form-control" rows="3" id="comment" readonly><?php echo $key['description'] ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="comment">Image Url:</label>
                                                        <textarea class="form-control" rows="2" id="comment" readonly><?php echo $key['img_url'] ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="comment">News Url:</label>
                                                        <textarea class="form-control" rows="2" id="comment" readonly><?php echo $key['new_url'] ?></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <td class="data-col text-right">
                                    <div class="relative d-inline-block d-md-none">
                                        <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                        <div class="toggle-class dropdown-content dropdown-content-center-left pd-2x">
                                            <ul class="data-action-list">
                                                <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/exit_news/<?php echo $key['id'] ?>" class="btn btn-success-alt btn-xs btn-icon"><em class="ti ti-pencil"></em></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#modal-news-<?php echo $key['id'] ?>" class="btn btn-success-alt btn-xs btn-icon"><em class="ti ti-eye"></em></a></li>
                                                <li><a href="<?php echo base_url(); ?>CrytoVirusAdmin_1278792_263840balance_login29104662/delete_news/<?php echo $key['id'] ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn btn-danger-alt btn-xs btn-icon"><em class="ti ti-trash"></em></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="data-action-list d-none d-md-inline-flex">
                                        <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/exit_news/<?php echo $key['id'] ?>" class="btn btn-success-alt btn-xs btn-icon"><em class="ti ti-pencil"></em></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#modal-news-<?php echo $key['id'] ?>" class="btn btn-success-alt btn-xs btn-icon"><em class="ti ti-eye"></em></a></li>
                                        <li><a href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/delete_news/<?php echo $key['id'] ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn btn-danger-alt btn-xs btn-icon" class="btn btn-danger-alt btn-xs btn-icon"><em class="ti ti-trash"></em></a></li>
                                    </ul>
                                </td>

                            </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div><!-- .card-innr -->
        </div><!-- .card -->
    </div><!-- .container -->
</div><!-- .page-content -->


<?php require_once APPPATH.'/views/admin/admin_view/footer.php' ?>
