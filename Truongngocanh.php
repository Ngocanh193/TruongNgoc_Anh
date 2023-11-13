<!-- Bai kiem tra 
Trac nghiem : 
Cau 1 : 5
Cau 2 : b-20
Cau 3 : d
Cau 4 : a
Cau 5 : a -->

<?php
// Bài 1:
echo "Bài 1: <br>";
// Hàm kiểm tra số nguyên dương có phải số nguyên tố không 
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
// Kiểm tra xem số 9 có phải là số nguyên tố hay không
$numberToCheck = 9;
if (isPrime($numberToCheck)) {
    echo $numberToCheck . " là số nguyên tố. <br>";
} else {
    echo $numberToCheck . " không là số nguyên tố. <br>";
}

// Hiển thị danh sách các số nguyên tố từ 1 đến 100
echo "Các số nguyên tố từ 1 đến 100 là: <br>";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
echo "<br>";
?>


<?php
// Bài 2: 
echo "Bài 2: <br>";
// Khai báo thông tin sản phẩm trong văn phòng phẩm
$products = [
    [
        'name' => 'Bút ',
        'price' => 3000,
        'quantity' => 4,
    ],
    [
        'name' => 'Sách',
        'price' => 300000,
        'quantity' => 2,
    ],
    [
        'name' => 'Tẩy',
        'price' => 6000,
        'quantity' => 3,
    ],
    [
      'name' => 'Thước kẻ',
      'price' => 10000,
      'quantity' => 2,
    ],
    [
    'name' => 'Giấy nhớ',
    'price' => 5000,
    'quantity' => 5,
    ]
    ];
// Hiển thị thông tin sản phẩm : 
foreach ($products as $product) {
    echo "Tên sản phẩm là: " . $product['name'] . "<br>";
    echo "Giá 1 sản phẩm: " . $product['price'] . "<br>";
    echo "Số lượng: " . $product['quantity'] . "<br>";
  
}

// Hàm tính tổng giá trị các sản phẩm 
function tinhtongGiaTri($products) {
    $tongGiaTrisp = 0;

    foreach ($products as $product) {
        $tongGiaTrisp += $product['price'] * $product['quantity'];
    }

    return $tongGiaTrisp;
}

$tongGiaTrisp = tinhtongGiaTri($products);
echo "Tổng giá trị của tất cả sản phẩm là: " . $tongGiaTrisp . "<br>";
?>
