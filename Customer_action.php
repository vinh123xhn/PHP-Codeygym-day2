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
}
?>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $keyWords = $_POST["search"];
    $flag = 0;
    foreach ($customerlist as $keyCusoomer){
        if ($keyCusoomer["ten"] == $keyWords){
        echo "<tr>";
        echo "<td>".$keyCusoomer['ten']."</td>";
        echo "<td>".$keyCusoomer['ngaysinh']."</td>";
        echo "<td>".$keyCusoomer['diachi']."</td>";
        echo "<td><image src ='".$keyCusoomer['anh']."' width = '60px' height ='60px'/></td>";
        echo "</tr>";
        $flag = 1;
        } if($flag = 0){
            echo "Không tìm thấy";
        }
    }
    ?>
</table>
</body>
</html>