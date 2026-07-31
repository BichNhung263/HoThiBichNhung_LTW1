<?php
require_once "dao/StudentDAO.php";

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

if ($studentDAO->delete($id)) {
    header("Location: student_index.php");
    exit;
} else {
    require_once "includes/header.php";
    ?>
    <main class="container my-5">
        <div class="alert alert-danger">
            <strong>Xóa thất bại!</strong> Không thể xóa sinh viên này. 
            <a href="student_index.php" class="alert-link">Quay lại danh sách</a>.
        </div>
    </main>
    <?php
    require_once "includes/footer.php";
}
?>
