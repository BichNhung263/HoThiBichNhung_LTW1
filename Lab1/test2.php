<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<>
    <?php
    $a = 15;
    $b = 4;
    echo "<h1>Câu 1</h1>";
    echo "a = $a";
    echo "<br>";
    echo "b = $b";
    echo "<br>";
    echo "Cộng: a + b = " . ($a + $b);
    echo "<br>";
    echo "Trừ: a - b = " . ($a - $b);
    echo "<br>";
    echo "Nhân: a * b = " . ($a * $b);
    echo "<br>";
    echo "Chia: a / b = " . ($a / $b);
    echo "<br>";
    echo "Chia lấy dư: a % b = " . ($a % $b);
    echo "<br>";
    echo "<br>=======================<br>";
    ?>

    <?php
    echo "<h1>Câu 2</h1>";
    $x = 10;
    $y = "10";

    echo "x= $x";
    echo "<br>";
    echo "y= $y";
    echo "<br>";

    echo "x == y : ";
    var_dump($x == $y);
    echo "<br>";

    echo "x === y : ";
    var_dump($x === $y);
    echo "<br>";

    echo "x != y : ";
    var_dump($x != $y);
    echo "<br>";

    echo "x <> y : ";
    var_dump($x <> $y);
    echo "<br>";
    echo "!== ";
    var_dump($x !== $y);
    echo "<br>";

    /*
    == : So sánh giá trị.
    === : So sánh giá trị và kiểu dữ liệu.
    != và <> : Khác giá trị.
    !== : Khác giá trị hoặc khác kiểu dữ liệu.
    */
    echo "<br>=======================<br>";
    ?>

    <?php


    $n = 5;

    echo "<h1>Câu 3</h1>";

    echo "Giá trị ban đầu: $n <br>";

    echo "++n = " . (++$n);
    echo "<br>";

    echo "Sau ++n: $n ";
    echo "<br>";
    $n = 5;
    echo "n++ = " . ($n++);
    echo "<br>";

    echo "Sau n++: $n";
    echo "<br>";

    /*
    ++n : tăng trước rồi mới sử dụng
    n++ : sử dụng trước rồi mới tăng
    */


    echo "<br>=======================<br>";
    ?>

    <?php
    echo "<h1>Câu 4</h1>";

    $chuoi1 = "Xin chào, ";
    $chuoi2 = "tôi là Bích Nhung!";

    echo "Toán tử";
    echo "<br>";
    $KetQua = $chuoi1 . " " . $chuoi2;
    echo "Kết quả: . $KetQua";
    /*Dấu . dùng để nối nhiều chuỗi lại với nhau
    */
    echo "<br>=======================<br>";
    ?>

    <?php
    echo "<h1>Câu 5</h1>";

    $chuoi1 = "Hello";
    $chuoi2 = "Ho Thi Bich Nhung";
    echo "Chuỗi 1: $chuoi1";
    echo "<br>";
    echo "strlen(): " . strlen($chuoi1);
    echo "<br>";

    echo "Chuỗi 2: $chuoi2";
    echo "<br>";
    echo "mb_strlen = " . mb_strlen($chuoi2);

    /*
    strlen():
    Đếm số byte.
    Phù hợp với chuỗi không có dấu.

    mb_strlen():
    Đếm đúng số ký tự Unicode.
    Phù hợp với tiếng Việt có dấu.
    */
    echo "<br>===========<br>";
    ?>

    <?php
    echo "<h1>Câu 6</h1>";

    $chuoi = "Ho Thi Bich Nhung";

    echo "Chuỗi ban đầu: $chuoi ";
    echo "<br>";
    echo "Chữ hoa: " . strtoupper($chuoi) ;
    echo "<br>";
    echo "Chữ thường: " . strtolower($chuoi) ;
    echo "<br>";
    echo "Chuỗi có dấu: Hồ Thị Bích Nhung ";
    echo "<br>";
    echo "Chữ hoa (mb_strtoupper): " . mb_strtoupper("Hồ Thị Bích Nhung") ;
    echo "<br>";
    echo "Chữ thường (mb_strtolower): " . mb_strtolower("Hồ Thị Bích Nhung") ;
    echo "<br>============<br>";

    /*
    strtoupper(), strtolower():
    - Chuyển chữ hoa/chữ thường cho chuỗi ASCII.
    - Không xử lý đầy đủ tiếng Việt có dấu.

    mb_strtoupper(), mb_strtolower():
    - Hỗ trợ Unicode.
    - Chuyển đúng tiếng Việt có dấu.
    */
    ?>

    <?php
    echo "<h1>Câu 7</h1>";

    $chuoi1 = "123 abc";
    $chuoi2 = "abc 123";

    echo "Chuỗi 1: ";
    var_dump($chuoi1);
    echo "<br>";
    echo "Chuỗi 2: ";
    var_dump($chuoi2);
    echo "<br>";
    $so1 = (int)$chuoi1;
    $so2 = (int)$chuoi2;
    echo "Ép kiểu chuỗi 1 sang int: ";
    var_dump($so1);
    echo "<br>";
    echo "Ép kiểu chuỗi 2 sang int: ";
    var_dump($so2);
    echo "<br>=========<br>";
    ?>

    <?php
    echo "<h1>Câu 8</h1>";

    $int = 20;
    $float = 15.5;
    $string = "Ho Thi Bich Nhung";
    $bool = true;

    echo "Kiểu int : ";
    var_dump($int);
    echo "<br>";

    echo "Kiểu float : ";
    var_dump( $float);
    echo "<br>";
    echo "Kiểu string : ";
    var_dump($string);

    echo "<br>";

    echo "Kiểu bool : ";
    var_dump($bool);

    echo "<br>";
    ?>
    </body>

</html>