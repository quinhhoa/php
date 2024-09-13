<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài kiểm tra</title>
</head>
<body>
    <?php
//Câu 8:  giải pt bậc 2
function hs($a,$b,$c) {
    if ($a==0){
        if ($b == 0){
            if ($c == 0){
                return 'phương trình vô số nghiệm' ."<br>";
            }
            else {
                return 'phương trình vô nghiệm'."<br>";
            }
        }
        else {
            $x= (-$c/$b);
            return $x;
        }
    }
    $denta= $b*$b-4*$a*$c;
    if ($denta > 0) { 
        $x1 = ((-$b+(sqrt($denta)))/(2*$a));
        $x2 = ((-$b-(sqrt($denta)))/(2*$a));
        return 'phương trình có 2 nghiệm là x1 = ' .$x1 .'x2 = '.$x2  ."<br>" ;
    }
    elseif ($denta == 0){
        $x = (-$b/(2*$a));
        return 'phương trình có nghiệm kép x = '.$x ."<br>";
    }
    else {
            return 'phương trình vô nghiệm' ."<br>";
    }
}
echo hs(2,3,-2);

// Câu 9: in ra màn hình chữ nhật 
echo "<pre>";
function inHinhChuNhat($cd, $cr) {
    for ($i = 1; $i <= $cd; $i++) {
        for ($j = 1; $j <= $cr ; $j++){
            if ( $i ==1 || $i == $cd || $j == 1 || $j == $cr){
                echo "*";
            }
            else {
                echo " ";
            }
        }
        echo PHP_EOL;
    }
}
echo inHinhChuNhat(5,7);

// Câu 10
function tinhTrungBinhCong($mang) {
           
    if (count($mang) == 0) {
        return 0; 
    }
    $tong = array_sum($mang);
    $trungBinhCong = $tong / count($mang);
    return $trungBinhCong;
}
$a= array(1,2,3,4,5,6,7,8,9,10);
echo "Trung binh cong cua mang la"." ".tinhtrungbinhcong($a)
    ?>


    
</body>
</html>