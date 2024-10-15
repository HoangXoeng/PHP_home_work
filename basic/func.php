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


        function sumof2num($hs1, $hs2) {
            return $hs1 + $hs2; // Tính tổng
        }

        // Lấy giá trị từ biểu mẫu
        $hs1 = $_POST['num1'];
        $hs2 = $_POST['num2'];

        $kq = sumof2num($hs1, $hs2); // Gọi hàm để tính tổng
    
    ?>

    <form action="func.php" method="post">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required>
        
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required>
        
        <button type="submit">Add</button>
    </form>

    <div class="kq">Result: <?php echo ($kq); ?></div> <!-- Hiển thị kết quả -->

</body>
</html>
