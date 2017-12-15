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
        <div class="section-header"><a href="<?php echo base_url('events/org/4')?>">Xem tất cả</a></div>
      </div>
      <div id="list-wrpaaer" style="height:338px">
        <marquee direction="up" scrollamount="3">
         <ul style="height:258px">
           <li>
             <a href="<?php echo base_url('events/event/4')?>">
             	 <h4><i class="glyphicon glyphicon-globe"></i> Tham gia tình nguyện hè</h4>
             </a>
         	   <span><i class="fa fa-user"></i> Trần Minh Tân</span>&nbsp;&nbsp;&nbsp;<span><i class="fa fa-calendar"></i> 2017-12-15</span>
           </li>
           <li>
             <a href="<?php echo base_url('events/event/4')?>">
             	 <h4><i class="glyphicon glyphicon-globe"></i> Đem thẻ sinh viên khi đi lao động</h4>
             </a>
         	   <span><i class="fa fa-user"></i> Quản trị hệ thống</span>&nbsp;&nbsp;&nbsp;<span><i class="fa fa-calendar"></i> 2017-12-15</span>
           </li>
           <li>
             <a href="<?php echo base_url('events/event/4')?>">
             	 <h4><i class="glyphicon glyphicon-globe"></i> Đăng ký lao động</h4>
             </a>
         	   <span><i class="fa fa-user"></i> Quản trị hệ thống</span>&nbsp;&nbsp;&nbsp;<span><i class="fa fa-calendar"></i> 2017-12-15</span>
           </li>
           <li>
             <a href="<?php echo base_url('events/event/4')?>">
             	 <h4><i class="glyphicon glyphicon-globe"></i> Tham gia tình nguyện hè</h4>
             </a>
         	   <span><i class="fa fa-user"></i> Trần Minh Tân</span>&nbsp;&nbsp;&nbsp;<span><i class="fa fa-calendar"></i> 2017-12-15</span>
           </li>
           <li>
             <a href="<?php echo base_url('events/event/4')?>">
             	 <h4><i class="glyphicon glyphicon-globe"></i> Đem thẻ sinh viên khi đi lao động</h4>
             </a>
         	   <span><i class="fa fa-user"></i> Quản trị hệ thống</span>&nbsp;&nbsp;&nbsp;<span><i class="fa fa-calendar"></i> 2017-12-15</span>
           </li>
           <li>
             <a href="<?php echo base_url('events/event/4')?>">
             	 <h4><i class="glyphicon glyphicon-globe"></i> Đăng ký lao động</h4>
             </a>
         	   <span><i class="fa fa-user"></i> Quản trị hệ thống</span>&nbsp;&nbsp;&nbsp;<span><i class="fa fa-calendar"></i> 2017-12-15</span>
           </li>
           <li>
             <a href="<?php echo base_url('events/event/4')?>">
             	 <h4><i class="glyphicon glyphicon-globe"></i> Tham gia tình nguyện hè</h4>
             </a>
         	   <span><i class="fa fa-user"></i> Trần Minh Tân</span>&nbsp;&nbsp;&nbsp;<span><i class="fa fa-calendar"></i> 2017-12-15</span>
           </li>
           <li>
             <a href="<?php echo base_url('events/event/4')?>">
             	 <h4><i class="glyphicon glyphicon-globe"></i> Đem thẻ sinh viên khi đi lao động</h4>
             </a>
         	   <span><i class="fa fa-user"></i> Quản trị hệ thống</span>&nbsp;&nbsp;&nbsp;<span><i class="fa fa-calendar"></i> 2017-12-15</span>
           </li>
           <li>
             <a href="<?php echo base_url('events/event/4')?>">
             	 <h4><i class="glyphicon glyphicon-globe"></i> Đăng ký lao động</h4>
             </a>
         	   <span><i class="fa fa-user"></i> Quản trị hệ thống</span>&nbsp;&nbsp;&nbsp;<span><i class="fa fa-calendar"></i> 2017-12-15</span>
           </li>
          </ul>
        </marquee>
      </div><!-- list-wrpaaer -->
    </div>
  </div>
</div>
<script>
  $(document).ready(function () {
      $('#marquee-vertical').marquee();
  });
</script>
