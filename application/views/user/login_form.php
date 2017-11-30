<div class="container">
  <?php
  echo "<div class='mess_error'>";
  echo "<ul>";
      if(validation_errors() != ''){
          echo "<li>".validation_errors()."</li>";
      }
  echo "</ul>";
  echo "</div>";
  ?>
    <form class="form-vertical" action="<?php echo base_url("user/loginActive");?>" method="POST">
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
