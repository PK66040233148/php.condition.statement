<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณพื้นที่รูป 3 เหลี่ยม</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 1.2em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h2 {
            text-align: center;
            color: #4CAF50;
            padding-top: 20px;
        }

        .container {
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 40px;
        }

        .result {
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 4px;
            margin-top: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .result p {
            font-size: 1.2em;
            color: #333;
        }

        .footer {
            text-align: center;
            color: #888;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <h2>คำนวณพื้นที่รูป 3 เหลี่ยม รับค่าจากฟอร์ม</h2>

    <div class="container">
        <?php
            if (isset($_GET['width']) && isset($_GET['height'])) {
                $height = $_GET['height'];
                $width = $_GET['width'];

                // Calculate the area
                $area = 0.5 * $height * $width;
        ?>

        <div class="result">
            <p><strong>สูตรการคำนวณ:</strong> 0.5 × ความสูง × ความยาว</p>
            <p><strong>ความสูง:</strong> <?php echo $height; ?> หน่วย</p>
            <p><strong>ความยาว:</strong> <?php echo $width; ?> หน่วย</p>
            <p><strong>พื้นที่ของรูป 3 เหลี่ยม:</strong> <?php echo $area; ?> ตารางหน่วย</p>
        </div>

        <?php
            } else {
                echo "<p>กรุณากรอกข้อมูลความยาวฐานและความสูงในฟอร์ม</p>";
            }
        ?>
        <input type="submit" value="Goback" onclick="window.location.href='triangle_area_form.php'">

    </div>

    <div class="footer">
    
        <p>© 2024 คำนวณพื้นที่รูป 3 เหลี่ยม</p>
    </div>

</body>
</html>
