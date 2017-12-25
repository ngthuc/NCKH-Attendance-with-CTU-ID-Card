<div class="container">
  <div class="page-header">
    <h1>Quản lý tổ chức</h1>
    <a href="<?php echo base_url('admin/'); ?>" class="btn btn-default">Quay lại trang quản trị</a>
    <a href="#" class="btn btn-success">Thêm tổ chức mới</a>
  </div>
  <div class="col-md-12">
    <table class="table" id="datatables">
      <thead>
        <th>STT</th>
        <th>Tên tổ chức</th>
        <th>Tổ chức quản lý</th>
        <th>Mô tả</th>
        <th>Quản lý</th>
      </thead>
      <tbody>
        <?php $stt = 0;
        foreach ($content as $key => $row) {
          $stt++;
          $parent = $this->Morg->getOrgById($row['parent']);
          $name = $row['text'];
          echo '<tr>
            <td>'.$stt.'</td>
            <td>'.$name.'</td>
            <td>'.$parent['text'].'</td>
            <td>'.$row['description'].'</td>
            <td>
              <button class="btn btn-primary edit-org" data-id="'.$row['id'].'"><span class="glyphicon glyphicon-edit"></span></button>
              <button class="btn btn-danger delete-org" data-id="'.$row['id'].'"><span class="glyphicon glyphicon-remove"></span></button>
            </td>
          </tr>';
        } ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Load ajax -->
<script type="text/javascript">
$('.edit-org').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});

$('.delete-org').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});
</script>
