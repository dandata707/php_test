Cau 8: 
<?php
function giaiPhuongTrinhBac2($a, $b, $c) {
    // Kiểm tra các hệ số
    if ($a == 0) {
        echo "Đây không là pt bậc 2";
        return;
    }
    
    $delta = $b * $b - 4 * $a * $c;
    
    // giải
    if ($delta < 0) {
        echo "Phương trình không có nghiệm thực";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);


        echo "Phương trình có nghiệm kép x = $x";
    } else {



        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Phương trình có 2 nghiệm:<br>";
        echo "x1 = $x1<br>";
        echo "x2 = $x2 <br>";
    }
}
// test
giaiPhuongTrinhBac2(10, -9, 20); // x1 = 3, x2 = 2
?>


Câu 9: 
// Hình chữ nhật 5x7 với dấu * bản chất là 1 ma trận mà các phần tử là dấu sao kích thước 5x7
<?php
function inHCN() {
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 7; $j++) {
            // In dấu * cho viền ngoài

            if ($i == 0 || $i == 4 || $j == 0 || $j == 6) {
                echo "* ";
            } else {
                echo "&nbsp;&nbsp;"; 
            }
        }
        echo "<br>";
    }
}

inHCN();
?>

//Câu 10: 
<?php
function tinhTrungBinhCong($mang) {
    if (empty($mang)) {
        return 0;
    }
    
    $tong = 0;
    $soPhanTu = count($mang); //lay so phan tu
    
    foreach ($mang as $giaTri) {
        $tong += $giaTri; //tong gia tri
    }
    
    return $tong / $soPhanTu;
}

$mangSo = [20,30,10,13,40,90];
$trungBinh = tinhTrungBinhCong($mangSo);
echo "Trung bình cộng của array: $trungBinh";
?>