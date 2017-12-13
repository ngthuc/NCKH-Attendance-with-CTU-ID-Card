<div class="container">
  <div class="row">
    <!-- Thống kê sơ bộ -->
    <legend>Tổng quan</legend>
    <div class="col-md-4">
        <div class="alert alert-info">
          <h1>24125</h1>
          <p>lượt đăng ký tham gia sự kiện</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="alert alert-success">
          <h1>17</h1>
          <p>sự kiện đang diễn ra</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="alert alert-warning">
          <h1>16553</h1>
          <p>cá nhân đã tham gia sự kiện</p>
        </div>
    </div>
    <!-- Truy cập các tính năng quản trị -->
    <legend>Quản trị</legend>
    <div class="col-md-4">
      <a href="<?php echo base_url('admin/event'); ?>">
        <div class="alert alert-warning">
          <div class="form-activity">
            <div class="form-header">
              Quản lý sự kiện
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="<?php echo base_url('admin/attendance'); ?>">
        <div class="alert alert-success">
          <div class="form-activity">
            <div class="form-header">
              Quản lý điểm danh
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="<?php echo base_url('admin/organizations'); ?>">
        <div class="alert alert-danger">
          <div class="form-activity">
            <div class="form-header">
              Quản lý tổ chức và các đơn vị
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="<?php echo base_url('admin/permissions'); ?>">
        <div class="alert alert-info">
          <div class="form-activity">
            <div class="form-header">
              Quản lý phân quyền và quyền truy cập
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="<?php echo base_url('admin/user_account'); ?>">
        <div class="alert alert-success">
          <div class="form-activity">
            <div class="form-header">
              Quản lý tài khoản và người dùng
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <a href="<?php echo base_url('admin/analytics'); ?>">
        <div class="alert alert-warning">
          <div class="form-activity">
            <div class="form-header">
              Báo cáo thống kê
            </div>
          </div>
        </div>
      </a>
    </div>
    <!-- Tính năng khác -->
    <div class="col-md-6">
      <a href="<?php echo base_url('admin'); ?>">
        <div class="alert alert-danger">
          <div class="form-activity">
            <div class="form-header">
              Quay về trang quản trị
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6">
      <a href="<?php echo base_url('admin/device_api'); ?>">
        <div class="alert alert-info">
          <div class="form-activity">
            <div class="form-header">
              Quản lý thiết bị và API
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
<link rel="stylesheet" href="http://cit.ctu.edu.vn/quanlylaodong/css/login.css"/>
