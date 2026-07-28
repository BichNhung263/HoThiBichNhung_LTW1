<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <style> 
    .navbar-nav .nav-item {
        margin-right: 15px;
    }
    </style>

</head>
<body>
    <?php 
        $menus=[ "Trang chủ", "Sản phẩm", "Liên hệ", "Khuyến mãi" ];
        $products = [
        ["name"=>"Chó","price"=>"80000"],
        ["name"=>"Mèo","price"=>"5000"],
        ["name"=>"Chim","price"=>"20000"]
    ];

    ?>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SiêuPetShop</a>
        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav ms-auto">

            <?php foreach($menus as $item) { ?>
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

</body>
</html>