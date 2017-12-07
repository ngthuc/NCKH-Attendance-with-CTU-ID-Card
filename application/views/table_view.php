<div class="container">
  <table class="table table-striped" id="student-table">
    <thead>
      <th>ID</th>
      <th>MSSV</th>
      <th>Họ</th>
      <th>Tên</th>
      <th>Ngành học</th>
      <th>Khoa/Viện</th>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>B1400731</td>
        <td>Lê</td>
        <td>Nguyên Thức</td>
        <td>Kỹ thuật phần mềm</td>
        <td>CNTT&amp;TT</td>
      </tr>
      <tr>
        <td>2</td>
        <td>B1400704</td>
        <td>Lê</td>
        <td>Minh Luân</td>
        <td>Kỹ thuật phần mềm</td>
        <td>CNTT&amp;TT</td>
      </tr>
      <tr>
        <td>3</td>
        <td>B1400706</td>
        <td>Nguyễn</td>
        <td>Thiện Minh</td>
        <td>Kỹ thuật phần mềm</td>
        <td>CNTT&amp;TT</td>
      </tr>
      <tr>
        <td>4</td>
        <td>B1400738</td>
        <td>Từ</td>
        <td>Tuấn Vũ</td>
        <td>Kỹ thuật phần mềm</td>
        <td>CNTT&amp;TT</td>
      </tr>
      <tr>
        <td>5</td>
        <td>B1600123</td>
        <td>Phương</td>
        <td>Bửu Minh</td>
        <td>CNTT CLC</td>
        <td>CNTT&amp;TT</td>
      </tr>
      <tr>
        <td>6</td>
        <td>B1507227</td>
        <td>Huỳnh</td>
        <td>Thúy Duy</td>
        <td>Quản trị kinh doanh</td>
        <td>Kinh tê</td>
      </tr>
      <tr>
        <td>7</td>
        <td>B1401414</td>
        <td>Trần</td>
        <td>Anh Thơ</td>
        <td>Vật lý kỹ thuật</td>
        <td>KHTN</td>
      </tr>
      <tr>
        <td>8</td>
        <td>B1400729</td>
        <td>Huỳnh</td>
        <td>Hoàng Thơ</td>
        <td>Kỹ thuật phần mềm</td>
        <td>CNTT&amp;TT</td>
      </tr>
      <tr>
        <td>9</td>
        <td>B1707007</td>
        <td>Dương</td>
        <td>Ý Nguyện</td>
        <td>Kỹ thuật phần mềm</td>
        <td>CNTT&amp;TT</td>
      </tr>
      <tr>
        <td>10</td>
        <td>B1400730</td>
        <td>Hồ Lê</td>
        <td>Anh Thư</td>
        <td>Kỹ thuật phần mềm</td>
        <td>CNTT&amp;TT</td>
      </tr>
      <tr>
        <td>11</td>
        <td>B1400716</td>
        <td>Nguyễn</td>
        <td>Tấn Phát</td>
        <td>Kỹ thuật phần mềm</td>
        <td>CNTT&amp;TT</td>
      </tr>
      <tr>
        <td>12</td>
        <td>B1606833</td>
        <td>Trần Thị</td>
        <td>Vàng Y</td>
        <td>CNTT CLC</td>
        <td>CNTT&amp;TT</td>
      </tr>
      <tr>
        <td>13</td>
        <td>B1502580</td>
        <td>Phạm Thị</td>
        <td>Thùy Linh</td>
        <td>Kỹ thuật môi trường</td>
        <td>MT-TNTN</td>
      </tr>
      <tr>
        <td>14</td>
        <td>B1410087</td>
        <td>Lê</td>
        <td>Bảo Tuấn</td>
        <td>Luật tư pháp</td>
        <td>Luật</td>
      </tr>
      <tr>
        <td>15</td>
        <td>B1400731</td>
        <td>Lê</td>
        <td>Nguyên Thức</td>
        <td>Kỹ thuật phần mềm</td>
        <td>CNTT&amp;TT</td>
      </tr>
      <tr>
        <td>16</td>
        <td>B1400731</td>
        <td>Lê</td>
        <td>Nguyên Thức</td>
        <td>Kỹ thuật phần mềm</td>
        <td>CNTT&amp;TT</td>
      </tr>
      <tr>
        <td>17</td>
        <td>B1400731</td>
        <td>Lê</td>
        <td>Nguyên Thức</td>
        <td>Kỹ thuật phần mềm</td>
        <td>CNTT&amp;TT</td>
      </tr>
    </tbody>
  </table>
</div>

<!-- Using datatables -->
<script type="text/javascript">
$(document).ready(function () {
    $('#student-table').DataTable({
      "language" : {
        "url" : "//cdn.datatables.net/plug-ins/1.10.16/i18n/Vietnamese.json"
    }
  });
});
</script>
