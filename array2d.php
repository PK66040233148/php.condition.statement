<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array 2D</h1>
    <?php

    $foods = array(
        array("A",22,18),
        array("B",15,13),
        array("C",5,2),
        array("D",17,15),

    );
    echo"<h2>ปริมาณอาหารขั้นต่ำ</h2>\n";

    for ($i = 0; $i < 4; $i++) {
            echo $foods[$i][0] , " : Price " , $foods[$i][1] , " Paid " , $foods[$i][2];
            echo "<br>\n";
    }
    
    echo "<hr>";

    echo "<h2>ปริมาณสั่งซื้อส้มตำ</h2>\n";
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo $foods[$i][$j] , "" ;
                
            }
            echo "<br>";
        }

        echo "<hr>";

    ?>
</body>
</html>