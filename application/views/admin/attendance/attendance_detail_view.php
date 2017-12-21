<div class="container">
  <div class="page-header">
    <h1>Quản lý điểm danh cho sự kiện <?php echo $idEvent; ?></h1>
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
        <tr>
          <td>1</td>
          <td>Nguyễn Văn A</td>
          <td>B1401234</td>
          <td>07:01</td>
          <td>10:12</td>
          <td>
            <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
            <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span></a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Trần Văn B</td>
          <td>B1401235</td>
          <td>07:11</td>
          <td>09:59</td>
          <td>
            <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
            <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span></a>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Phạm Thị C</td>
          <td>B1401236</td>
          <td>06:59</td>
          <td>10:32</td>
          <td>
            <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
            <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span></a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>