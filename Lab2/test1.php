<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            padding: 20px;
        }
        nav {
            background-color: rgb(4,40,94);
        }
        nav ul {
            list-style: none;
            display: flex;
        }
        nav li {
            flex: 1;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
            padding: 15px;
            text-align: center;
        }
        nav ul li:hover {
            background-color: #084298;
        }

        .s1{
            width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }
        .s1 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }
        .s1 ul {
            list-style: none;
        }
        .s1 li {
            padding: 12px;
            margin-bottom: 10px;
            background-color: #e7f1ff;
            border-left: 6px solid #0d6efd;
            border-radius: 5px;
            transition: .3s;
        }
        .s1 li:hover {
            background-color: #cfe2ff;
            transform: translateX(5px);
        }

        .s2{
            width: 750px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }
        .s2 table {
            width: 700px;
            border-collapse: collapse;
        }
        .s2 table th {
            background-color: #0d6efd;
            color: white;
        }
        .s2 th, td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: center;
        }
        .s2 table tr:hover {
            background-color: #cfe2ff;
        }

        .s3{
            width: 750px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }
        .s3 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }
        
        .s3 form div {
            margin-bottom: 15px;
        }
        

        
    </style>
</head>
<body>
    <?php 
    $menus=[ "Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu" ];
    $subjects = [ "HTML", "CSS", "JavaScript", "PHP", "MySQL" ];
    $students = [
        ["id"=>"SV001","name"=>"Nguyễn Văn An","gender"=>"Nam","class"=>"CNTT1"],
        ["id"=>"SV002","name"=>"Trần Thị Bình","gender"=>"Nữ","class"=>"CNTT2"],
        ["id"=>"SV003","name"=>"Lê Văn Cường","gender"=>"Nam","class"=>"CNTT1"],
        ["id"=>"SV004","name"=>"Phạm Thị Dung","gender"=>"Nữ","class"=>"CNTT3"]
    ];

    $faculties= ["Công nghệ thông tin", "Quản trị kinh doanh", "Kế toán", "Ngôn ngữ Anh"];
    $classes = ["A1"=>"CNTT1", "A2"=>"CNTT2", "A3"=>"CNTT3", "A4"=>"CNTT4"];
    $genders = ["Nam", "Nữ", "Khác"];
    $hobbies = ["LT"=>"Lập trình", "DS"=>"Đọc sách", "AN"=>"Âm nhạc", "DL"=>"Du lịch", "TT"=>"Thể thao"];
    ?>
    <nav>
        <ul>
            <?php foreach($menus as $item) { ?>
                <li><a href="#"><?= $item ?></a></li>
            <?php } ?>
        </ul>
    </nav>
    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học</h3>
        <ul>
            <!--Hiển thị dữ liệu -->
            <?php foreach($subjects as $subject) { ?>
                <li><?= $subject ?></li>
            <?php } ?>
        </ul>
    </section>
    <section class="s2">
        <h3>Danh sách sinh viên</h3>
        <table>
            <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Họ và tên</th>
                <th>Giới tính</th>
                <th>Lớp</th>
            </tr>
            <?php foreach($students as $index => $student) { ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $student['id'] ?></td>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['gender'] ?></td>
                    <td><?= $student['class'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </section>


    <section class="s3">
        <h3>Đăng ký thông tin sinh viên</h3>
        <form action="#" method="post">
            <div>
                <label>Họ và tên</label>
                <input type="text" name="name" placeholder="Nhập họ và tên">
            </div>
            <div>
                <label>Khoa</label>
                <select>
                    <?php foreach($faculties as $faculty) { ?>
                        <option value="<?= $faculty ?>"><?= $faculty ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label>Lớp</label>
                <select>
                    <?php foreach($classes as $class) { ?>
                        <option value="<?= $class ?>"><?= $class ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label>Giới tính</label>
                <?php foreach($genders as $gender) { ?>
                        <label>
                            <input type="radio" name="gender" value="<?= $gender ?>"><?= $gender ?>
                        </label>
                <?php } ?>
            </div>
            <div>
                <label >Sở thích</label>
                <?php foreach($hobbies as $key => $hobby) { ?>
                        <label>
                            <input type="checkbox" name="hobbies[]" value="<?= $key ?>"><?= $hobby ?>
                        </label>
                <?php } ?>
            </div>
            <div class="actions">
                <button type="submit">Đăng ký</button>
                <button type="reset">Làm mới</button>
            </div>
        </form>
    </section>
</body>
</html>
