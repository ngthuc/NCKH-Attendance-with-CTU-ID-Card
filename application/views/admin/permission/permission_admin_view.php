<div class="container">
  <div class="page-header">
    <h1>Quản lý quyền truy cập</h1>
    <a href="<?php echo base_url('admin/'); ?>" class="btn btn-default">Quay lại trang quản trị</a>
    <a href="#" class="btn btn-success">Thêm nhóm quyền mới</a>
    <a href="<?php echo base_url('admin/permissions/custom/'); ?>" class="btn btn-primary">Tùy biến nhóm quyền</a>
  </div>
  <div class="col-md-12 table-responsive">
    <table class="table">
      <thead>
        <th>STT</th>
        <th>Tên nhóm quyền</th>
        <th>Mô tả</th>
        <th>Quản lý</th>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Admin</td>
          <td>Mô tả</td>
          <td>
            <a href="<?php echo base_url('admin/permissions/custom/'); ?>1" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
            <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span></a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Manager</td>
          <td>Mô tả</td>
          <td>
            <a href="<?php echo base_url('admin/permissions/custom/'); ?>2" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
            <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span></a>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>User</td>
          <td>Mô tả</td>
          <td>
            <a href="<?php echo base_url('admin/permissions/custom/'); ?>3" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
            <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span></a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
