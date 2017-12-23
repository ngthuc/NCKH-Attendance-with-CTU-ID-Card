<div class="container">
  <div id="tree_list">
    <!-- <ul> -->
      <?php
      // foreach ($content as $key => $row) {
      //   $parent = $this->Morg->getOrgById($row['parent']);
      //   if ($parent['id'] == $row['parent']) {
      //     echo '<li>
      //     <a href="#">'.$row['text'].'</a>
      //     </li>';
      //   } else if ($parent['id'] != $row['parent']) {
      //     echo '<li>
      //     <a href="#">'.$row['text'].'</a>
      //     </li>';
      //   }
      // }
      ?>
    <!-- </ul> -->
    <ul>
    <li>Root node
      <ul>
        <li>Child node 1</li>
        <li>Child node 2</li>
      </ul>
    </li>
  </ul>
  </div>

  <!-- Using TreeJS -->
  <script>
  $('#tree_list').jstree();
  </script>
  <?php // echo $data; ?>
</div>
