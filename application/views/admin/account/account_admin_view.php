<div class="container">
  <div class="page-header">
    <h1>Quản lý tài khoản</h1>
    <a href="<?php echo base_url('admin/'); ?>" class="btn btn-default">Quay lại trang quản trị</a>
    <button class="btn btn-success" data-toggle="modal" data-target="#new-account">Cấp phát tài khoản mới</button>
  </div>
  <div class="col-md-12">
    <table class="table" id="datatables">
      <thead>
        <th>STT</th>
        <th>Tên tài khoản</th>
        <th>Tên người dùng</th>
        <th>Email</th>
        <th>Phân quyền</th>
        <th>Quản lý</th>
      </thead>
      <tbody>
        <?php $stt = 0;
        foreach ($content as $key => $row) {
          $stt++;
          echo '<tr>
            <td>'.$stt.'</td>
            <td>'.$row['username'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'; if ($row['rolename'] == 'admin') {
              echo '<span class="label label-danger">Admin</span>';
            } else if ($row['rolename'] == 'manager') {
              echo '<span class="label label-success">Manager</span>';
            } else if ($row['rolename'] == 'user') {
              echo '<span class="label label-default">User</span>';
            } else echo '<i>Không xác định</i>';
            echo '</td>
            <td>
              <button class="btn btn-primary edit-user" data-id="'.$row['username'].'"><span class="glyphicon glyphicon-edit"></span></button>
              <button class="btn btn-danger delete-user" data-id="'.$row['username'].'"><span class="glyphicon glyphicon-remove"></span></button>
            </td>
          </tr>';
        } ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Load ajax -->
<script type="text/javascript">
$('.edit-user').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});

$('.delete-user').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});
</script>

<!-- Add new event -->
<div class="modal fade" id="new-account" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <form class="form-horizontal" action="<?php echo base_url('execute/add_org');?>" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Cấp phát tài khoản mới</h4>
      </div>
      <div class="modal-body">
        <label for="uid">Tên tài khoản</label>
        <input type="text" name="uid" id="uid" class="form-control" placeholder="Nhập tên tài khoản" required>
        <label for="name">Tên hiển thị</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên bạn muốn hiển thị" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Nhập email của bạn" required>
        <label for="pwd">Mật khẩu</label>
        <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Nhập tên tổ chức" required>
        <label for="org">Quyền hạn</label>
        <select class="form-control" name="org">
          <option value="#"><i>Không có quản lý tại đơn vị</i></option>
          <?php $org = $this->Mrole->getList();
          foreach ($org as $key => $row) {
              echo '<option value="'.$row['id'].'">'.$row['text'].'</option>';
          } ?>
        </select>
        <label for="description">Mô tả</label>
        <input type="text" name="description" id="description" class="form-control" placeholder="Nhập mô tả tổ chức" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="addNew" class="btn btn-primary">Thêm mới</button>
      </div>
    </div>
    </form>
  </div>
</div>
