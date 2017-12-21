<div class="container">
  <div class="page-header">
    <h1>Quản lý thẻ RFID</h1>
    <a href="<?php echo base_url('admin/'); ?>" class="btn btn-default">Quay lại trang quản trị</a>
    <a href="#" class="btn btn-success">Cấp phát thẻ mới</a>
  </div>
  <div class="col-md-12">
    <table class="table" id="datatables">
      <thead>
        <th>STT</th>
        <th>Mã thẻ</th>
        <th>Mã số định danh</th>
        <th>Quản lý</th>
      </thead>
      <tbody>
        <?php $stt = 0;
        foreach ($content as $key => $row) {
          $stt++;
          echo '<tr>
            <td>'.$stt.'</td>
            <td>'.$row['idCard'].'</td>
            <td>'.$row['personalID'].'</td>
            <td>
              <a href="#" class="btn btn-info view-info" data-id="'.$row['personalID'].'"><span class="glyphicon glyphicon-user"></span></a>
              <a href="#" class="btn btn-primary edit-card" data-id="'.$row['idCard'].'"><span class="glyphicon glyphicon-edit"></span></a>
              <a href="#" class="btn btn-danger delete-card" data-id="'.$row['idCard'].'"><span class="glyphicon glyphicon-remove"></span></a>
            </td>
          </tr>';
        } ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Load ajax -->
<script type="text/javascript">
$('.view-info').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});

$('.edit-card').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});

$('.delete-card').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});
</script>
