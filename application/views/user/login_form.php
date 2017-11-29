<div class="container">
    <form class="form-vertical" action="<?php echo base_url("user/login/act");?>" method="POST">
        <div class="input-group">
          <span class="input-group-addon">Username</span>
          <input type="text" name="username" class="form-control" placeholder="Enter username">
        </div>
        <div class="input-group">
          <span class="input-group-addon">Password</span>
          <input type="password" name="password" class="form-control" placeholder="Enter password">
        </div>
        <button type="submit" name="btnLogin" class="btn btn-primary">Login</button>
    </form>
</div>
