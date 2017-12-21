<div class="container">
  <div class="page-header">
    <h1>Quản lý phân quyền</h1>
    <a href="<?php echo base_url('admin/permissions/'); ?>" class="btn btn-default">Quay lại trang phân quyền</a>
    <a href="<?php echo base_url('admin/permissions/add'); ?>" class="btn btn-success">Thêm nhóm quyền mới</a>
  </div>
  <form class="form-horizontal" action="#" method="POST">
    <div class="form-group">
      <div class="col-sm-12">
        <div class="col-sm-4">
          <p><strong>Tên nhóm quyền</strong></p>
          <input class="form-control" name="role" type="text" placeholder="Nhập tên nhóm quyền">
        </div>
        <div class="col-sm-8">
            <p><strong>Mô tả nhóm quyền</strong></p>
            <input class="form-control" name="mota" type="text" placeholder="Nhập mô tả quyền">
        </div>
      </div>
      <div class="col-sm-12 roles-admin">
          <p><strong>Tùy biến phân quyền của nhóm</strong></p>
          <script language="JavaScript">
            function toggle(source) {
              checkboxes = document.getElementsByName('add[]');
              for(var i=1, n=checkboxes.length;i<n;i++) {
                checkboxes[i].checked = source.checked;
              }
            }
          </script>
      </div>
      <div class="col-sm-12 roles-admin">
          <script language="JavaScript">
            function toggle(source) {
              checkboxes = document.getElementsByName('add[]');
              for(var i=1, n=checkboxes.length;i<n;i++) {
                checkboxes[i].checked = source.checked;
              }
            }
          </script>
          <div class="col-sm-12">
            <label for="roleGroup">Chức năng nhóm quyền</label><br  />
            <input type="checkbox" onClick="toggle(this)" id="roleGroup"> Chọn tất cả
            <input type="checkbox" name='add[]' value="fullcontrol" onClick="toggle(this)">Tất cả quyền
          </div>
          <div class="col-sm-4">
            <p><strong>Nhóm quyền xem</strong></p>
            <input type="checkbox" name='add[]' value="device">Xem danh sách thiết bị<br />
            <input type="checkbox" name='add[]' value="borrowDevice">Đăng ký mượn thiết bị<br />
            <input type="checkbox" name='add[]' value="members">Xem danh sách thành viên<br />
            <input type="checkbox" name='add[]' value="project">Xem danh sách dự án<br />
            <input type="checkbox" name='add[]' value="labs">Xem danh sách Labs<br />
            <input type="checkbox" name='add[]' value="profile">Xem thông tin thành viên<br />
            <input type="checkbox" name='add[]' value="search">Sử dụng Tìm kiếm<br />
            <input type="checkbox" name='add[]' value="dashboard">Truy cập AdminCP<br />
            <p><strong>Nhóm quyền SAF</strong></p>
            <input type="checkbox" name='add[]' value="rolesAD">Quản lý nhóm quyền<br />
            <input type="checkbox" name='add[]' value="account">Quản lý tài khoản<br />
            <input type="checkbox" name='add[]' value="mailCP">Quản lý tính năng email<br />
            <input type="checkbox" name='add[]' value="urlCP">Quản lý tính năng URL<br />
          </div>
          <div class="col-sm-4">
            <p><strong>Nhóm quyền thêm/xóa</strong></p>
            <input type="checkbox" name='add[]' value="addDevice">Thêm thiết bị<br />
            <input type="checkbox" name='add[]' value="removeDevice">Xóa thiết bị<br />
            <input type="checkbox" name='add[]' value="addMember">Thêm thành viên<br />
            <input type="checkbox" name='add[]' value="removeMember">Xóa thành viên<br />
            <input type="checkbox" name='add[]' value="addProject">Thêm dự án<br />
            <input type="checkbox" name='add[]' value="removeProject">Xóa dự án<br />
            <input type="checkbox" name='add[]' value="addLabs">Thêm Labs<br />
            <input type="checkbox" name='add[]' value="removeLab">Xóa Labs<br />
            <input type="checkbox" name='add[]' value="addPartner">Thêm đối tác<br />
            <input type="checkbox" name='add[]' value="removePartner">Xóa đối tác<br />
          </div>
          <div class="col-sm-4">
            <p><strong>Nhóm quyền chỉnh sửa/quản lý</strong></p>
            <p><strong> * Nhóm quyền quản lý cơ bản</strong></p>
            <input type="checkbox" name='add[]' value="deviceCP">Quản lý thiết bị<br />
            <input type="checkbox" name='add[]' value="borrowDeviceCP">Quản lý mượn thiết bị<br />
            <input type="checkbox" name='add[]' value="membersCP">Quản lý thành viên<br />
            <input type="checkbox" name='add[]' value="projectCP">Quản lý dự án<br />
            <input type="checkbox" name='add[]' value="labsCP">Quản lý Lab<br />
            <input type="checkbox" name='add[]' value="producerCP">Quản lý đối tác<br />
            <p><strong> * Nhóm quyền quản lý cao cấp</strong></p>
            <input type="checkbox" name='add[]' value="imagesCP">Quản lý hình ảnh<br />
            <input type="checkbox" name='add[]' value="rolesCP">Thay đổi quyền thành viên<br />
            <input type="checkbox" name='add[]' value="profileCP">Thay đổi thông tin thành viên<br />
            <input type="checkbox" name='add[]' value="settingCP">Quản lý cài đặt<br />
            <input class="hidden"><br />
          </div>
          <input type="submit" class="btn btn-primary" name="saveRole" value="Lưu">
      </div>
    </div>
  </form>
</div>
