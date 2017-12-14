<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="section-header-wrap section-header-default">
        <div class="section-header">Thông tin tổ chức</div>
      </div>
      <div class="form-group">
        <span><strong>Tên tổ chức: </strong><?php echo $name; ?></span><br />
        <span><strong>Tổ chức quản lý: </strong>
          <a href="<?php echo base_url('/organizations/org/'.$parent_id.'/')?>"><?php echo $parent_name; ?></a>
        </span><br />
        <span><strong>Mô tả </strong><?php echo $description; ?></span>
      </div>
    </div>
    <div class="col-md-6">
      <div class="section-header-wrap section-header-default">
        <div class="section-header">Sự kiện của tổ chức</div>
      </div>
    </div>
  </div>
</div>
