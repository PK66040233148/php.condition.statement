<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    echo "<h2>การใช้คำสั่งแบบ Condition ( กลุ่มคำสั่ง IF )</h2>";

    $x = 5;
    $y = 8;

    echo "\$x = $x <br>";
    echo "\$y = $y <br>";

    if($x<$y){
        echo "X < Y";
    }
    else{
        echo "Y < X";
    }
    echo "<br>--------------------------";





    echo "<br><h2>Short hand if</h2>";
    $score = 35;
    if($score >= 0)echo "Congratulations";
    echo "<br>";
    $result = $score >= 50 ? "Grade P" :"Grade F";
    echo "<br>";
    echo "Ur result is : " .$result;
    echo "<br>";
    echo "///////////////////////////";



    echo "<br><h2>Switch case</h2>";
    echo "<br>";
    $pet = "Dog";
    switch ($pet) {
        case 'Cat': //if u pick dog first it'll start at dog if did't have brake;
            echo "<br>y'all look like Cat";
            break;

        case 'Dog':
                echo "<br>y'all look like Dog";
            break;


        case 'Bird':
            echo "<br>y'all look like Bird";
            break;

        default:
            echo "<br> just a guy";
            break;

    
    }
    ?>
    
</body>
</html>