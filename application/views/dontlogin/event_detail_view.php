<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="section-header-wrap section-header-default">
        <div class="section-header">Thông tin hoạt động</div>
      </div>
      <div class="form-group">
        <span><i class="fa fa-graduation-cap"></i><strong>Năm học: </strong></span>
          2017-2018
          <br>
        <span><i class="fa fa-home"></i><strong>Đơn vị tổ chức: </strong></span>
          <a href="<?php echo base_url('/organizations/org/5/')?>">Chi Đoàn 14TTH2</a>
          <br>
        <span><i class="fa fa-calendar"></i><strong>Thời gian: </strong></span>
          08/12/2017 00:00 - 14/12/2017 23:55
          <br>
        <span><i class="fa fa-map-marker"></i><strong>Địa điểm: </strong></span>
          <i>Chưa có</i>
          <br>
        <span><i class="fa fa-certificate"></i><strong>Thời gian đăng ký: </strong></span>
          <i>Chưa có</i><?php if ($personalJoined) { echo '
          <br>
        <span><i class="fa fa-certificate"></i><strong style="color:red">Kết quả tra cứu: </strong></span>';
        if ($isJoined == 'YES') { echo 'Có tham gia';} else { echo '
          <i>Không tham gia sự kiện hoặc không điểm danh</i>'; }}?>
      </div>
    </div>
    <div class="col-md-6">
      <div class="section-header-wrap section-header-default">
        <div class="section-header">Mô tả chi tiết</div>
        <div class="section-header">
          <a href="#" data-toggle="modal" data-target="#registerevent">Đăng ký tham gia</a>
        </div>
        <div class="section-header">
          <a href="#" data-toggle="modal" data-target="#checkjoined">Tra cứu điểm danh</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- modal register -->
<div class="modal fade" id="registerevent" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <form class="form-horizontal" action="<?php echo base_url('event/register'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Đăng ký tham dự sự kiện</h4>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="register">Đăng ký</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- modal check joined -->
<div class="modal fade" id="checkjoined" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <form class="form-horizontal" action="<?php echo base_url(str_replace( '/nckh/', '', $_SERVER['REQUEST_URI'] )); ?>" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Tra cứu điểm danh</h4>
        </div>
        <div class="modal-body">
          <input type="text" name="personalid" class="form-control" placeholder="Nhập mã số cán bộ/sinh viên để tra cứu">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="checked">Tra cứu</button>
        </div>
      </div>
    </form>
  </div>
</div>
