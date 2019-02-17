<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>
<body>
 <table border="0">
  <caption><h1>Danh sách khách hàng</h1></caption>
  <tr>
    <th>STT</th>
    <th>Tên</th>
    <th>Ngày sinh</th>
    <th>Địa chỉ</th>
    <th>Ảnh</th>
  </tr>
  <?php
$customerlist = array(
    "1" => array("ten" => "Hoàng Văn Huấn",
                 "ngaysinh" => "1997-08-20",
                 "diachi" => "Huế",
                 "anh" => "images/img1.jpg"),
    "2" => array("ten" => "Nguyễn Văn Khánh",
                 "ngaysinh" => "1993-08-20",
                 "diachi" => "Bắc Cạn",
                 "anh" => "images/img2.jpg"),
    "3" => array("ten" => "Nguyễn Thái Hoàng",
                 "ngaysinh" => "1992-08-21",
                 "diachi" => "Bình Định",
                 "anh" => "images/img3.jpg"),
    "4" => array("ten" => "Trần Đăng Kha",
                  "ngaysinh" => "1993-08-22",
                  "diachi" => "Hà Tây",
                  "anh" => "images/img4.jpg"),
    "5" => array("ten" => "Nguyễn Đình Thiên",
                  "ngaysinh" => "199-08-17",
                  "diachi" => "Hà Nội",
                  "anh" => "images/img5.jpg")
   );
?>
  <?php
    foreach($customerlist as $key => $values){
      echo "<tr>";
      echo "<td>".$key."</td>";
      echo "<td>".$values['ten']."</td>";
      echo "<td>".$values['ngaysinh']."</td>";
      echo "<td>".$values['diachi']."</td>";
      echo "<td><image src ='".$values['anh']."' width = '100px' height ='100px'/></td>";
      echo "</tr>";
    }
?>
 </table>
</body>
</html>