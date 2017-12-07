<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta http-equiv="content-Type" content="text/html; charset=utf-8">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title><?php echo $titlePage; ?></title>
    <meta name="robots" content="INDEX, FOLLOW" />
    <link rel="icon" href="<?php echo base_url('images/ctu_logo.gif'); ?>" type="image/png">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <!-- Bootstrap core JS -->
   <script src="<?php // echo base_url('js/main.js'); ?>"></script>

   <!-- ImportCSS -->
   <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet">
   <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">

   <!-- Bootstrap core CSS & JS online -->
   <script src="<?php echo base_url('js/jquery-3.2.1.min.js'); ?>"></script>
   <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>

   <!-- DataTable 1.10.16 -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('DataTables/datatables.min.css'); ?>"/>
   <script type="text/javascript" src="<?php echo base_url('DataTables/datatables.min.js'); ?>"></script>
</head>
<body id="page-header">
  <!--Menu bar-->
  <!-- Fixed navbar -->
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <a href="<?php echo base_url(); ?>"><img class="navbar-left logo-ctu" src="<?php echo base_url('images/ctu_logo.gif'); ?>" alt="logo-CTU"></a>
            <a class="navbar-brand" href="<?php echo base_url(); ?>"> HỆ THỐNG ĐIỂM DANH </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ctudocsnavbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
          </div>

          <div class="collapse navbar-collapse" id="ctudocsnavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo base_url(); ?>">Trang chủ</a></li>
              <li><a href="#">Đóng góp đề cương</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">AdminCP</a></li>
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">AdminCP
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><a href="#"><span class="glyphicon glyphicon-cloud"></span><strong> Trang quản trị</strong></a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-user"></span><strong> Tài khoản</strong></a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-cog"></span><strong> Cài đặt</strong></a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span><strong> Đăng xuất</strong></a></li>
                  </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

  <script type="text/javascript">
  $(document).click(function(e) {
  if (!$(e.target).is('a')) {
      $('.collapse').collapse('hide');
    }
  });
  </script>
<!-- End Nav -->

<!-- Load subview -->
<?php $this->load->view($subview); ?>

</body>
<footer class="mt-5">
    <hr>
        <div class="text-center center-block">
            <p class="txt-railway">- Ngthuc.com -</p>
        </div>
</footer>
</html>
