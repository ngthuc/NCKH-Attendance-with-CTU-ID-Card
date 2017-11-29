<legend>Thông báo || Report</legend>
<?php
//How to using alert page
// $this->_data['subview'] = 'alert/alert_view';
// $this->_data['titlePage'] = 'Alert Active User';
// $this->_data['alert'] = null;
// $this->load->view('directory_using', $this->_data);
if ($alert['type']) {
  if ($alert['url']) {
    if ($alert['content']) {
      return '<div class="alert alert-'.$alert['type'].'">'.$alert['content'].'</div>
        <script type="text/javascript">
        setTimeout(function () {
           window.location.href = "'.$alert['url'].'"; //will redirect to your blog page (an ex: blog.html)
        }, 2000); //will call the function after 2 secs.
        </script>';
    } else return '<div class="alert alert-'.$alert['type'].'">'.strtoupper($alert['type']).'</div>
      <script type="text/javascript">
      setTimeout(function () {
         window.location.href = "'.$alert['url'].'"; //will redirect to your blog page (an ex: blog.html)
      }, 2000); //will call the function after 2 secs.
      </script>';
  } else if ($alert['content']) {
    return '<div class="alert alert-'.$alert['type'].'" id="alert">'.$alert['content'].'</div>
    <script type="text/javascript">'."
    setTimeout(function() {
        $('#alert').fadeOut(2000);
    }, 2000);
    </script>";
  } else return '<div class="alert alert-'.$alert['type'].'" id="alert">'.strtoupper($alert['type']).'</div>
    <script type="text/javascript">'."
    setTimeout(function() {
        $('#alert').fadeOut(2000);
    }, 2000);
    </script>";
} else echo '<div class="alert alert-info">Redirect to recent page!</div>
  <script type="text/javascript">
  setTimeout(function () {
     window.history.go(-1); //will redirect to your blog page (an ex: blog.html)
  }, 2000); //will call the function after 2 secs.
  </script>';
?>
