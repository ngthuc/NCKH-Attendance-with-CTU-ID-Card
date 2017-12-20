<div class="container">
  <div class="page-header">
    <h1>Quản lý quyền truy cập</h1>
  </div>
  <div class="col-md-12 table-responsive">
    <table class="table">
      <thead>
        <th>STT</th>
        <th>Tên nhóm quyền</th>
        <th>Quản lý</th>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Admin</td>
          <td>
            <a href="<?php echo base_url('admin/permissions/custom/'); ?>1" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
            <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span></a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Manager</td>
          <td>
            <a href="<?php echo base_url('admin/permissions/custom/'); ?>2" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
            <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span></a>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>User</td>
          <td>
            <a href="<?php echo base_url('admin/permissions/custom/'); ?>3" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
            <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span></a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
