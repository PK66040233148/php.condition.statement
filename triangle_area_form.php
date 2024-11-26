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

        h2 {
            text-align: center;
            color: #4CAF50;
            padding-top: 20px;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 40px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 8px;
            display: inline-block;
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

        .footer {
            text-align: center;
            color: #888;
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <h2>คำนวณพื้นที่รูป 3 เหลี่ยม</h2>

    <div class="container">
        <form action="triangle_area.php" method="get">
            <div class="form-group">
                <label for="width">ความยาวฐาน:</label>
                <input type="text" name="width" id="width" required>
            </div>

            <div class="form-group">
                <label for="height">ความสูง:</label>
                <input type="text" name="height" id="height" required>
            </div>

            <input type="submit" value="คำนวณ">
        </form>
    </div>

    <div class="footer">
        <p>© 2024 คำนวณพื้นที่รูป 3 เหลี่ยม</p>
    </div>

</body>

</html>