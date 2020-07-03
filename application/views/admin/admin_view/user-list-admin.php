 <?php require_once APPPATH.'/views/admin/admin_view/header.php' ?>
    <div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
                    <?php if ($this->session->flashdata('msg_check_username')) { ?>
                        <div class="alert alert-warning text-center">
                            <?php echo $this->session->flashdata('msg_check_username'); ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('msg_succ')) { ?>
                        <div class="alert alert-success text-center">
                            <?php echo $this->session->flashdata('msg_succ'); ?>
                        </div>
                    <?php } ?>
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
                        <h4 class="card-title">User Admin List</h4>
                    </div>
                    <?php if ($login_ppos_admin_covid_covid['user_login_admin_covid']['role'] == 1) { ?>
                    <div class="row">
                        <div class="col-md-10">
                            
                        </div>
                        <div class="col-md-2">
                            <a href='#modal-id' data-toggle="modal" class="btn btn-primary" ><em class="ti ti-plus"></em> Add</a>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="modal fade" id="modal-id">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <legend class="text-center">Add Manager PPOS</legend>
                                <div class="modal-body">
                                    <form action="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/register" method="post" onsubmit="return checkForm(this)" id="add_manager">
                                        <input type="hidden" name="role" id="role" value="<?php echo $login_ppos_admin_covid_covid['user_login_admin_covid']['role'] ?> ">
                                        <div class="input-item">
                                            <input type="text" name="fullname" placeholder="Your Name" class="input-bordered">
                                        </div>
                                        <div class="input-item">
                                            <input type="text" name= "username" placeholder="Username" class="input-bordered">
                                        </div>
                                        <div class="input-item">
                                            <input type="password" name="password" id="password" placeholder="Password" class="input-bordered">
                                        </div>
                                        <div class="input-item">
                                            <input type="password" name="password_confirm" placeholder="Repeat Password" id="password_confirm" class="input-bordered">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                                        <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
                                    </form>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <table class="data-table dt-init user-list">
                        <thead>
                            <tr class="data-item data-head">
                                <th class="data-col dt-user">ID</th>
                                <th class="data-col dt-user">Username</th>
                                <th class="data-col dt-email">Name</th>
                                <th class="data-col dt-token">Created</th>
                                <th class="data-col dt-login">Last Login</th>
                                <th class="data-col dt-status"><div class="dt-status-text">Status</div></th>
                                <?php if ($login_ppos_admin_covid_covid['user_login_admin_covid']['role'] == 1) { ?>
                                <th class="data-col"></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_admin as $key) { ?>
                            <tr class="data-item">
                                 <td class="data-col dt-user">
                                    <span class="sub user-id"><?php echo $key['id'] ?></span>
                                </td>
                                <td class="data-col dt-user">
                                    <span class="lead user-name"><?php echo $key['username'] ?></span>
                                </td>
                                <td class="data-col dt-email">
                                    <span class="sub sub-s2 sub-email"><?php echo $key['name'] ?></span>
                                </td>
                                <td class="data-col dt-token">
                                    <span class="lead lead-btoken"><?php echo $key['created_at'] ?></span>
                                </td>
                                <td class="data-col dt-login">
                                    <span class="sub sub-s2 sub-time"><?php echo $key['last_login'] ?></span>
                                </td>
                                <td class="data-col dt-status">
                                    <?php if ($key['role'] == "1") { ?>
                                    <span class="dt-status-md badge badge-outline badge-success badge-md">Administrator</span>
                                    <span class="dt-status-sm badge badge-sq badge-outline badge-success badge-md">A</span>
                                    <?php } ?>
                                    <?php if ($key['role'] == "0") { ?>
                                    <span class="dt-status-md badge badge-outline badge-success badge-md">Manager</span>
                                    <span class="dt-status-sm badge badge-sq badge-outline badge-success badge-md">M</span>
                                    <?php } ?>
                                </td>
                                <?php if ($login_ppos_admin_covid_covid['user_login_admin_covid']['role'] == 1) { ?>
                                <td class="data-col text-right">
                                    <div class="relative d-inline-block">
                                        <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                        <div class="toggle-class dropdown-content dropdown-content-top-left">
                                            <ul class="dropdown-list">
                                                <li><a  href="<?php echo base_url(); ?>admin/CrytoVirusAdmin_1278792_263840balance_login29104662/delete_admin/<?php echo $key['id']; ?>" onclick="<?php if ($key['role'] == 0) { echo "return confirm('Are you sure you want to delete this record?');"; } else { echo "return false;"; } ?> "><em class="ti ti-trash"></em> Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            <?php } ?>
                            <?php } ?>
                            </tr><!-- .data-item -->
                        </tbody>
                    </table>
                </div><!-- .card-innr -->
            </div><!-- .card -->
        </div><!-- .container -->
    </div><!-- .page-content -->
    
    <?php require_once APPPATH.'/views/admin/admin_view/footer.php' ?>