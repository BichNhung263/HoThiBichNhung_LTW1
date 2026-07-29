<?php
    require "includes/header.php" ;
    require "classes/Student.php" ;
    $students=[
    new Student("SV001", "Nguyễn Văn A" , "Nam" , 2005, 8.5, 7.0, 9.0),
    new Student("SV002", "Trần Thị B" , "Nữ" , 2004, 9.0, 8.5, 7.5),
    new Student("SV003", "Lê Văn C" , "Nam" , 2005, 7.5, 6.0, 8.0),
    new Student("SV004", "Phạm Thị D" , "Nữ" , 2004, 8.0, 7.5, 8.5),
    new Student("SV005", "Nguyễn Văn E" , "Nam" , 2005, 6.5, 7.0, 7.5),
    new Student("SV006", "Trần Thị F" , "Nữ" , 2004, 9.5, 8.0, 9.0),
    new Student("SV007", "Lê Văn G" , "Nam" , 2005, 7.0, 6.5, 8.0),
    new Student("SV008", "Phạm Thị H" , "Nữ" , 2004, 8.5, 7.0, 8.5),
    new Student("SV009", "Nguyễn Văn I" , "Nam" , 2005, 6.0, 7.5, 7.0),
    new Student("SV010", "Trần Thị J" , "Nữ" , 2004, 9.0, 8.5, 9.5),
    new Student("SV011", "Lê Văn K" , "Nam" , 2005, 7.5, 6.0, 8.0),
    new Student("SV012", "Phạm Thị L" , "Nữ" , 2004, 8.0, 7.5, 8.5),
    new Student("SV013", "Nguyễn Văn M" , "Nam" , 2005, 6.5, 7.0, 7.5),
    new Student("SV014", "Trần Thị N" , "Nữ" , 2004, 9.5, 8.0, 9.0),
    new Student("SV015", "Lê Văn O" , "Nam" , 2005, 7.0, 6.5, 8.0),
    new Student("SV016", "Phạm Thị P" , "Nữ" , 2004, 8.5, 7.0, 8.5),
    new Student("SV017", "Nguyễn Văn Q" , "Nam" , 2005, 6.0, 7.5, 7.0),
    new Student("SV018", "Trần Thị R" , "Nữ" , 2004, 9.0, 8.5, 9.5),
    new Student("SV019", "Lê Văn S" , "Nam" , 2005, 7.5, 6.0, 8.0),
    new Student("SV020", "Phạm Thị T" , "Nữ" , 2004, 8.0, 7.5, 8.5)
    ];
    
    ?>

    <!-- Main -->
    <main class="container my-5">
        <section class="mb-5">
            <h3 class="mb-3"> Danh sách sinh viên</h3>
            <table class="table table-bordered table-hover table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Mã SV</th>
                        <th>Họ tên</th>
                        <th>Giới tính</th>
                        <th>Năm sinh</th>
                        <th>Tuổi</th>
                        <th>Điểm HTML</th>
                        <th>Điểm CSS</th>
                        <th>Điểm PHP</th>
                        <th>Tổng điểm</th>
                        <th>Điểm trung bình</th>
                        <th>Xếp loại</th>
                        <th>Học bổng</th>
                    </tr>
                </thead>
                <tbdody>
                    <?php foreach ($students as $student) {
                        $student->showInfo();
                    }
                    ?>
                </tbdody>
            </table>
        </section>
    </main>
    <?php
    require "includes/footer.php";
    ?>