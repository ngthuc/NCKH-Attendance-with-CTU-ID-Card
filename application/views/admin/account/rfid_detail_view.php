<div class="container">
  <div class="page-header">
    <h1>Quản lý thẻ RFID - Chi tiết định danh</h1>
    <a href="<?php echo base_url('admin/'); ?>" class="btn btn-default">Quay lại trang quản trị</a>
    <a href="<?php echo base_url('admin/rfid_account'); ?>" class="btn btn-primary">Quay lại trang quản lý thẻ RFID</a>
    <a href="#" class="btn btn-success">Định danh thẻ mới</a>
  </div>
  <div class="col-md-12">
    <table class="table">
      <thead>
        <!-- <th>STT</th> -->
        <th>Mã số định danh</th>
        <th>Họ tên định danh</th>
        <th>Đơn vị</th>
        <th>Quản lý</th>
      </thead>
      <tbody>
        <?php
        if ($typeName == 'Student') {
          $db = $this->Mmajor->getById($content['idMajor']);
          $idfaculty = $db['idFaculty'];
          $unit = $db['nameMajor'];
          $mfaculty = $this->Mfaculty->getById($idfaculty);
        } else if ($typeName == 'Staff') {
          $db = $this->Mdepartment->getById($content['idDepartment']);
          $idfaculty = $db['idFaculty'];
          $unit = $db['nameDepartment'];
          $mfaculty = $this->Mfaculty->getById($idfaculty);
        } else $unit = null;
          if ($mfaculty) {
            $faculty = $mfaculty['nameFaculty'];
          } else $faculty = null;
          echo '<tr>
            <td>'.$content[$typeID].'</td>
            <td>'.$content['lastName'.$typeName].' '.$content['firstName'.$typeName].'</td>
            <td>'.$unit.' - '.$faculty.'</td>
            <td>
              <a href="#" class="btn btn-primary edit-info" data-id="'.$content[$typeID].'"><span class="glyphicon glyphicon-edit"></span></a>
              <a href="#" class="btn btn-danger delete-info" data-id="'.$content[$typeID].'"><span class="glyphicon glyphicon-remove"></span></a>
            </td>
          </tr>';
        // }
        ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Load ajax -->
<script type="text/javascript">
$('.edit-info').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});

$('.delete-info').on('click', function() {
   // load_ajax_update($(this).data('id'),$(this).data('monhoc'));
   alert($(this).data('id'));
});
</script>
