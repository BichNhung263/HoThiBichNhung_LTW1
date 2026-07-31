<?php
require_once "dao/StudentDAO.php";
require_once "models/Student.php";

$studentDAO = new StudentDAO();

if (!isset($_GET["id"])) {
    header("Location: student_index.php");
    exit;
}

$id = (int)$_GET["id"];
$student = $studentDAO->getById($id);

if ($student === null) {
    header("Location: student_index.php");
    exit;
}

$errors = [];
$studentCode = $student->studentCode;
$fullName = $student->fullName;
$phone = $student->phone;
$gender = $student->gender;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $studentCode = trim($_POST["studentCode"] ?? "");
    $fullName = trim($_POST["fullname"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $gender = $_POST["gender"] ?? "";

    if (empty($studentCode)) {
        $errors[] = "Mã sinh viên không được để trống.";
    }
    if (empty($fullName)) {
        $errors[] = "Họ và tên không được để trống.";
    }
    if (!empty($phone) && !preg_match('/^0[0-9]{9}$/', $phone)) {
        $errors[] = "Số điện thoại không đúng định dạng (phải gồm 10 chữ số và bắt đầu bằng số 0).";
    }
    if (empty($gender)) {
        $errors[] = "Giới tính phải được chọn.";
    }

    if (empty($errors)) {
        $updatedStudent = new Student($studentCode, $fullName, $phone, $gender);
        $updatedStudent->id = $id;

        if ($studentDAO->update($updatedStudent)) {
            header("Location: student_index.php");
            exit;
        } else {
            $errors[] = "Cập nhật sinh viên thất bại!";
        }
    }
}

require_once "includes/header.php";
?>
<main class="container my-5">
    <section class="mb-5">
        <h2 class="mb-4">Chỉnh sửa sinh viên</h2>
        
        <!-- HIỂN THỊ LỖI NẾU CÓ -->
        <?php if (!empty($errors)) { ?>
            <div class="alert alert-danger mb-4">
                <ul class="mb-0">
                    <?php foreach ($errors as $error) { ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
        
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Mã sinh viên</label>
                <input type="text" name="studentCode" class="form-control" value="<?= htmlspecialchars($studentCode) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Họ và tên</label>
                <input type="text" name="fullname" class="form-control" value="<?= htmlspecialchars($fullName) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Số điện thoại</label>
                <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($phone) ?>">
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Giới tính</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Nam" id="gender_nam" <?= ($gender === "Nam") ? "checked" : "" ?>>
                    <label class="form-check-label" for="gender_nam">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="Nữ" id="gender_nu" <?= ($gender === "Nữ") ? "checked" : "" ?>>
                    <label class="form-check-label" for="gender_nu">Nữ</label>
                </div>
            </div>
            <div class="mt-4">
                <button class="btn btn-primary me-2">Cập nhật</button>
                <a href="student_index.php" class="btn btn-secondary">Quay lại</a>
            </div>
        </form>
    </section>
</main>
<?php 
require_once "includes/footer.php";
?>
