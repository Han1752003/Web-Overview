<?php
function isPrime($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Các số nguyên tố nhỏ hơn 100 là:\n";
for ($i = 2; $i < 100; $i++) {
    if (isPrime($i)) {
        echo $i . "\n";
    }
}
?>