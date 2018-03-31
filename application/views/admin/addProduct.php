<?php 
    $this->load->view('admin/head_left.php');
    $this->load->view('admin/left_panel.php'); 
    // echo "<pre>";
    // var_dump($provider);
    // var_dump($category);
    // die();
?>

   

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="count bg-danger">5</span>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="notification">
                        <p class="red">You have 3 Notification</p>
                        <a class="dropdown-item media bg-flat-color-1" href="#">
                            <i class="fa fa-check"></i>
                            <p>Server #1 overloaded.</p>
                        </a>
                        <a class="dropdown-item media bg-flat-color-4" href="#">
                            <i class="fa fa-info"></i>
                            <p>Server #2 overloaded.</p>
                        </a>
                        <a class="dropdown-item media bg-flat-color-5" href="#">
                            <i class="fa fa-warning"></i>
                            <p>Server #3 overloaded.</p>
                        </a>
                      </div>
                    </div>

                    <div class="dropdown for-message">
                      <button class="btn btn-secondary dropdown-toggle" type="button"
                            id="message"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ti-email"></i>
                        <span class="count bg-primary">9</span>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="message">
                        <p class="red">You have 4 Mails</p>
                        <a class="dropdown-item media bg-flat-color-1" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                            <span class="message media-body">
                                <span class="name float-left">Jonathan Smith</span>
                                <span class="time float-right">Just now</span>
                                    <p>Hello, this is an example msg</p>
                            </span>
                        </a>
                        <a class="dropdown-item media bg-flat-color-4" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                            <span class="message media-body">
                                <span class="name float-left">Jack Sanders</span>
                                <span class="time float-right">5 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </span>
                        </a>
                        <a class="dropdown-item media bg-flat-color-5" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                            <span class="message media-body">
                                <span class="name float-left">Cheryl Wheeler</span>
                                <span class="time float-right">10 minutes ago</span>
                                    <p>Hello, this is an example msg</p>
                            </span>
                        </a>
                        <a class="dropdown-item media bg-flat-color-3" href="#">
                            <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                            <span class="message media-body">
                                <span class="name float-left">Rachel Santos</span>
                                <span class="time float-right">15 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </span>
                        </a>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>

                <div class="language-select dropdown" id="language-select">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                        <i class="flag-icon flag-icon-us"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="language" >
                        <div class="dropdown-item">
                            <span class="flag-icon flag-icon-fr"></span>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-es"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-us"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-it"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">Basic</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-4">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Basic Form</strong> Elements
                        </div>
                        <div class="card-body card-block">
                            <form action="<?php echo base_url().'Admin/addProduct' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">
                                            Tên Sản Phẩm
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="tensanpham" placeholder="Tên sản phẩm" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">
                                            Mã sản phẩm
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="email-input" name="masanpham" placeholder=" Mã sản phẩm" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">
                                            Giá Nhập
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="gianhap"  class="form-control" placeholder="Giá Nhập">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="password-input" class=" form-control-label">
                                            Kiểu dáng
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="password-input" name="kieudang" placeholder="Kiểu dáng" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="disabled-input" class=" form-control-label">
                                            Chất Liệu
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input" name="chatlieu" placeholder="Chất Liệu"  class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="password-input" class=" form-control-label">
                                            Kích Cỡ
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="password-input" name="kichco" placeholder="Kích Cỡ" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="password-input" class=" form-control-label">
                                            Màu Sắc
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="password-input" name="mausac" placeholder="Màu Sắc" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="password-input" class=" form-control-label">
                                            Giá Bán
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="password-input" name="giaban" placeholder="Giá Bán" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="password-input" class=" form-control-label">
                                            Top
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="password-input" name="top" placeholder="Top" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Danh mục sản phẩm</label></div>
                                    <div class="col-12 col-md-9">
                                      <select name="id_danhmucsanpham" id="select" class="form-control">
                                        <?php foreach ($category as $key => $value) {?>
                                            <option value="<?php echo $value->id  ?>">
                                                <?php echo $value->tendanhmuc ?>
                                            </option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Nhà Cung Cấp</label></div>
                                    <div class="col-12 col-md-9">
                                      <select name="idnhacungcap" id="select" class="form-control">
                                        <?php foreach ($provider as $key => $value) {?>
                                            <option value="<?php echo $value->id  ?>">
                                                <?php echo $value->tennhacungcap ?>
                                            </option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <input type="file" id="text-input" name="anhsanpham[]" class="form-control" multiple="true">
                                </div>
                                <div class="row form-group">
                                    <input type="file" id="text-input" name="image[]" class="form-control" multiple="true">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
</div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?php echo base_url().'public/assets/js/vendor/jquery-2.1.4.min.js' ?>"></script>
    <script src="<?php echo base_url().'public/assets/js/popper.min.js' ?>"></script>
    <script src="<?php echo base_url().'public/assets/js/plugins.js' ?>"></script>
    <script src="<?php echo base_url().'public/assets/js/main.js' ?>"></script>


</body>
</html>

