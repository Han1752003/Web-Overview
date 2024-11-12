
<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Kết quả</h2>

    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $listPrice = $_POST['price']; 
        $discountPercent = $_POST['discount']; 
        $discountAmount = $listPrice * $discountPercent * 0.01; 
        $discountPrice = $listPrice - $discountAmount; 
    
   
        echo "<tr><td>Số tiền chiết khấu: </td><td>" . number_format($discountAmount, 2) . "</td></tr>";
        echo "<br>\n"; 
        echo "<tr><td>Giá sau chiết khấu: </td><td>" . number_format($discountPrice, 2) . "</td></tr>";

    }
    ?>
</body>

</html>
