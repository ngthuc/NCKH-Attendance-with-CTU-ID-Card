<?php
echo '<table>
  <thead>
    <th>ID</th>
    <th>Tài khoản</th>
    <th>Mật khẩu</th>
    <th>Level</th>
  </thead>
  <tbody>';

foreach ($data as $key => $rows) {
echo '<tr>
  <td>'.$rows['id'].'</td>
  <td>'.$rows['username'].'</td>
  <td>'.$rows['password'].'</td>
  <td>'.$rows['level'].'</td>
</tr>';
}

?>
  </tbody>
</table>
