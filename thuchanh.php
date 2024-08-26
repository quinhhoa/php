<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quinhhoa</title>
    <style>
        .h1 {
            color: plum;
   #         font-size: 20px;
        }
    </style>
</head>
<body>
    <h1 class="h1">chào mừng bạn đến với bài tập của quinhhoa</h1>
    <?php
    $a = "quinh hoa";
 
    echo '1.số ký tự trong chuỗi là:' .strlen("$a") ."<br>"; 
// 1
    echo '2.số từ:' .str_word_count("$a") ."<br>";
    echo '3.đảo ngược:' .strrev("$a") ."<br>";
    echo '4.tìm chuỗi con:' .strpos("quinh hoa", "hoa") ."<br>";
    // Câu 5
    echo str_replace("quinh", "thi quinh" , "nguyen quinh hoa",) ."<br>";
    // Câu 6
    $b = "q";
    $c = substr($a,0,1);
    $d = substr($b,0,1);
    if ($c == $d ) {
    echo 'chuỗi này bắt đầu bằng chuỗi con khác' ;
    }
    else {
    echo 'chuỗi này kh bắt đầu bằng chuỗi con khác' ."<br>";
    } 
    
    // Câu 7
    echo strtoupper ('Cin chào mọi người') ."<br>";
    // Câu 8
    echo strtolower ('HELLO MN') ."<br>";

    // Câu 9
    echo ucwords('chao moi nguoi') ."<br>";

    // Câu 10
    $c10="     câu 10";
    echo trim($c10) ."<br>";

    // Câu 11 loại bỏ ký tự đầu
    echo ltrim($a,'q') ."<br>";

    // Câu 12 loại bỏ ký tự cuối
    echo rtrim($a,'a') ."<br>";
    
    // Câu 13 : tách chuỗi thành mảng
    $c13 = 'tôi là quinh hoa';
    $c13_1 = explode(' ',$c13);
    print_r ($c13_1);
    echo"<br>"; 

    // Câu 14: nối các ptu của mảng thành chuỗi 
    $c14= array('toi','la','ai');
    $cau14= implode(",",$c14);
    echo $cau14 ."<br>";

    // Câu 15: thêm 1 chuỗi vào đầu hoặc cuối chuỗi đnag sử dụng
    echo str_pad($a,16,'toi la ', STR_PAD_LEFT) ."<br>";

    // Câu 16: kiểm tra 1 chuỗi có kết thúc bằng chuỗi khác không
    $c16 = strrchr($a,'a');
    if ($c16 == false) {
        echo 'kí tự không tồn tại trong chuỗi';
    }
    else {
        echo 'ký tự tồn tại trong chuỗi' ."<br>";
    }
    // // Câu 17: Kiểm tra xem 1 chuôi có chứa chuỗi con khác hay không
    $c17 = 'chinchaomoinguinhenn';
    $c1 = 'moi';
    if (strstr($c17, $c1)){
        echo "chuỗi c1 nằm trong c17";
    }
    else {
        echo 'chuỗi c1 kh nằm trong c17' ."<br>";
    }
    
    // // Câu 18: thay thế all các ký tự không phải số or chữ bằng ký tự khác trong chuỗi 
    $c18a = '/!/';
    $c18b = 'Hello !';
    $c18c = "cau"; 
    echo preg_replace($c18a, $c18c,$c18b) ."<br>";

    // // Câu 19: Ktra 1 chuỗi có phải số nguyên hay không 
    $h= 'hii';
    if(is_int($h))  {
        echo "chuỗi là số nguyên" ."<br>";
    }
    else {
        echo 'chuỗi k phải số nguyên' ."<br>" ;
    }

    // // Câu 20: ktra một chuỗi có phải 1 email hợp lệ hay không 
    $c20 = 'hilo'; 
    if (filter_var($c20, FILTER_VALIDATE_EMAIL)) {
        echo 'đây là email' ."<br>";
    } 
    else {
        echo 'k phải email';
    }


    ?>
</body>
</html>