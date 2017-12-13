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

   <!-- CSS and JS link -->
   <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet">
   <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
   <link href="<?php echo base_url('css/main_style.css'); ?>" rel="stylesheet">
   <script src="<?php // echo base_url('js/main.js'); ?>"></script>

   <!-- Bootstrap core CSS & JS online -->
   <script src="<?php echo base_url('js/jquery-3.2.1.min.js'); ?>"></script>
   <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>

   <!-- DataTable 1.10.16 -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('extensions/DataTables/datatables.min.css'); ?>"/>
   <script type="text/javascript" src="<?php echo base_url('extensions/DataTables/datatables.min.js'); ?>"></script>
   <!-- Using DataTables -->
   <script type="text/javascript">
   $(document).ready(function () {
       $('#<?php echo $idTable; ?>').DataTable({
         "language" : {
           "url" : "//cdn.datatables.net/plug-ins/1.10.16/i18n/Vietnamese.json"
       }
     });
   });
   </script>

   <!-- JSTree 3.3.4 -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('extensions/jstree/dist/themes/default/style.min.css'); ?>"/>
   <script type="text/javascript" src="<?php echo base_url('extensions/jstree/dist/jstree.min.js'); ?>"></script>

   <!-- College of ICT - Can Tho University Library -->
   <link href="http://cit.ctu.edu.vn/quanlylaodong/css/main.css" rel="stylesheet">
   <link rel="stylesheet" href="http://cit.ctu.edu.vn/quanlylaodong/css/login.css"/>

   <!-- Ho Chi Minh University of Sciences - Viet Nam University, Ho Chi Minh City Library -->
   <link href="http://sam.doantn.hcmus.edu.vn/static/v2/styles/common.css" rel="stylesheet">

   <!-- CSS and JS internal -->
   <!-- <style type="text/css">

    </style> -->
</head>
<body id="page-header">
  <!-- <div class="loader modal-backdrop">
            <img alt="Đang xử lý ..." src="http://cit.ctu.edu.vn/quanlylaodong/img/puff.svg">
            <h5>Đang xử lý ...</h5>
	</div> -->
  <!--Menu bar-->
  <!-- Fixed navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top app-menu" role="navigation">
        <div class="container">
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

          <!-- <div class="collapse navbar-collapse" id="ctudocsnavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php // echo base_url(); ?>">Trang chủ</a></li>
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
          </div> --><!-- /.navbar-collapse -->
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
<div class="con">

<!-- Load subview -->
<?php $this->load->view($subview); ?>

</div>
</body>
<div class="footer">
    <div class="container">
        <div class="col-md-12 contact">
            Khoa Công nghệ Thông tin &amp; Truyền thông - Trường Đại học Cần Thơ<br>
	                                 Khu 2, đường 3/2, Phường Xuân Khánh, Q. Ninh Kiều, TP. Cần Thơ, Việt Nam;<br>
	                                 Điện thoại: 84 710 &nbsp;3831301; Fax: <span style="font-size: 10pt; font-family: 'Arial','sans-serif';">84 710 3830841; Email: <a href="http://www.cit.ctu.edu.vn">Webmaster@cit.ctu.edu.vn</a></span></div>
    </div>
</div>

</html>
