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
   <!-- Using datatables -->
   <script type="text/javascript">
   $(document).ready(function () {
       $('#<?php echo $idTable; ?>').DataTable({
         "language" : {
           "url" : "//cdn.datatables.net/plug-ins/1.10.16/i18n/Vietnamese.json"
       }
     });
   });
   </script>

   <style>
            .loader {
                background: #333;
                height: 100%;
                z-index: 100000;
                color: #fff;
                text-align: center;
                padding-top: 10%;
            }
            body{
                padding-right: 0px !important;
            }
    </style>
    <link href="http://cit.ctu.edu.vn/quanlylaodong/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cit.ctu.edu.vn/quanlylaodong/css/login.css"/>
<style type="text/css">
    body {
        background-color: #32393F !important;
        padding-top: 150px;
    }
    .logo{
        padding: 4px 15px;
    }
    .bootstrap-table{
        background-color: #fff;
    }
    .navbar-menu {
        background-color: #fff;
        margin-bottom: 0;
    }

    .navbar-cmd {
        border-radius: 0;
        border-bottom: none;
        border-top: none;
        margin-bottom: 0;
        box-shadow: 0px 0px 5px 0px rgba(50,50,50,0.3);
        -moz-box-shadow: 0px 0px 5px 0px rgba(50,50,50,0.3);
        -webkit-box-shadow: 0px 0px 5px 0px rgba(50,50,50,0.3);
        z-index: 1;
    }

    .main-content {
        padding-right: 0;
        padding-left: 0;
    }

    .navbar-navi {
        padding-top: 10px;
        padding-left: 0;
    }

    .navbar-navi a{
        color: #777;
        cursor: pointer;
        border-radius: 0 !important;
    }

    .navbar-cmd-btn {
        padding-left: 0;
        padding-right: 0;
        padding-top: 8px;
        margin-left: -10px;
    }
    .footer {
        background-color: #0F1112;
        padding: 15px;
        position: static !important;
    }
    .footer .container .author{
        text-align: center;
    }
    .footer .container .author hr{
        border-top: 1px solid #000 !important;
        border-bottom: 1px solid #222 !important;
    }

    .footer{
        background-image: url("http://cit.ctu.edu.vn/quanlylaodong/img/worldmap.png");
        background-repeat: no-repeat;
        min-height: 100px;
    }
    .contact{
        color: #C3C3C3;
    }
    .contact h3:after{
        content: "";
        display: block;
        background: #5cace2;
        position: absolute;
        height: 1px;
        width: 100px;
        margin: 5px 0px;
    }
    .con{
        min-height: 600px;
    }
    .app-menu{
        background-color: #fff !important;
        border-bottom: 1px solid #fff !important;
          box-shadow: 0 10px 30px rgba(0,0,0,.2);
    }
    .navbar-header a{
        color: #32393F !important;
    }
    .title{
        color: #fff;
    }
</style>

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

<!-- Load subview -->
<?php $this->load->view($subview); ?>

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
