<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Number to Words Converter</title>
</head>
<body>

    <form action="" method="post">
        <label for="number">Enter a number:</label><br>
        <input type="number" id="number" name="number" required><br>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = (int)$_POST["number"];

        // Check if the number is out of range
        if ($number < 0 || $number > 999) {
            $answer = "out of ability";
        } else {
            function numberToWords($num) {
                $units = ["", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"];
                $tens = ["", "ten", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety"];
                $teens = ["ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen"];
                $hundreds = ["", "one hundred", "two hundred", "three hundred", "four hundred", "five hundred", "six hundred", "seven hundred", "eight hundred", "nine hundred"];

                if ($num == 0) return "zero";

                $words = "";

                // Hundreds
                $h = intdiv($num, 100);
                if ($h > 0) {
                    $words .= $hundreds[$h] . " ";
                }

                // Tens and Units
                $t = intdiv($num % 100, 10);
                $u = $num % 10;

                if ($t == 1 && $u > 0) {
                    $words .= $teens[$u] . " "; // 11-19
                } else {
                    if ($t > 0) {
                        $words .= $tens[$t] . " "; // Tens
                    }
                    if ($u > 0) {
                        $words .= $units[$u] . " "; // Units
                    }
                }

                return trim($words);
            }

            $answer = numberToWords($number);
        }
        
        // Display result
        echo "<div><p>Number: $number</p><p>In words: $answer</p></div>";
    }
    ?>

</body>
</html> hehehe