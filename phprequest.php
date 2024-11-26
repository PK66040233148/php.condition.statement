<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>โปรดกรอกชื่อของท่าน</h1>
    <form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="post">
        โปรดกรอกชื่อ : <input type="text" name="frame">
        <input type="submit">
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
     // $name = htmlspecialchars($_REQUEST['frame']);

      $name = htmlspecialchars($_POST['frame']);

    if(empty($name)){
        echo "ชื่อที่ว่าง";
    }else{
        echo "ยินดีต้อนรับคุณ ",$name;
        

    }
}
    ?>
</body>
</html>