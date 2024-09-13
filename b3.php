<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quinhhoa</title>
    <style>
        .h1 {
            font-size: 26px;
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
     <h1 class="h1">Bài tập buổi 3</h1>
<?php   
         $a = 2;
         $b = 2;
         $c = 4;
         $d = 5;
    //  IF ELSE 
     if ($a<$b) {
        echo 'a bé hơn b' ."<br>";
     }
     elseif ($a==$b){
        echo 'a bằng b' ."<br>";
     }
     else {
        echo 'a lớn bé hơn b' ."<br>";
     }

    //  switch case 
    switch($a) {
        case'2';
        echo 'đúng' ."<br>";
        break;
    }
     //  vòng lặp for(điều kiện; kiểm tra điều kiện; toán tử){}
    for ($i =0; $i<6 ; $i++){
        echo $i ."<br>";
    }

    // vòng lặp For each
    $ten = array('A','B','C');
    foreach ($ten as $c){
        echo 'the name is ' .$c ."<br>";
    }

    // Vòng lặp while
    // Vòng lặp do/while 
    // Break & Continue
    // Hàm 
    function kichthuoc($cd,$cr){
        $cv=($cd+$cr)*2;
        return $cv;
    }
    echo 'chu vi la' .kichthuoc(6,4)."<br>";

//  giải pt bậc 2
function hs($a,$b,$c) {
    $a = 2;
    $b = 2;
    $c = 4;
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
echo hs(2,4,6);
    // MẢNG : random stt lên bảng
    $random = array (
        1 => "Nhung",
        2 => "Oanh"  ,       
        3 => "Phong",
        4 => "Phương",
        5 => "Phượng",
        6 => "Quang",
        7 => "Quyên",
        8 => "Quỳnh",
        9 => "Tâm" ,
        10 => "Thanh",     
    );
    $rand=rand(1,count($random));
    echo 'Số thứ tự ' .$rand .' ' .$random[$rand] .' ' .'lên bảng' ;
    echo "<pre>";
    function inHinhChuNhat($cd, $cr) {
        for ($i = 1; $i < $cd; $i++) {
            for ($j = 1; $i < $cr ; $j++){
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
?>
</body>
</html>