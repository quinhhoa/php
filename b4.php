<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //  viết chương trình in ra số chẵn từ 1-10
    for ($i=0; $i <= 10; $i++) {
        if ($i % 2 == 0){
            echo $i ."<br>";
        }
    }
    // ktra xem số đó có phải số nto không
    function snt($a){
        if ($a < 2) {
            return 'đây không phải số nguyên tố';
        }
        
        $cb2= sqrt($a);
        for ($i = 2; $i <=$cb2; $i++ ) {
                if ($a % $i == 0){
                    return 'đây kh phải số nguyên tố';
                }
        }
        return 'đây là số nguyên tố';
        
    }
    echo snt(6)."<br>";
    //  in ra hình chữ nhật
    function inHinhChuNhat($chieuRong, $chieuCao) {
        for ($i = 1; $i <= $chieuCao; $i++) {
            for ($j = 1; $j <= $chieuRong; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
    echo inHinhChuNhat(5,3);
    // 1 số là số chẵn hay số lẻ?
    $x =0;
    if ($x == 0){
        echo 'đây không phải số chẵn hay lẻ'."<br>";
    }
    elseif ($x % 2==0) {
        echo 'đây là số chẵn'."<br>";
    }
    else {
        echo 'đây là sô lẻ'."<br>";
    }
    // sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
    $đgk = 8;
    $đck = 5;
    $đtb = ($đgk*0.3)+($đck*0.7);
    if ($đtb < 5){
        echo 'trung bình-yếu'."<br>";
    }
    elseif ($đtb < 7.0){
        echo 'khá'."<br>";
    }
    elseif ($đtb < 9.0) {
        echo 'giỏi'."<br>";
    }
    else {
        echo 'xuất sắc'."<br>";
    }
    // Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ
    $namm = 2024;
    if ($namm %2 == 0) {
        echo 'chẵn';
    }
    else {
        echo'lẻ';
    }
    echo "<br>";
    //sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
    for ($i = 1; $i<=100; $i++) {
        echo $i ."";
    }
    // viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
    $nam = array(1990, 1991, 1992, 1993, 1994, 1995);
    foreach ($nam as $c){
        echo $c ."<br>";
    }
    //  hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo "<b>" . $i . "</b> ";
        } else {
            echo $i . " ";
        }
    }
    // 
    for ($i=0; $i<10;$i++){
        if ($i %2==0){
            echo $i ."";
        }
    }
    // 
    
    
    ?>

    
</body>
</html>