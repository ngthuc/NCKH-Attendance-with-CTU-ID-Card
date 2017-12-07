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
   <!-- <script src="<?php //echo base_url('js/main.js'); ?>"></script> -->

   <!-- ImportCSS -->
   <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet">

   <!-- Latest compiled and minified CSS -->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

   <!-- Optional theme -->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

   <!-- Latest compiled and minified JavaScript -->
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
   <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">

   <!-- Bootstrap core CSS & JS online -->
   <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
   <script src="<?php echo base_url('js/jquery-3.2.1.min.js'); ?>"></script>
   <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
</head>
<body id="page-header">
  <!--Menu bar-->
  <!-- Fixed navbar -->
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <a href="<?php echo base_url(); ?>"><img class="navbar-left logo-ctu" src="<?php echo base_url('images/ctu_logo.gif'); ?>" alt="logo-CTU"></a>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">Tìm kiếm Đề cương</a>
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

  <!-- <script type="text/javascript">
  $(document).click(function(e) {
  if (!$(e.target).is('a')) {
      $('.collapse').collapse('hide');
    }
  });
  </script> -->
<!-- End Nav -->
<?php $this->load->view($subview); ?>
</body>
<footer class="mt-5">
    <hr>
        <div class="text-center center-block">
            <p class="txt-railway">- Ngthuc.com -</p>
        </div>
</footer>
</html>
