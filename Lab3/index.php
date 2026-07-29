<!--embed-->
<?php
require "includes/header.php";
require "functions/common.php";
//Danh sách sản phẩm
$products_C1 = [
    ['id' => 'P001', 'proname' => 'Sản phẩm 1', "quantity" => 10, 'price' => 100000, "image" => "img_avatar1.png"],
    ['id' => 'P002', 'proname' => 'Sản phẩm 2', "quantity" => 5, 'price' => 200000, "image" => "img_avatar2.png"],
    ['id' => 'P003', 'proname' => 'Sản phẩm 3', "quantity" => 8, 'price' => 300000, "image" => "img_avatar3.png"],
    ['id' => 'P004', 'proname' => 'Sản phẩm 4', "quantity" => 3, 'price' => 400000, "image" => "img_avatar4.png"],
    ['id' => 'P005', 'proname' => 'Sản phẩm 5', "quantity" => 12, 'price' => 500000, "image" => "img_avatar5.png"],
    ['id' => 'P006', 'proname' => 'Sản phẩm 6', "quantity" => 7, 'price' => 600000, "image" => "img_avatar6.png"],
    ['id' => 'P007', 'proname' => 'Sản phẩm 7', "quantity" => 9, 'price' => 700000, "image" => "img_avatar7.png"],
    ['id' => 'P008', 'proname' => 'Sản phẩm 8', "quantity" => 4, 'price' => 800000, "image" => "img_avatar8.png"],
    ['id' => 'P009', 'proname' => 'Sản phẩm 9', "quantity" => 6, 'price' => 900000, "image" => "img_avatar9.png"],
    ['id' => 'P010', 'proname' => 'Sản phẩm 10', "quantity" => 11, 'price' => 1000000, "image" => "img_avatar10.png"]
];
//Danh sách phụ kiện
$products_C2 = [
    ['id' => 'PK001', 'proname' => 'Sản phẩm 1', "quantity" => 10, 'price' => 100000, "image" => "img_avatar1.png"],
    ['id' => 'PK002', 'proname' => 'Sản phẩm 2', "quantity" => 5, 'price' => 200000, "image" => "img_avatar2.png"],
    ['id' => 'PK003', 'proname' => 'Sản phẩm 3', "quantity" => 8, 'price' => 300000, "image" => "img_avatar3.png"],
    ['id' => 'PK004', 'proname' => 'Sản phẩm 4', "quantity" => 3, 'price' => 400000, "image" => "img_avatar4.png"],
    ['id' => 'PK005', 'proname' => 'Sản phẩm 5', "quantity" => 12, 'price' => 500000, "image" => "img_avatar5.png"],
    ['id' => 'PK006', 'proname' => 'Sản phẩm 6', "quantity" => 7, 'price' => 600000, "image" => "img_avatar6.png"],
    ['id' => 'PK007', 'proname' => 'Sản phẩm 7', "quantity" => 9, 'price' => 700000, "image" => "img_avatar7.png"],
    ['id' => 'PK008', 'proname' => 'Sản phẩm 8', "quantity" => 4, 'price' => 800000, "image" => "img_avatar8.png"],
    ['id' => 'PK009', 'proname' => 'Sản phẩm 9', "quantity" => 6, 'price' => 900000, "image" => "img_avatar9.png"],
    ['id' => 'PK010', 'proname' => 'Sản phẩm 10', "quantity" => 11, 'price' => 1000000, "image" => "img_avatar10.png"]
];
?>


<!-- Main -->
<main class="container my-5">
    <section class="mb-5">
        <?php showProductTable($products_C1, "Danh sách sản phẩm"); ?>
    </section>
    <section class="mb-5">
        <?php showProductTable($products_C2, "Danh sách phụ kiện"); ?>
    </section>
    <section class="mb-5">
        <h3>Lorem ipsum dolor sit amet</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.Aliquam id quasi voluptas saepe! Quasi repellat aliquid est
            dolorum quidem tenetur error ad similique, molestias non, iste exercitationem suscipit ex minima molestiae corrupti eligendi
            quibusdam voluptatibus facilis nobis et ducimus esse! Rerum sapiente aut asperiores laudantium, aut quia quam nisi
            accusamus explicabo vero numquam maxime neque obcaecati, iusto incidunt eligendi ab voluptas eum. Consequuntur voluptate
            voluptatum totam pariatur nostrum asperiores deserunt consequatur ipsa iste delectus! Iusto, totam hic suscipit est
            earum magni quisquam blanditiis eveniet numquam eum laboriosam sed tempora unde ipsum delectus mollitia sequi dolorem explicabo.
            Harum in minima possimus.
        </p>
    </section>
</main>
<!--embed Footer-->
<?php
require "includes/footer.php";
?>