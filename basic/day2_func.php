<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>

    <?php
    
    $kq = ""; // Khởi tạo biến kết quả


        function check($hs1) {
            if ($hs1 % 2 == 0){
                return true;
            }return false;
        }

        // Lấy giá trị từ biểu mẫu
        $hs = $_POST['num'];

        
        if (check($hs)){
            $kq = 'chan';
        }else {
            $kq = 'le';
        }
    
    ?>

   
<form action="day2_func.php" method="post">
        <label for="num">Number :</label>
        <input type="number" id="num" name="num" required>   
        <button type="submit">Check</button>
    </form>

    <div class="kq">Result: <?php echo htmlspecialchars($kq); ?></div> <!-- Hiển thị kết quả -->

</body>
</html>
