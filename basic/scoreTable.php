<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        input,select{
            background-color: white;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #4cae4c;
        }

        .kq {
            background: #e7f3fe;
            padding: 15px;
            border-left: 6px solid #2196F3;
            margin-top: 20px;
            display: block;
        }
    </style>
</head>
<body>

    <?php
    $kq = ""; // Khởi tạo biến kết quả


        function sumof2num($hs1, $hs2, $year) {
            if ($year == 1){
                return ($hs1 + $hs2)/2; 
            }else {
                return ($hs1 + $hs2*2)/3; 
            }
        }

        // Lấy giá trị từ biểu mẫu
        $hs1 = $_POST['num1'];
        $hs2 = $_POST['num2'];
        $year = $_POST['year'];
        $kq = sumof2num($hs1, $hs2, $year); // Gọi hàm để tính tổng
    
    ?>

    <form action="scoreTable.php" method="post">
        <label for="num1">Semester 1:</label>
        <input type="number" id="num1" name="num1" required>
        
        <label for="num2">Semester 1:</label>
        <input type="number" id="num2" name="num2" required>
        

        <select name="year" id="year">year
            <option value="1">Year1</option>
            <option value="2">Year2</option>

        </select>
       
    
        <button type="submit">Add</button>
    </form>

    <div class="kq">Result: <?php echo ($kq); ?></div> 

</body>
</html>
