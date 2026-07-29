
<?php
/**
    * Định dạng giá tiền với định dạng số và ký hiệu tiền tệ
    *
    * @param float $price Giá tiền cần định dạng
    * @param string $currency Ký hiệu tiền tệ (mặc định là '₫')
    * @return string Giá tiền đã được định dạng
*/
function formatPrice($price, $currency = '₫') {
    return number_format($price, 0, ',', '.') . "$currency"; 
}


/**
 * Tính tổng số lượng sản phẩm trong giỏ hàng
 *
 * @param array $products Mảng chứa thông tin sản phẩm, mỗi sản phẩm có trường 'quantity'
 * @return int Tổng số lượng sản phẩm
 */
function getTotalQuantity($products)
{
    $total = 0;
    foreach ($products as $product) {
        $total += $product['quantity'];
    }
    return $total;
}

/**
 * Tính tổng giá tiền của các sản phẩm trong giỏ hàng
 *
 * @param array $products Mảng chứa thông tin sản phẩm, mỗi sản phẩm có trường 'quantity' và 'price'
 * @return float Tổng giá tiền
 */
function getTotalPrice($products)
{
    $total = 0;
    foreach ($products as $product) {
        $total += $product['quantity'] * $product['price'];
    }
    return $total;
}

function showProductTable($products, $tableTitle)
{
    echo "<h3 class='mt-4 mb-3'>$tableTitle</h3>";
    echo "<table class='table table-bordered table-hover table-striped align-middle'>";
    echo "
    <thead class='table-dark'>
            <tr>
                <th width='60'>STT</th>
                <th width='120'>Mã SP</th>
                <th>Tên sản phẩm</th> 
                <th width='120'>Số lượng</th>
                <th width='180' class='text-end'>Giá nhập</th>
            </tr>
        </thead>";
            foreach ($products as $key => $product){
                echo "<tr>";
                echo "<td>". ($key +1). "</td>";
                echo "<td>{$product['id']}</td>";
                echo "<td>{$product['proname']}</td>";
                echo "<td class='text-center'>{$product['quantity']}</td>";
                echo "<td class='text-end'>". formatPrice($product['price']). "</td>";
                echo "</tr>";
            }
            echo "</tbody>"
            . "<tfoot class='table-warning fw-bold'>
                <tr>
                    <td colspan='3' class='text-end'>Tổng cộng</td>
                    <td class='text-center'>" . getTotalQuantity($products) . "</td>
                    <td></td>
                </tr>
            </tfoot>";
            echo "</table>";
}
?>