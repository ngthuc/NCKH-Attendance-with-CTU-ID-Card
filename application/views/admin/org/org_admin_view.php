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
          echo '<tr>
            <td>'.$stt.'</td>
            <td>'.$row['name'].'</td>
            <td>'.$parent['name'].'</td>
            <td>'.$row['description'].'</td>
            <td>
              <a href="#" class="btn btn-primary edit-org" data-id="'.$row['id'].'"><span class="glyphicon glyphicon-edit"></span></a>
              <a href="#" class="btn btn-danger delete-org" data-id="'.$row['id'].'"><span class="glyphicon glyphicon-remove"></span></a>
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
