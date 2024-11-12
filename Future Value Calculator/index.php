<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Giá Trị Tương Lai</title>
    <style>
        
        .container {
            max-width: 400px;
            margin: auto;
            padding: 40px;
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;}
        button {
            padding: 10px;
            border-radius: 5px;}
        button:hover {
            background: salmon;}
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Tính Giá Trị Tương Lai</h2>
    <form method="post">
        <label for="principal">Lượng tiền đầu tư ban đầu: </label>
        <input type="number" id="principal" name="principal" step="0.01" required>
        <label for="rate">Lãi suất năm:</label>
        <input type="number" id="rate" name="rate" step="0.01" required>
        <label for="time">Số năm đầu tư :</label>
        <input type="number" id="time" name="time" required>
        <button type="submit">Tính toán</button>
    </form>

    <?php if (isset($future_value)): ?>
    <?php endif; ?>
    <?php
    function futureValue($principal, $rate) {
        return $principal + ($principal * $rate / 100);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $principal = floatval($_POST['principal']);
        $rate = floatval($_POST['rate']);
        $future_value = futureValue($principal, $rate);
        echo "<h3>Giá trị tương lai nhận được : " . number_format($future_value, 2) . " VNĐ</h3>";
    }
    ?>
</div>

</body>
</html>