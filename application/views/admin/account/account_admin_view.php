<div class="container">
  <div class="page-header">
    <h1>Quản lý tài khoản</h1>
    <a href="<?php echo base_url('admin/'); ?>" class="btn btn-default">Quay lại trang quản trị</a>
    <a href="#" class="btn btn-success">Cấp phát tài khoản mới</a>
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
