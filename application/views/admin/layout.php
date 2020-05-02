<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="assets/summernote/summernote.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Dash</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Dashboard</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/Admin.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="assets/Admin.png" class="img-circle" alt="User Image">
                <p>
                  Admin
                  <small></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
              	<div class="pull-left">
                  <a href="profile" class="btn bg-purple btn-flat margin">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="first" class="btn bg-maroon btn-flat margin">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/Admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="<?php echo ($active == "dashboard" ? "active " : ""); ?>">
          <a href="dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="label label-primary pull-right"></i>
            </span>
          </a>
        </li>
        <li class="<?php echo ($active == "firstpage" || $active == "landingpage" ? "active " : ""); ?> treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Landing System</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo ($active == "firstpage" ? "active " : ""); ?>"><a href="adminfirst"><i class="fa fa-circle-o"></i> firstpage </a></li>
            <li class="<?php echo ($active == "landingpage" ? "active " : ""); ?>"><a href="adminlanding"><i class="fa fa-circle-o"></i> landingpage </a></li>
          </ul>
        </li>
        
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php
          echo $title;
        ?>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row content">
        <?php
          $this->load->view($contentview);
        ?>
      </div>
    </section>
  </div>
</div>

<!-- modal -->
<div class="modal" id="modal-info">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Comments</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
              <div class="form-group">
                  <label class="col-sm-3 control-label">Comments</label>
                  <div class="col-sm-8">
                    <textarea id="modal_comments" style="width: 100%; height: 100%;"></textarea>
                  </div>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" id="modal_update" class="btn btn-warning update-siswa" data-dismiss="modal">Update</button>
      </div>
    </div>
  </div>
</div>
<!-- /.modal -->


<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="assets/summernote/summernote.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    var id = '';
    $('#example1').DataTable()

    $('.detail-siswa').click (function() {
      id = this.id;

      $.ajax({
        url: '<?php echo base_url() ?>getmodal',
        data: {'id': id},
        type: 'POST',
        success: function(data) {
          $('#modal_comments').val(data);
          $('#modal-info').modal("show");
        }
      });
    });

    $('.update-siswa').click(function () {
      var comments = $('#modal_comments').val();
      $.ajax({
        url: '<?php echo base_url() ?>savemodal',
        data: {'id': id, 'comments': comments},
        type: 'POST',
        success: function(data) {
          if (data) {
            parent.location.href = '<?php echo base_url() ?>dashboard';
          } else {
            alert("error");
          }
        }
      });
    });
  });
</script>
</body>
</html>
