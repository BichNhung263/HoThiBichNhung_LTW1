<?php
require "includes/header.php";
?>

<main class="container my-5">
    <section class="mb-5 shadow p-3 mx-auto" style="width: 550px;">
        <h2>Thông tin sinh viên</h2>
        <form action="form-post-validation-more.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="fullname">Họ tên</label>
                <input type="text" class="form-control" id="fullname" placeholder="Họ tên" name="fullname">
            </div>
            <div class="mb-3 mt-3">
                <label for="birthyear">Tuổi</label>
                <input type="text" class="form-control" id="birthyear" placeholder="Tuổi" name="birthyear">
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="gender">Giới tính:</label>
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" id="gender1" name="gender" value="1">
                    <label class="form-check-label" for="gender1">Nam</label>
                </div>
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" id="gender2" name="gender" value="2">
                    <label class="form-check-label" for="gender2">Nữ</label>
                </div>
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" id="gender3" name="gender" value="3">
                    <label class="form-check-label" for="gender3">Khác</label>
                </div>
            </div>
            <div class="mb-3 mt-3">
                <label for="mclass">Lớp</label>
                <select name="mclass" id="mclass" class="form-control">
                    <option value="">-- Chọn lớp --</option>
                    <option value="C1">Lớp C25A</option>
                    <option value="C2">Lớp C25E</option>
                    <option value="C3">Lớp C25F</option>
                </select>
            </div>
            <div class="mb-3 mt-3">
                <label class="d-block">Sở thích:</label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobby1" name="hobbies[]" value="Đọc sách">
                    <label class="form-check-label" for="hobby1">Đọc sách</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobby2" name="hobbies[]" value="Chơi thể thao">
                    <label class="form-check-label" for="hobby2">Chơi thể thao</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobby3" name="hobbies[]" value="Nghe nhạc">
                    <label class="form-check-label" for="hobby3">Nghe nhạc</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobby4" name="hobbies[]" value="Du lịch">
                    <label class="form-check-label" for="hobby4">Du lịch</label>
                </div>
            </div>
            <div class="mb-3 mt-3">
                <label for="address">Địa chỉ</label>
                <textarea class="form-control" id="address" name="address" rows="3" placeholder="Địa chỉ"></textarea>
            </div>
            <div class="mb-3 mt-3">
                <label for="dob">Ngày sinh</label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>
            <div class="mb-3 mt-3">
                <label for="avatar">Ảnh đại diện</label>
                <input type="file" class="form-control" id="avatar" name="avatar">
            </div>
            <div class="d-flex justify-content-center gap-3">
                <button type="submit" class="btn btn-primary">Gửi</button>
                <button type="reset" class="btn btn-primary">Làm lại</button>
            </div>
        </form>

        <?php
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $fullname = trim($_POST['fullname'] ?? '');
            $birthyear = trim($_POST['birthyear'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $gender = $_POST['gender'] ?? '';
            $mclass = $_POST['mclass'] ?? '';
            $hobbies = $_POST['hobbies'] ?? [];
            $address = trim($_POST['address'] ?? '');
            $dob = $_POST['dob'] ?? '';

            if (empty($fullname)) {
                $errors[] = "Họ và tên không được để trống.";
            } else if (strlen($fullname) < 5) {
                $errors[] = "Họ tên phải có ít nhất 5 ký tự.";
            }

            if ($birthyear === '') {
                $errors[] = "Tuổi không được để trống.";
            } else if (!is_numeric($birthyear) || $birthyear < 18 || $birthyear > 60) {
                $errors[] = "Tuổi phải là số và nằm trong khoảng từ 18 đến 60.";
            }

            if (empty($email)) {
                $errors[] = "Email không được để trống.";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Email không đúng định dạng.";
            }
            if (empty($gender)) {
                $errors[] = "Giới tính bắt buộc chọn.";
            }

            if (empty($mclass)) {
                $errors[] = "Lớp bắt buộc chọn.";
            }

            if (empty($hobbies)) {
                $errors[] = "Chọn ít nhất một sở thích.";
            }
            if (empty($address)) {
                $errors[] = "Địa chỉ không được để trống.";
            }
            if (empty($dob)) {
                $errors[] = "Ngày sinh không được để trống.";
            }

            if (empty($_FILES['avatar']['name'])) {
                $errors[] = "Ảnh đại diện bắt buộc chọn.";
            } else {
                $ext = strtolower(pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION));
                $allowed_exts = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
                if (!in_array($ext, $allowed_exts)) {
                    $errors[] = "Chỉ chấp nhận các định dạng ảnh: jpg, jpeg, png, gif, webp.";
                }

                if ($_FILES['avatar']['size'] > 200 * 1024) {
                    $errors[] = "Kích thước ảnh không được vượt quá 200KB.";
                }
            }

            if (count($errors) > 0) {
                ?>
                <div class="alert alert-danger mt-4">
                    <ul class="mb-0">
                        <?php
                        foreach ($errors as $error) {
                            echo "<li>$error</li>";
                        }
                        ?>
                    </ul>
                </div>
                <?php
            } else {
                $genderText = ($gender == "1") ? "Nam" : (($gender == "2") ? "Nữ" : "Khác");
                $mclassText = ($mclass == "C1") ? "Lớp C25A" : (($mclass == "C2") ? "Lớp C25E" : (($mclass == "C3") ? "Lớp C25F" : $mclass));
                $avatarName = $_FILES['avatar']['name'];
                $hobbiesStr = implode(", ", $hobbies);
                ?>
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white">
                        Thông tin đã nhập
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Họ và tên</th>
                                <td><?= htmlspecialchars($fullname) ?></td>
                            </tr>
                            <tr>
                                <th>Tuổi</th>
                                <td><?= htmlspecialchars($birthyear) ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?= htmlspecialchars($email) ?></td>
                            </tr>
                            <tr>
                                <th>Giới tính</th>
                                <td><?= $genderText ?></td>
                            </tr>
                            <tr>
                                <th>Lớp</th>
                                <td><?= htmlspecialchars($mclassText) ?></td>
                            </tr>
                            <tr>
                                <th>Sở thích</th>
                                <td><?= htmlspecialchars($hobbiesStr) ?></td>
                            </tr>
                            <tr>
                                <th>Địa chỉ</th>
                                <td><?= nl2br(htmlspecialchars($address)) ?></td>
                            </tr>
                            <tr>
                                <th>Ngày sinh</th>
                                <td><?= htmlspecialchars($dob) ?></td>
                            </tr>
                            <tr>
                                <th>Ảnh đại diện</th>
                                <td><?= htmlspecialchars($avatarName) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </section>
</main>

<?php
require "includes/footer.php";
?>