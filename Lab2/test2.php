<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .navbar-nav {
            margin: 0 auto;
            justify-content: center;
        }

        .navbar-nav .nav-item {
            margin-right: 15px;
        }

        .banner {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .card-img-top {
            height: 180px;
            object-fit: cover;
        }
    </style>

</head>

<body>
    <?php
    $menus = ["Trang chủ", "Sản phẩm", "Liên hệ", "Khuyến mãi"];
    $products = [
        ["name" => "Chó", "price" => "2000000"],
        ["name" => "Mèo", "price" => "150000"],
        ["name" => "Chim", "price" => "50000"],
    ];

    $categories = [
        "Chó con",
        "Mèo con",
        "Chim cảnh"
    ];
    $brands = [
        "Corgi",
        "Shiba Inu",
        "Mèo Anh Lông Dài",
        "Mèo Ba Tư",
        "Chim Sẻ",
        "Chim Hoàng Yến"
    ];

    $methods = [
        "Email",
        "Điện thoại"
    ];

    $times = [
        "Buổi sáng (8h-11h)",
        "Buổi chiều (13h-17h)"
    ];
    ?>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SiêuPetShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto">
                    <?php foreach ($menus as $item) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?= $item ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <section class="banner">
        <div class="container text-center">
            <h1>Chào mừng đến với SiêuPetShop</h1>
            <p>Khám phá các sản phẩm tuyệt vời của chúng tôi</p>
            <a href="#" class="btn btn-warning">Mua ngay</a>
        </div>
    </section>

    <section id="products" class="py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h2>Sản phẩm nổi bật</h2>
                </div>
            </div>
            <div class="row g-4">
                <?php foreach ($products as $product) { ?>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                                <div class="card-body">
                                <h5 class="card-title"><?= $product['name'] ?></h5>
                                <p class="card-text">Giá: <?= number_format($product['price'], 0, ',', '.') ?>₫</p>
                                <div class="mt-auto">
                                    <a href="#" class="btn btn-primary ">Xem chi tiết</a>
                                    <a href="#" class="btn btn-warning">Nút Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Thương hiệu nổi bật -->
    <div class="container my-5">
        <h2 class="text-center mb-4">
            Thương hiệu nổi bật
        </h2>
        <div class="row">
            <?php foreach ($brands as $brand) { ?>
                <div class="col-md-3 mb-3">
                    <div class="border rounded p-3 text-center shadow-sm">
                        <?= $brand ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Form đăng ký nhận báo giá -->
    <div class="container mt-5 mb-5">
        <h2 class="text-center mb-4">
            Đăng ký nhận báo giá
        </h2>
        <form action="" method="post">
            <div class="row">
                <!-- Họ tên -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Họ và tên
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        name="fullname"
                        placeholder="Nhập họ và tên">
                </div>
                <!-- Email -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Email
                    </label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        placeholder="Nhập Email">
                </div>
                <!-- SĐT -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Số điện thoại
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        name="phone"
                        placeholder="Nhập số điện thoại">
                </div>
                <!-- Địa chỉ -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Địa chỉ
                    </label>
                    <input
                        type="text"
                        class="form-control"
                        name="address"
                        placeholder="Nhập địa chỉ">
                </div>
                <!-- Danh mục sản phẩm -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Danh mục sản phẩm
                    </label>
                    <select class="form-select" name="category">
                        <?php foreach ($categories as $category) { ?>
                            <option value="<?= $category ?>"><?= $category ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <!-- Hình thức nhận báo giá -->
                <div class="col-md-6 mb-3">
                    <label class="form-label d-block">
                        Hình thức nhận báo giá
                    </label>
                    <?php foreach ($methods as $method) { ?>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="method"
                                value="<?= $method ?>">
                            <label class="form-check-label"><?= $method ?>
                            </label>
                        </div>
                    <?php } ?>
                </div>
                <!-- Thời gian -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">
                        Thời gian liên hệ
                    </label>
                    <select class="form-select" name="time">
                        <?php foreach ($times as $time) { ?>
                            <option value="<?= $time ?>"><?= $time ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <!-- Nội dung -->
                <div class="col-12 mb-3">
                    <label class="form-label">
                        Nội dung yêu cầu
                    </label>
                    <textarea
                        class="form-control"
                        rows="5"
                        name="content"
                        placeholder="Nhập nội dung cần tư vấn"></textarea>

                </div>
                <!-- Button -->
                <div class="col-12 text-center">
                    <button
                        type="submit"
                        class="btn btn-primary">
                        Gửi yêu cầu
                    </button>
                    <button
                        type="reset"
                        class="btn btn-secondary">
                        Làm mới
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>SiêuPetShop</h5>
                    <p class="small">Địa chỉ: 123 Đường Mẫu, Thành phố - Điện thoại: 0123 456 789</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="small mb-0">© <?= date('Y') ?> SiêuPetShop. Tất cả quyền được bảo lưu.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>