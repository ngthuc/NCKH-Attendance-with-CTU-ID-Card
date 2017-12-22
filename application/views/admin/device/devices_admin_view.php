<div class="container">
  <div class="page-header">
    <h1>Quản lý thiết bị và API</h1>
    <a href="<?php echo base_url('admin/'); ?>" class="btn btn-default">Quay lại trang quản trị</a>
    <a href="<?php echo base_url('admin/api_admin/'); ?>" class="btn btn-info">Quản lý API</a>
    <a href="#" class="btn btn-success">Đăng ký thiết bị mới</a>
  </div>
  <div class="col-md-12">
    <table class="table" id="datatables">
      <thead>
        <th>STT</th>
        <th>Tên định danh</th>
        <th>Số se-ri</th>
        <th>Ngày đăng ký</th>
        <th>Tình trạng cấp phép</th>
        <th>Quản lý</th>
      </thead>
      <tbody>
        <?php $stt = 0;
        foreach ($content as $key => $row) {
          $stt++;
          $key = $this->Mkey->getById($row['idApi']);
          echo '<tr>
            <td>'.$stt.'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['serialnumber'].'</td>
            <td>'.$row['registerdate'].'</td>
            <td>';
            if ($key) echo '<span class="glyphicon glyphicon-ok" style="color:green;"><i> Đã cấp phép</i></span>';
            else echo '<i style="color:red;">Chưa cấp phép</i>';
            echo '</td>
            <td>
              <button class="btn btn-primary edit-device" data-id="'.$row['id'].'"><span class="glyphicon glyphicon-edit"></span></button>
              <button class="btn btn-danger delete-device" data-id="'.$row['id'].'"><span class="glyphicon glyphicon-remove"></span></button>
            </td>
          </tr>';
        } ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Load ajax -->
<script type="text/javascript">
$('.edit-device').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});

$('.delete-device').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});
</script>
