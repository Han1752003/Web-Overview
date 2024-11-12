<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Product Discount Calculator</title>
    <style>
        input[type=text],
        input[type=number] {
            width: 280px;
            background-color: whitesmoke    ;
            border: 2px solid #ccc;
            padding: 10px 10px 10px 10px;
            margin-bottom: 5px;
        }
        form {          
                background: whitesmoke;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(1, 2, 0, 0.5);
                width: 300px;
            }
    </style> 
</head>
<body>
    <div style="width: 100%;    display: flex;
    justify-content: center;
    align-items: center;">
    <div style="    width: 324px;
    padding: 70px;">
    <h2>Product Discount Calculator</h2>
    <form action="display_discount.php" method="post">
        <label for="description">Product Description:</label>
        <input type="text" id="description" name="description" required><br><br>

        <label for="price">List Price:</label>
        <input type="number" id="price" name="price" required step="0.01"><br><br>

        <label for="discount">Discount Percent:</label>
        <input type="number" id="discount" name="discount" required step="0.01"><br><br>

        <button type="submit">Calculate Discount</button>
    </form>
</body>

</html>