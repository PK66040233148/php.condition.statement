<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>การใช้คำสั่งแบบ Loop Statements</h1>
    <?php
     
     echo "While loop";
     echo "<br><br>";

     $x = 1;
     while ($x <= 5) {
        echo "รอยที่ $x <br>";
        //if ($x == 3) continue;  //brake END LOOP //continue NAVER END
        $x++;
        }
        $i = 1;
        while ($i <= 50) {echo "="; $i++;}
            echo "<br>";

        echo "Do While loop";
        echo "<br><br>";
        ///////////////////////////////
        $h = 1;
        do{
            echo "<br>Do While รอบที่ $h"; 
            $h++;
        }while ($h <= 5);
        echo "<br>";
        ///////////////////////////////
        $i = 1;
        while ($i <= 50) {echo "="; $i++;}
            echo "<br>";

        echo "<br>For loop<br>";
        for ($i = 0; $i <= 10; $i++) {
            echo "<br>For รอบที่ $i "; 
        }
        ///////////////////////////////
        echo "<br>";
        echo "<br>";

        $i = 1;
        while ($i <= 50) {echo "="; $i++;}
            echo "<br>";
        ///////////////////////////////
    for ($a = 1; $a <= 5; $a++) {
         for ($j=1; $j <= 5; $j++) { 
           echo "*";
         }
         echo "<br>";
        }

        ///////////////////////////////
        $i = 1;
        while ($i <= 50) {echo "="; $i++;}
            echo "<br>";
        ///////////////////////////////    
        echo "<h2>Foreach loop</h2>";
        $pet = array("แมว","สุนัข", "นกแก้ว", "ปลาทอง","หมูเด้ง");
        foreach ($pet as $value) {
            echo "i like " .$value. "<br>";
        }
        echo "<br>-----------------------------------------<br>";


        echo "<h2>Foreach loop แบบ key = value</h2>";
        $food = array("A"=>"B","C"=> "D","E"=>"F");
        foreach ($food as $student => $value) {
            echo "<br>Name Std like to eat $value";
        }

    ?>
</body>
</html>