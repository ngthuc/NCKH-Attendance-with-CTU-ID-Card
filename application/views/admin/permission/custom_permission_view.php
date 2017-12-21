<?php $role = array('fullcontrol,device,rolesAD,borrowDevice'); ?>
<div class="container">
  <div class="page-header">
    <h1>Quản lý phân quyền<?php if ($idRole) { echo ' của '.$idRole; } ?></h1>
    <a href="<?php echo base_url('admin/permissions/'); ?>" class="btn btn-default">Quay lại trang phân quyền</a>
    <a href="#" class="btn btn-success">Thêm nhóm quyền mới</a>
    <?php if (!$idRole) { echo '<a href="'.base_url('admin/permissions/custom/').'" class="btn btn-primary">Tùy biến nhóm quyền</a>'; } ?>
  </div>
  <form class="form-horizontal" action="#" method="POST">
    <div class="form-group">
      <div class="col-sm-12">
        <div class="col-sm-4">
          <?php if ($idRole) {
            echo '<p><strong>Nhóm quyền</strong></p>
            <input type="text" class="form-control" name="role" id="disabledInput" value="$roleName" disabled>';
          } else {
            echo '<p><strong>Chọn nhóm quyền</strong></p>
        <select class="form-control" name="role">
          <option value="Admin">Admin</option>
          <option value="Manager">Manager</option>
          <option value="User">User</option>
        </select>';
          } ?>
        </div>
        <div class="col-sm-8">
            <p><strong>Mô tả nhóm quyền</strong></p>
            <input class="form-control" name="mota" type="text" value="<?php // echo $roleDesc;?>" placeholder="Nhập mô tả quyền">
        </div>
      </div>
      <div class="col-sm-12 roles-admin">
          <p><strong>Tùy biến phân quyền của nhóm <?php // echo $roleNamecp;?></strong></p>
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
            <input type="checkbox" name='add[]' value="fullcontrol"<?php if(in_array("fullcontrol",$role)){echo " checked";}?> onClick="toggle(this)">Tất cả quyền
          </div>
          <div class="col-sm-4">
            <p><strong>Nhóm quyền xem</strong></p>
            <input type="checkbox" name='add[]' value="device" <?php if(in_array("device",$role)){echo "checked";}?>>Xem danh sách thiết bị<br />
            <input type="checkbox" name='add[]' value="borrowDevice" <?php if(in_array("borrowDevice",$role)){echo "checked";}?>>Đăng ký mượn thiết bị<br />
            <input type="checkbox" name='add[]' value="members" <?php if(in_array("members",$role)){echo "checked";}?>>Xem danh sách thành viên<br />
            <input type="checkbox" name='add[]' value="project" <?php if(in_array("project",$role)){echo "checked";}?>>Xem danh sách dự án<br />
            <input type="checkbox" name='add[]' value="labs" <?php if(in_array("labs",$role)){echo "checked";}?>>Xem danh sách Labs<br />
            <input type="checkbox" name='add[]' value="profile" <?php if(in_array("profile",$role)){echo "checked";}?>>Xem thông tin thành viên<br />
            <input type="checkbox" name='add[]' value="search" <?php if(in_array("search",$role)){echo "checked";}?>>Sử dụng Tìm kiếm<br />
            <input type="checkbox" name='add[]' value="dashboard" <?php if(in_array("dashboard",$role)){echo "checked";}?>>Truy cập AdminCP<br />
            <p><strong>Nhóm quyền SAF</strong></p>
            <input type="checkbox" name='add[]' value="rolesAD" <?php if(in_array("rolesAD",$role)){echo "checked";}?>>Quản lý nhóm quyền<br />
            <input type="checkbox" name='add[]' value="account" <?php if(in_array("account",$role)){echo "checked";}?>>Quản lý tài khoản<br />
            <input type="checkbox" name='add[]' value="mailCP" <?php if(in_array("mailCP",$role)){echo "checked";}?>>Quản lý tính năng email<br />
            <input type="checkbox" name='add[]' value="urlCP" <?php if(in_array("urlCP",$role)){echo "checked";}?>>Quản lý tính năng URL<br />
          </div>
          <div class="col-sm-4">
            <p><strong>Nhóm quyền thêm/xóa</strong></p>
            <input type="checkbox" name='add[]' value="addDevice" <?php if(in_array("addDevice",$role)){echo "checked";}?>>Thêm thiết bị<br />
            <input type="checkbox" name='add[]' value="removeDevice" <?php if(in_array("removeDevice",$role)){echo "checked";}?>>Xóa thiết bị<br />
            <input type="checkbox" name='add[]' value="addMember" <?php if(in_array("addMember",$role)){echo "checked";}?>>Thêm thành viên<br />
            <input type="checkbox" name='add[]' value="removeMember" <?php if(in_array("removeMember",$role)){echo "checked";}?>>Xóa thành viên<br />
            <input type="checkbox" name='add[]' value="addProject" <?php if(in_array("addProject",$role)){echo "checked";}?>>Thêm dự án<br />
            <input type="checkbox" name='add[]' value="removeProject" <?php if(in_array("removeProject",$role)){echo "checked";}?>>Xóa dự án<br />
            <input type="checkbox" name='add[]' value="addLabs" <?php if(in_array("addLabs",$role)){echo "checked";}?>>Thêm Labs<br />
            <input type="checkbox" name='add[]' value="removeLab" <?php if(in_array("removeLab",$role)){echo "checked";}?>>Xóa Labs<br />
            <input type="checkbox" name='add[]' value="addPartner" <?php if(in_array("addPartner",$role)){echo "checked";}?>>Thêm đối tác<br />
            <input type="checkbox" name='add[]' value="removePartner" <?php if(in_array("removePartner",$role)){echo "checked";}?>>Xóa đối tác<br />
          </div>
          <div class="col-sm-4">
            <p><strong>Nhóm quyền chỉnh sửa/quản lý</strong></p>
            <p><strong> * Nhóm quyền quản lý cơ bản</strong></p>
            <input type="checkbox" name='add[]' value="deviceCP" <?php if(in_array("deviceCP",$role)){echo "checked";}?>>Quản lý thiết bị<br />
            <input type="checkbox" name='add[]' value="borrowDeviceCP" <?php if(in_array("borrowDeviceCP",$role)){echo "checked";}?>>Quản lý mượn thiết bị<br />
            <input type="checkbox" name='add[]' value="membersCP" <?php if(in_array("membersCP",$role)){echo "checked";}?>>Quản lý thành viên<br />
            <input type="checkbox" name='add[]' value="projectCP" <?php if(in_array("projectCP",$role)){echo "checked";}?>>Quản lý dự án<br />
            <input type="checkbox" name='add[]' value="labsCP" <?php if(in_array("labsCP",$role)){echo "checked";}?>>Quản lý Lab<br />
            <input type="checkbox" name='add[]' value="producerCP" <?php if(in_array("producerCP",$role)){echo "checked";}?>>Quản lý đối tác<br />
            <p><strong> * Nhóm quyền quản lý cao cấp</strong></p>
            <input type="checkbox" name='add[]' value="imagesCP" <?php if(in_array("imagesCP",$role)){echo "checked";}?>>Quản lý hình ảnh<br />
            <input type="checkbox" name='add[]' value="rolesCP" <?php if(in_array("rolesCP",$role)){echo "checked";}?>>Thay đổi quyền thành viên<br />
            <input type="checkbox" name='add[]' value="profileCP" <?php if(in_array("profileCP",$role)){echo "checked";}?>>Thay đổi thông tin thành viên<br />
            <input type="checkbox" name='add[]' value="settingCP" <?php if(in_array("settingCP",$role)){echo "checked";}?>>Quản lý cài đặt<br />
            <input class="hidden"><br />
          </div>
          <input type="submit" class="btn btn-primary" name="saveRole" value="Lưu">
      </div>
    </div>
  </form>
</div>

<?php
if (isset($_POST['saveRole'])) {
  echo $_POST['role'].' '.$_POST['mota'].'<br />';
  foreach ($_POST['add'] as $key => $data) {
    echo $data.' ';
  }
}
?>
