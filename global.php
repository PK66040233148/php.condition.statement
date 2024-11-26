<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Global Variable</h1>

    <?php

    $x = 75;
    echo"X = ", $x;

    function my_function() {
        echo "<br>";

       // echo " อ่านจาก Function ค่าของ X ==>",$GLOBALS['x']; //Call X outside fn

        global $x;

        echo "<br> ";

        $x = 35;

        echo"X = ", $x;

        echo "<br> ";
    }
    my_function();

    echo "<br> ";

    echo"X = ", $x;

    echo "<hr>";
    
    echo "<h2>การใช้ข้อมูลจาก Sever ด้วย \$_SERVER</h2>";

    echo $_SERVER['PHP_SELF']; 
    echo "<br>";

    echo $_SERVER['SERVER_NAME'];
    echo "<br>";

    echo $_SERVER['HTTP_HOST'];
    echo "<br>";

    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";

    echo $_SERVER['HTTP_USER_AGENT']; 
    echo "<br>";

    echo $_SERVER['SCRIPT_NAME']; 
    echo '<br>';
    





















    ?>
</body>
</html>