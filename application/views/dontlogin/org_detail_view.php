<div class="container">
  <legend>Chi tiết tổ chức</legend>
  <span><strong>Tên tổ chức: </strong><?php echo $name; ?></span><br />
  <span><strong>Tổ chức quản lý: </strong>
    <a href="<?php echo base_url('/organizations/org/'.$parent_id.'/')?>"><?php echo $parent_name; ?></a>
  </span><br />
  <span><strong>Mô tả </strong><?php echo $description; ?></span>
  <hr>
</div>
