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
  <div id="tree_list">
    <ul>
      <li><a href=""></a></li>
    </ul>
  </div>
  <script>
  // Alternative format of the node (id & parent are required)
  {
    id          : "string" // required
    parent      : "string" // required
    text        : "string" // node text
    state       : {
      opened    : boolean  // is the node open
      disabled  : boolean  // is the node disabled
      selected  : boolean  // is the node selected
    },
    li_attr     : {}  // attributes for the generated LI node
    a_attr      : {}  // attributes for the generated A node
  }

  $('#tree_list').jstree({ 'core' : {
      'data' : <?php echo json_encode($content); ?>
    }
  });
  </script>
  <?php // echo $data; ?>
</div>
