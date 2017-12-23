<div class="container">
  <div class="page-header">
    <h1>Quản lý sự kiện</h1>
    <a href="<?php echo base_url('admin/'); ?>" class="btn btn-default">Quay lại trang quản trị</a>
    <a href="#" class="btn btn-success">Thêm sự kiện mới</a>
  </div>
  <div class="col-md-12">
    <table class="table" id="datatables">
      <thead>
        <th>STT</th>
        <th>Tên sự kiện</th>
        <th>Thời gian diễn ra</th>
        <th>Địa điểm</th>
        <th>Mô tả</th>
        <th>Người đăng</th>
        <th>Đơn vị tổ chức</th>
        <th>Test</th>
        <th>Quản lý</th>
      </thead>
      <tbody>
        <?php $stt = 0;
        foreach ($content as $key => $row) {
          $stt++;
          $creator = $this->Maccount->getByUsername($row['userCreator']);
          $organization = $this->Morg->getOrgById($row['idOrg']);
          date_default_timezone_set('Asia/Ho_Chi_Minh');
          echo '<tr>
            <td>'.$stt.'</td>
            <td>'.$row['nameEvent'].'</td>
            <td>'.$row['timeStart'].'<br />'.$row['dateEvent'].'</td>
            <td>'.$row['locationEvent'].'</td>
            <td>'.$row['descriptionEvent'].'</td>
            <td>'.$creator['name'].'</td>
            <td>'.$organization['text'].'</td>
            <td>';
            $time = $row['dateEvent'].' '.$row['timeStart'];
            echo $this->Mtime->time_stamp(strtotime($time));
            echo '</td>
            <td>
              <button class="btn btn-primary edit-event" data-id="'.$row['id'].'"><span class="glyphicon glyphicon-edit"></span></button>
              <button class="btn btn-danger delete-event" data-id="'.$row['id'].'"><span class="glyphicon glyphicon-remove"></span></button>
            </td>
          </tr>';
        } ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Load ajax -->
<script type="text/javascript">
$('.edit-event').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});

$('.delete-event').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});
</script>
