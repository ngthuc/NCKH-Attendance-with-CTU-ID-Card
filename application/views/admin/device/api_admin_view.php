<div class="container">
  <div class="page-header">
    <h1>Quản lý API</h1>
    <a href="<?php echo base_url('admin/'); ?>" class="btn btn-default">Quay lại trang quản trị</a>
    <a href="<?php echo base_url('admin/device_admin/'); ?>" class="btn btn-info">Quản lý thiết bị</a>
    <button class="btn btn-success" data-toggle="modal" data-target="#new-api">Cấp phát key mới</button>
  </div>
  <div class="col-md-12">
    <table class="table" id="datatables">
      <thead>
        <th>STT</th>
        <th>Thiết bị được đăng ký</th>
        <th>Tình trạng API</th>
        <th>Quản lý</th>
      </thead>
      <tbody>
        <?php $stt = 0;
        foreach ($content as $key => $row) {
          $stt++;
          $device = $this->Mdevice->getByIdApi($row['id']);
          echo '<tr>
            <td>'.$stt.'</td>
            <td>';
            if ($device) echo $device['name'];
            else echo '<i>Còn trống</i>';
            echo '</td>
            <td>';
            if ($row['statusApi'] == 1) echo '<span class="label label-success">Hoạt động</span>';
            else if ($row['statusApi'] == 0) echo '<span class="label label-danger">Đang khóa</span>';
            else echo '<span class="label label-default">Không rõ tình trạng</span>';
            echo '</td>
            <td>';
            if ($row['statusApi'] == 1) echo '<button class="btn btn-warning lock-key" data-id="'.$row['id'].'"><span class="glyphicon glyphicon-lock"></span></button>';
            else if ($row['statusApi'] == 0) echo '<button class="btn btn-success unlock-key" data-id="'.$row['id'].'"><span class="glyphicon glyphicon-lock"></span></button>';
            echo '<button class="btn btn-primary edit-key" data-id="'.$row['id'].'"><span class="glyphicon glyphicon-edit"></span></button>
              <button class="btn btn-danger delete-key" data-id="'.$row['id'].'"><span class="glyphicon glyphicon-remove"></span></button>
            </td>
          </tr>';
        } ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Load ajax -->
<script type="text/javascript">
$('.lock-key').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});

$('.unlock-key').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});

$('.edit-key').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});

$('.delete-key').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});
</script>

<!-- Add new device -->
<div class="modal fade" id="new-api" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <form class="form-horizontal" action="<?php echo base_url('execute/add_api');?>" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Cấp phát key mới</h4>
      </div>
      <div class="modal-body">
        <label for="key">Secret Key</label>
        <input type="text" name="key" id="key" class="form-control" placeholder="Nhập secret key" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="addNew" class="btn btn-primary">Thêm mới</button>
      </div>
    </div>
    </form>
  </div>
</div>
