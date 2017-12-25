<div class="container">
  <form class="form-horizontal" action="<?php echo base_url('api/rfid'); ?>" method="POST">
      <input type="text" name="key-post" value="key-api" placeholder="Nhập API key secret" class="form-control">
      <input type="hidden" name="data" value="<?php echo base_url('organizations/res/4'); ?>">
      <button type="submit" class="btn btn-primary">Gửi</button>
  </form>
</div>
<?php
// $url = base_url('api/rfid');
// $content = file_get_contents(base_url('organizations/res/4'));
//
// $curl = curl_init($url);
// curl_setopt($curl, CURLOPT_HEADER, false);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_HTTPHEADER,
//         array("Content-type: application/json"));
// curl_setopt($curl, CURLOPT_POST, true);
// curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
//
// $json_response = curl_exec($curl);
//
// $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//
// if ( $status != 201 ) {
//     die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
// }
//
//
// curl_close($curl);
//
// $response = json_decode($json_response, true);
?>
