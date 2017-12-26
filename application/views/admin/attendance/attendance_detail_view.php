<div class="container">
  <div class="page-header">
    <h1>Quản lý điểm danh cho sự kiện <?php echo $event; ?></h1>
    <a href="<?php echo base_url('admin/'); ?>" class="btn btn-default">Quay lại trang quản trị</a>
    <a href="<?php echo base_url('admin/attendance/'); ?>" class="btn btn-info">Quay lại trang quản lý điểm danh</a>
  </div>
  <div class="col-md-12">
    <table class="table" id="datatables">
      <thead>
        <th>STT</th>
        <th>Họ tên</th>
        <th>Mã số cá nhân</th>
        <th>Thời gian vào</th>
        <th>Thời gian ra</th>
        <th>Quản lý</th>
      </thead>
      <tbody>
        <?php
          $stt = 1;
          foreach ($content as $key => $row) {
            $joiner = $this->Mrfid->getByCard($row['idCard']);
            if ($joiner['isStudent'] == 1) {
               $student = $this->Mstudent->getById($joiner['personalID']);
               $name = $student['lastNameStudent'].' '.$student['firstNameStudent'];
            } else if ($joiner['isStudent'] == 0) {
               $staff = $this->Mstaff->getById($joiner['personalID']);
               $name = $staff['lastNameStaff'].' '.$staff['firstNameStaff'];
            } else {
               $name = '<i>Không tồn tại</i>';
            }
            echo '<tr>
              <td>'.$stt.'</td>
              <td>'.$name.'</td>
              <td>'.$joiner['personalID'].'</td>
              <td>'.$row['timeIn'].'</td>
              <td>'.$row['timeOut'].'</td>
              <td>
                <button class="btn btn-primary edit-attendance" data-id="'.$row['id'].'"><span class="glyphicon glyphicon-edit"></span></button>
                <button class="btn btn-danger delete-attendance" data-id="'.$row['id'].'"><span class="glyphicon glyphicon-remove"></span></button>
              </td>
            </tr>';
            $stt++;
          }
        ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Load ajax -->
<script type="text/javascript">
$('.edit-attendance').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});

$('.delete-attendance').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});
</script>
