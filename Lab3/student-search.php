<?php
require "includes/header.php";
$students = [
    ["fullname" => "Nguyễn Văn A", "birthyear" => 20, "gender" => "Nam", "mclass" => "Lớp C25A", "email" => "anguyen@gmail.com"],
    ["fullname" => "Trần Thị B", "birthyear" => 19, "gender" => "Nữ", "mclass" => "Lớp C25E", "email" => "btran@gmail.com"],
    ["fullname" => "Lê Văn C", "birthyear" => 21, "gender" => "Nam", "mclass" => "Lớp C25F", "email" => "cle@gmail.com"],
    ["fullname" => "Phạm Minh D", "birthyear" => 18, "gender" => "Nữ", "mclass" => "Lớp C25A", "email" => "dpham@gmail.com"],
    ["fullname" => "Hoàng Đức E", "birthyear" => 22, "gender" => "Nam", "mclass" => "Lớp C25E", "email" => "ehoang@gmail.com"],
    ["fullname" => "Vũ Khánh P", "birthyear" => 20, "gender" => "Nữ", "mclass" => "Lớp C25F", "email" => "pvu@gmail.com"],
    ["fullname" => "Đặng Văn G", "birthyear" => 19, "gender" => "Nam", "mclass" => "Lớp C25A", "email" => "ggang@gmail.com"],
    ["fullname" => "Bùi Thị H", "birthyear" => 21, "gender" => "Nữ", "mclass" => "Lớp C25E", "email" => "hbui@gmail.com"],
    ["fullname" => "Đỗ Xuân J", "birthyear" => 20, "gender" => "Nam", "mclass" => "Lớp C25F", "email" => "jdo@gmail.com"],
    ["fullname" => "Hồ Thị Bích N", "birthyear" => 19, "gender" => "Nữ", "mclass" => "Lớp C25A", "email" => "nho@gmail.com"],
    ["fullname" => "Ngô Văn K", "birthyear" => 22, "gender" => "Nam", "mclass" => "Lớp C25E", "email" => "kngo@gmail.com"],
    ["fullname" => "Dương Thị L", "birthyear" => 18, "gender" => "Nữ", "mclass" => "Lớp C25F", "email" => "lduong@gmail.com"],
    ["fullname" => "Lý Văn M", "birthyear" => 21, "gender" => "Nam", "mclass" => "Lớp C25A", "email" => "mly@gmail.com"],
    ["fullname" => "Ngô Thị N", "birthyear" => 20, "gender" => "Nữ", "mclass" => "Lớp C25E", "email" => "nngo@gmail.com"],
    ["fullname" => "Võ Văn O", "birthyear" => 19, "gender" => "Nam", "mclass" => "Lớp C25F", "email" => "ovo@gmail.com"],
    ["fullname" => "Phan Thị P", "birthyear" => 22, "gender" => "Nữ", "mclass" => "Lớp C25A", "email" => "pphan@gmail.com"],
    ["fullname" => "Trịnh Văn Q", "birthyear" => 20, "gender" => "Nam", "mclass" => "Lớp C25E", "email" => "qtrinh@gmail.com"],
    ["fullname" => "Đào Thị S", "birthyear" => 19, "gender" => "Nữ", "mclass" => "Lớp C25F", "email" => "sdao@gmail.com"],
    ["fullname" => "Cao Văn T", "birthyear" => 21, "gender" => "Nam", "mclass" => "Lớp C25A", "email" => "tcao@gmail.com"],
    ["fullname" => "Đinh Thị U", "birthyear" => 18, "gender" => "Nữ", "mclass" => "Lớp C25E", "email" => "udinh@gmail.com"]
];

$keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';
$gender = isset($_GET['gender']) ? $_GET['gender'] : 'all';
$mclass = isset($_GET['mclass']) ? $_GET['mclass'] : '';

$filteredStudents = array_filter($students, function ($student) use ($keyword, $gender, $mclass) {
    if (!empty($keyword) && mb_stripos($student['fullname'], $keyword) === false) {
        return false;
    }
    if (!empty($gender) && $gender !== 'all' && $student['gender'] !== $gender) {
        return false;
    }
    if (!empty($mclass) && $student['mclass'] !== $mclass) {
        return false;
    }
    return true;
});
?>

<main class="container my-5">
    <section class="shadow p-4 mx-auto mb-5" style="max-width: 650px; background-color: #fff; border-radius: 8px;">
        <h2 class="text-center mb-4">Tìm kiếm sinh viên</h2>
        <form action="student-search.php" method="GET">
            <div class="mb-3">
                <label for="keyword" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Nhập tên sinh viên cần tìm" value="<?= htmlspecialchars($keyword) ?>">
            </div>

            <div class="mb-3">
                <label class="form-label d-block">Giới tính:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderAll" value="all" <?= ($gender === 'all' || $gender === '') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="genderAll">Tất cả</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderNam" value="Nam" <?= ($gender === 'Nam') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="genderNam">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderNu" value="Nữ" <?= ($gender === 'Nữ') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="genderNu">Nữ</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="mclass" class="form-label">Lớp</label>
                <select name="mclass" id="mclass" class="form-select">
                    <option value="">-- Tất cả lớp --</option>
                    <option value="Lớp C25A" <?= ($mclass === 'Lớp C25A') ? 'selected' : '' ?>>Lớp C25A</option>
                    <option value="Lớp C25E" <?= ($mclass === 'Lớp C25E') ? 'selected' : '' ?>>Lớp C25E</option>
                    <option value="Lớp C25F" <?= ($mclass === 'Lớp C25F') ? 'selected' : '' ?>>Lớp C25F</option>
                </select>
            </div>

            <div class="d-flex justify-content-center gap-3 mt-4">
                <button type="submit" class="btn btn-primary px-4">Tìm kiếm</button>
                <button type="reset" class="btn btn-secondary px-4" onclick="window.location.href='student-search.php'">Làm lại</button>
            </div>
        </form>
    </section>

    <section class="shadow p-4 mx-auto" style="max-width: 900px; background-color: #fff; border-radius: 8px;">
        <h3 class="mb-3">Kết quả tìm kiếm</h3>
        <?php if (!empty($filteredStudents)): ?>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th class="text-center" style="width: 50px;">STT</th>
                            <th>Họ và tên</th>
                            <th class="text-center" style="width: 80px;">Tuổi</th>
                            <th class="text-center" style="width: 100px;">Giới tính</th>
                            <th>Lớp</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $stt = 1;
                        foreach ($filteredStudents as $student):
                        ?>
                            <tr>
                                <td class="text-center"><?= $stt++ ?></td>
                                <td><?= htmlspecialchars($student['fullname']) ?></td>
                                <td class="text-center"><?= htmlspecialchars($student['birthyear']) ?></td>
                                <td class="text-center"><?= htmlspecialchars($student['gender']) ?></td>
                                <td><?= htmlspecialchars($student['mclass']) ?></td>
                                <td><?= htmlspecialchars($student['email']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="alert alert-warning text-center mb-0" role="alert">
                Không tìm thấy sinh viên phù hợp.
            </div>
        <?php endif; ?>
    </section>
</main>

<?php
require "includes/footer.php";
?>
