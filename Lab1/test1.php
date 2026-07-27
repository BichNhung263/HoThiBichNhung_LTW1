<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h1>Câu 1</h1>";
    echo "Họ tên: Hồ Thị Bích Nhung";
    echo "<br>";
    echo "Ngày sinh: 26/03/2005";
    echo "<br>";
    echo "MSSV: 2123110314";
    echo "<br>=======================<br>";
    ?>

    <?php
    echo "<h1> Câu 2</h1>";
    $hoten = "Hồ Thị Bích Nhung";
    $mssv = "2123110314";
    $sdt = "0356924118";
    $ngaysinh = "26/03/2005";
    echo "Họ tên: $hoten";
    echo "<br>";
    echo "MSSV: $mssv";
    echo "<br>";
    echo "Số điện thoại: $sdt";
    echo "<br>";
    echo "Ngày sinh: $ngaysinh";
    echo "<br>===========<br>";
    ?>

    <?php
    echo "<h1> Câu 3</h1>";
    define("HOST", "localhost");
    define("DATABASE", "QuanLySinhVIen");
    define("USERNAME", "root");
    define("PASSWORD", "12345");
    echo "HOST :" . HOST . "<br>";
    echo "DATABASE :" . DATABASE . "<br>";
    echo "USERNAME :" . USERNAME . "<br>";
    echo "PASSWORD :" . PASSWORD . "<br>========<br>";
    ?>

    <?php
    echo "<h1>Câu 4</h1>";
    $name ="Hồ Thị Bích Nhung";
    echo "Xin chào $name";
    echo "<br>";
    echo 'Xin chào $name';
    echo "<br>===========<br>";
    ?>
    <?php
    echo "<h1>Câu 5</h1>";
    //Đây là comment 1 dòng

    /*
    Đây là comment 
    nhiều dòng*/

    echo "Hello PHP";
    ?>
    
</body>

</html>