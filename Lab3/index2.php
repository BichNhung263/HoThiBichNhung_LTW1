<?php
    require "includes/header.php";
    require "classes/Student.php";
    require "functions/student_stats.php";

    $students = [
        new Student("SV001", "Nguyễn Văn A", "Nam", 2005, 8.5, 7.0, 9.0),
        new Student("SV002", "Trần Thị B", "Nữ", 2004, 9.0, 8.5, 7.5),
        new Student("SV003", "Lê Văn C", "Nam", 2005, 7.5, 6.0, 8.0),
        new Student("SV004", "Phạm Thị D", "Nữ", 2004, 8.0, 7.5, 8.5),
        new Student("SV005", "Nguyễn Văn E", "Nam", 2005, 6.5, 7.0, 7.5),
        new Student("SV006", "Trần Thị F", "Nữ", 2004, 9.5, 8.0, 9.0),
        new Student("SV007", "Lê Văn G", "Nam", 2005, 7.0, 6.5, 8.0),
        new Student("SV008", "Phạm Thị H", "Nữ", 2004, 8.5, 7.0, 8.5),
        new Student("SV009", "Nguyễn Văn I", "Nam", 2005, 6.0, 7.5, 7.0),
        new Student("SV010", "Trần Thị J", "Nữ", 2004, 9.0, 8.5, 9.5),
        new Student("SV011", "Lê Văn K", "Nam", 2005, 7.5, 6.0, 8.0),
        new Student("SV012", "Phạm Thị L", "Nữ", 2004, 8.0, 7.5, 8.5),
        new Student("SV013", "Nguyễn Văn M", "Nam", 2005, 6.5, 7.0, 7.5),
        new Student("SV014", "Trần Thị N", "Nữ", 2004, 9.5, 8.0, 9.0),
        new Student("SV015", "Lê Văn O", "Nam", 2005, 7.0, 6.5, 8.0),
        new Student("SV016", "Phạm Thị P", "Nữ", 2004, 8.5, 7.0, 8.5),
        new Student("SV017", "Nguyễn Văn Q", "Nam", 2005, 6.0, 7.5, 7.0),
        new Student("SV018", "Trần Thị R", "Nữ", 2004, 9.0, 8.5, 9.5),
        new Student("SV019", "Lê Văn S", "Nam", 2005, 7.5, 6.0, 8.0),
        new Student("SV020", "Phạm Thị T", "Nữ", 2004, 8.0, 7.5, 8.5)
    ];
?>

<!-- Main -->
<main class="container my-5">
    <section class="mb-5">
        <h3 class="mb-4">Dashboard thống kê</h3>
        <div class="row g-3">
            <div class="col-md-3 col-sm-6">
                <div class="card text-white bg-primary h-100">
                    <div class="card-body text-center">
                        <h5>Tổng số sinh viên</h5>
                        <p class="card-text fs-3 fw-bold"><?= countStudents($students) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card text-white bg-info h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sinh viên nam</h5>
                        <p class="card-text fs-3 fw-bold"><?= countMaleStudents($students) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card text-white bg-secondary h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sinh viên nữ</h5>
                        <p class="card-text fs-3 fw-bold"><?= countFemaleStudents($students) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card text-white bg-success h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Đạt học bổng</h5>
                        <p class="card-text fs-3 fw-bold"><?= countScholarshipStudents($students) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card text-dark bg-warning h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Loại Xuất sắc</h5>
                        <p class="card-text fs-3 fw-bold"><?= countExcellentStudents($students) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card text-dark bg-light border-secondary h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">ĐTB cả lớp</h5>
                        <p class="card-text fs-3 fw-bold"><?= getAverageScore($students) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card text-dark bg-light border-success h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">ĐTB cao nhất</h5>
                        <p class="card-text fs-3 fw-bold text-success"><?= getHighestAverage($students) ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card text-dark bg-light border-danger h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">ĐTB thấp nhất</h5>
                        <p class="card-text fs-3 fw-bold text-danger"><?= getLowestAverage($students) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Danh sách sinh viên -->
    <section class="mb-5">
        <h3 class="mb-3">Danh sách sinh viên</h3>
        <table class="table table-bordered table-hover align-middle">
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
            <tbody>
                <?php foreach ($students as $student) {
                    $student->showInfo();
                }
                ?>
            </tbody>
        </table>
    </section>
</main>

<?php
    require "includes/footer.php";
?>