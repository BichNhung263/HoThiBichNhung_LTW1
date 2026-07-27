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
    $chuoi = "    Ho Thi Bich Nhung    ";
    echo "Chuỗi ban đầu: ["   .   $chuoi  .  "] ";
    echo "<br>";
    echo "Sau khi trim : [" . trim($chuoi) . "]";
    echo "<br>========<br>";
    ?>

    <?php
    echo "<h1>Câu 2</h1>";
    $chuoi = "     Lap Trinh Web PHP     ";
    echo "Chuỗi ban đầu: [" . $chuoi . "]";
    echo "<br>";
    echo "ltrim(): [" . ltrim($chuoi) . "]";
    echo "<br>";
    echo "rtrim(): [" . rtrim($chuoi) . "]";
    echo "<br>=================<br>";
    ?>

    <?php
    echo "<h1>Câu 3</h1>";
    $chuoi = "Truong Cao Dang Cong Thuong Thanh Pho Ho Chi Minh";
    echo "Chuỗi ban đầu:  $chuoi";
    echo "<br>";
    echo "10 ký tự đầu tiên: ";
    echo substr($chuoi, 0, 10);
    echo "<br>";
    echo "Từ ký tự thứ 5 đến hết chuỗi: ";
    echo substr($chuoi, 4);
    echo "<br>==================<br>";
    ?>

    <?php
    echo "<h1>Câu 4</h1>";
    $chuoi = "Toi dang hoc Lap Trinh Web PHP tai HITC.";
    echo "Chuỗi ban đầu: $chuoi";
    echo "<br>";
    $chuoiMoi = str_replace(" HITC", " Cao Dang Công Thương TP.HCM", $chuoi);
    echo "Sau khi thay thế: ";
    echo "<br>";
    echo $chuoiMoi;
    ?>
</body>

</html>