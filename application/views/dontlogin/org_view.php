<div class="container">
  <?php
  // foreach ($content as $key => $row) {
  //   $parent = $this->Morg->getOrgById($row['parent']);
  //   $json = array(
  //     'id' => $row['id'],
  //     'parent' => $row['parent'],
  //     'text' => $row['name']
  //   );
  //   $data = json_encode($json);
  // }
  // echo json_encode($content);
  ?>
  <div id="tree_list"></div>
  <script>
  $('#tree_list').jstree({ 'core' : {
    'data' : [<?php // echo $data; ?>]
  } });
  </script>
  <?php // echo $data; ?>
</div>
