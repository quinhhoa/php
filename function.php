<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
             function hs($a,$b,$c) {
                $a = 2;
                $b = 2;
                $c = 4;
                if ($a==0){
                    if ($b == 0){
                        if ($c == 0){
                            return 'phương trình vô số nghiệm';
                        }
                        else {
                            return 'phương trình vô nghiệm';
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
                    return 'phương trình có 2 nghiệm là x1 = ' .$x1 .'x2 = '.$x2  ;
                }
                elseif ($denta == 0){
                    $x = (-$b/(2*$a));
                    return 'phương trình có nghiệm kép x = '.$x;
                }
                else {
                        return 'phương trình vô nghiệm';
                }
            }
            echo hs(2,4,6);
    ?>
</body>
</html>