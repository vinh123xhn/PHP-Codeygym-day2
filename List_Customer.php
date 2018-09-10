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
    img {
        height: 100px;
        width: 150px;
    }
    input[type=text] {
        width: 300px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        padding: 12px 10px 12px 10px;
    }
    #submit {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
</style>
<body>
<form action ="Customer_action.php" method="post">
    <input type="text" name="search" placeholder="Nhập tên người cần tìm"/>
    <input type="submit" value="Tìm"/>
</form>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <tr>
        <th>1</th>
        <th>Mai Văn Hoàn</th>
        <th>1983-08-20</th>
        <th>Hà Nội</th>
        <th><img src="images/img1.jpg" </th>
    </tr>
    <tr>
        <th>2</th>
        <th>Nguyễn Văn Nam</th>
        <th>1983-08-10</th>
        <th>Bắc Giang</th>
        <th><img src="images/img2.jpg" </th>
    </tr>
    <tr>
        <th>3</th>
        <th>Nguyễn Thái Hòa</th>
        <th>1983-08-21</th>
        <th>Nam Định</th>
        <th><img src="images/img3.jpg" </th>
    </tr>
    <tr>
        <th>4</th>
        <th>Trần Đăng Khoa</th>
        <th>1983-08-22</th>
        <th>Hà Tây</th>
        <th><img src="images/img4.jpg" </th>
    </tr>
    <tr>
        <th>5</th>
        <th>Nguyễn Đình Thi</th>
        <th>1983-08-17</th>
        <th>Hà Nội</th>
        <th><img src="images/img5.jpg" </th>
    </tr>
</table>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $customerlist = array(
        "1" => array("ten" => "Mai Văn Hoàn",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Hà Nội",
            "anh" => "images/img1.jpg"),
        "2" => array("ten" => "Nguyễn Văn Nam",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Bắc Giang",
            "anh" => "images/img2.jpg"),
        "3" => array("ten" => "Nguyễn Thái Hòa",
            "ngaysinh" => "1983-08-21",
            "diachi" => "Nam Định",
            "anh" => "images/img3.jpg"),
        "4" => array("ten" => "Trần Đăng Khoa",
            "ngaysinh" => "1983-08-22",
            "diachi" => "Hà Tây",
            "anh" => "images/img4.jpg"),
        "5" => array("ten" => "Nguyễn Đình Thi",
            "ngaysinh" => "1983-08-17",
            "diachi" => "Hà Nội",
            "anh" => "images/img5.jpg")
);
$keyWords = $_POST["search"];
$flag = 0;
foreach ($customerlist as $keyCusoomer) {
    if ($keyCusoomer["ten"] == $keyWords) {
        echo "<tr>";
        echo "<td>" . $keyCusoomer['ten'] . "</td>";
        echo "<td>" . $keyCusoomer['ngaysinh'] . "</td>";
        echo "<td>" . $keyCusoomer['diachi'] . "</td>";
        echo "<td><image src ='" . $keyCusoomer['anh'] . "' width = '60px' height ='60px'/></td>";
        echo "</tr>";
        $flag = 1;
    }
    if ($flag = 0) {
        echo "Không tìm thấy";
    }
}
}
?>
</body>
</html>