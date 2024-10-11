<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //Functions
    //Q1:
    $x = 3;
    if ($x % 3 == 0) {
        echo "$x is a prime number ";
    } else {
        echo " $x is not a prime number";
    }

    echo "<br> <br>";

    //Q2:
    $input = "remove";
    echo strrev($input);

    echo "<br> <br>";

    //Q3:
    $x = "remove";
    $y = "remove";
    if (strtolower($x) == $y) {
        echo "Your String is Ok <br>";
    }

    echo "<br>";

    //Q4 + Q5:
    $x = 12;
    $y = 10;
    $z = $x;
    $x = $y;
    $y = $z;
    echo "X is ", $x, "    ", "Y is ", $y;

    echo "<br> <br>";

    //Q6:
    $number = 407;
    function isArmstrong($num)
    {
        $sum = 0;
        $originalNum = $num;

        while ($num > 0) {
            $digit = $num % 10;
            $sum += $digit ** 3;
            $num = (int) ($num / 10);
        }

        return $sum === $originalNum;
    }

    if (isArmstrong($number)) {
        echo "$number is an Armstrong Number.";
    } else {
        echo "$number is not an Armstrong Number.";
    }

    echo "<br> <br>";

    //Q7:
    $inputString = "Eva, can I see bees in a cave?";
    function isPalindrome($str)
    {
        $cleanedStr = preg_replace("/[^A-Za-z0-9]/", "", strtolower($str));

        return $cleanedStr === strrev($cleanedStr);
    }

    if (isPalindrome($inputString)) {
        echo "Yes, it is a palindrome.";
    } else {
        echo "No, it is not a palindrome.";
    }
    echo "<br> <br>";

    //Q8:
    $array1 = array(2, 4, 7, 4, 8, 4);
    function removeDuplicates($array)
    {
        return array_unique($array);
    }

    $array1 = removeDuplicates($array1);
    print_r($array1);

    echo "<br> <br>";

    echo "--------------------------------------------------";

    echo "<br> <br>";

    //String
    //Q1:
    $x = "Shahed";
    echo strtoupper($x);
    echo "<br> <br>";
    echo strtolower(string: $x);
    echo "<br> <br>";
    $y = substr($x, 0, 1);
    echo strtoupper(string: $y);
    echo "<br> <br>";
    echo strtolower(string: $y);
    echo "<br> <br>";

    //Q2:
    $x = "085119";
    $y = str_split($x, 2);
    echo implode(":", $y);

    echo "<br> <br>";

    //Q3:
    $x = "I am a full stack developer at orange coding academy";
    if (strpos($x, "orange") !== false) {
        echo "Word Found!";
    } else {
        echo "Word not Found!";
    }

    echo "<br> <br>";

    //Q4:
    $url = 'www.orange.com/index.php';
    $y = basename($url); // extracts the file name from a path
    echo $y;

    echo "<br> <br>";

    //Q5:
    $email = 'info@orange.com';
    $y = explode('@', $email); // splits word in some point i choose
    echo $y[0];

    echo "<br> <br>";

    //Q6:
    $email = 'info@orange.com';
    $y = substr($email, -3); //extracts a part of a string
    echo $y;

    echo "<br> <br>";

    //Q7:
    $password = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    $y = str_shuffle($password); //random
    echo $y;

    echo "<br> <br>";

    //Q8:
    $word = 'That new trainee is so genius.';
    $newword = "Our";

    $words = explode(' ', $word);
    $words[0] = $newword;
    echo implode(' ', $words);

    echo "<br> <br>";

    //Q9:
    $str1 = 'dragonball';
    $str2 = 'dragonboll';
    $length = min(strlen($str1), strlen($str2));
    for ($i = 0; $i < $length; $i++) {
        if ($str1[$i] !== $str2[$i]) {
            echo $i, ': ', $str1[$i], ' vs ', $str2[$i];
        }
    }

    echo "<br> <br>";

    //Q10:
    $array = "Twinkle, twinkle, little star.";
    echo var_dump($array);

    echo "<br> <br>";

    //Q11:
    $char = "a";
    $nextChar = chr(ord($char) + 1);
    echo $nextChar;

    echo "<br> <br>";

    //Q12:
    $originalString = 'The brown fox';
    $insertString = 'quick';
    $x = substr_replace($originalString, $insertString . ' ', 4, 0);
    echo $x;

    echo "<br> <br>";

    //Q13:
    $numberString = '0000657022.24';
    $y = ltrim($numberString, '0');
    echo $y;

    echo "<br> <br>";

    //Q14:
    $originalString = 'The quick brown fox jumps over the lazy dog';
    $removedString = str_replace('fox', '', $originalString);
    echo trim($removedString);

    echo "<br> <br>";

    //Q15:
    $originalString = 'The quick brown fox jumps over the lazy dog---';
    $cleanedString = rtrim($originalString, '-');
    echo $cleanedString;

    echo "<br> <br>";

    //Q16:
    $originalString = '\"\1+2/3*2:2-3/4*3';
    $cleanedString = preg_replace('/[^0-9\s]/', ' ', $originalString);
    echo $cleanedString;

    echo "<br> <br>";

    //Q17:
    $originalString = 'The quick brown fox jumps over the lazy dog';
    $words = explode(' ', $originalString);
    $firstFiveWords = implode(' ', array_slice($words, 0, 5));
    echo $firstFiveWords;


    echo "<br> <br>";

    //Q18:
    $numericString = '2,543.12';
    $cleanedString = str_replace(',', '', $numericString);
    echo $cleanedString;

    echo "<br> <br>";

    //Q19:
    foreach (range('a', 'z') as $letter) {
        echo $letter . ' ';
    }

    echo "<br> <br>";

    echo "--------------------------------------------------";

    echo "<br> <br>";
    //Logical Statements and Operators
//Q1:
    $year = 2013;
    if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
        echo "This year is a leap year.";
    } else {
        echo "This year is not a leap year.";
    }
    echo "<br> <br>";

    //Q2:
    $temp = 27;
    if ($temp > 20) {
        echo "It is summertime!";
    } else {
        echo "It is wintertime!";
    }

    echo "<br> <br>";

    //Q3:
    $firstInt = 2;
    $secondInt = 2;

    if ($firstInt == $secondInt) {
        $sum = ($firstInt + $secondInt) * 3;
        echo $sum;
    } else {
        echo "The two values are not the same";
    }

    echo "<br> <br>";

    //Q4:
    $firstInt = 10;
    $secondInt = 10;
    if ($firstInt + $secondInt == 30) {
        echo "true";
    } else {
        echo "false";
    }

    echo "<br> <br>";

    //Q5:
    $number = 20;
    if ($number % 3 == 0) {
        echo "true";
    } else {
        echo "false";
    }

    echo "<br> <br>";

    //Q6:
    $number = 50;
    if ($number >= 20 && $number <= 50) {
        echo "true";
    } else {
        echo "false";
    }

    echo "<br> <br>";

    //Q7:
    $numbers = [1, 5, 9];
    echo max($numbers);

    echo "<br> <br>";

    //Q8:
    $units = 300;
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    } elseif ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }

    echo "Your electricity bill for $units units is: " . number_format($bill, 2) . " JOD";

    echo "<br> <br>";

    //Q9:
    
    $num1 = 2;
    $num2 = 3;

    $addresult = $num1 + $num2;
    echo "addresult:  ", $addresult;
    echo "<br>";

    $subresult = $num1 - $num2;
    echo "subresult:  ", $subresult;
    echo "<br>";

    $multiresult = $num1 * $num2;
    echo "multiresult:  ", $multiresult;
    echo "<br>";

    $divideresult = $num1 / $num2;
    echo "divideresult:  ", $divideresult;

    echo "<br> <br>";

    //Q10:
    $age = 18;
    if ($age >= 18) {
        echo "Eligible to vote";
    } else {
        echo "Is no eligible to vote’";
    }

    echo "<br> <br>";

    //Q11:
    $temp = -60;
    if ($temp >= 0) {
        echo "Positive";
    } else {
        echo "Negative";
    }

    echo "<br> <br>";

    //Q12:
    $grades = [60, 86, 95, 63, 55, 74, 79, 62, 50];
    $average = array_sum($grades) / count($grades);

    if ($average >= 90) {
        echo "A";
    } elseif ($average >= 80) {
        echo "B";
    } elseif ($average >= 70) {
        echo "C";
    } elseif ($average >= 60) {
        echo "D";
    } else {
        echo "F";
    }

    echo "<br> <br>";

    echo "--------------------------------------------------";

    echo "<br> <br>";
    //Loop 
//Q1:
    
    $numbers = [];
    for ($i = 1; $i <= 10; $i++) {
        $numbers[] = $i; 
    }
    echo implode('-', $numbers);

    echo "<br> <br>";

    //Q2:
    
    echo "<br> <br>";


    //Q3:
    
    echo "<br> <br>";


    //Q4:
    
    echo "<br> <br>";

    //Q5:
    
    echo "<br> <br>";


    //Q6:
    
    echo "<br> <br>";


    //Q7:
    
    echo "<br> <br>";


    //Q8:
    
    echo "<br> <br>";


    //Q9:
    
    echo "<br> <br>";


    //Q10:
    
    echo "<br> <br>";


    //Q11:
    
    echo "<br> <br>";


    //Q12:
    

    echo "<br> <br>";

    echo "--------------------------------------------------";

    echo "<br> <br>";

    //Array
//Q1:
    
    echo "<br> <br>";


    //Q2:
    
    echo "<br> <br>";


    //Q3:
    
    echo "<br> <br>";


    //Q4:
    
    echo "<br> <br>";

    //Q5:
    
    echo "<br> <br>";


    //Q6:
    
    echo "<br> <br>";


    //Q7:
    
    echo "<br> <br>";


    //Q8:
    
    echo "<br> <br>";


    //Q9:
    
    echo "<br> <br>";


    //Q10:
    
    echo "<br> <br>";


    //Q11:
    
    echo "<br> <br>";


    //Q12:
    
    echo "<br> <br>";

    //Q13:
    
    echo "<br> <br>";


    //Q14:
    
    echo "<br> <br>";

    echo "--------------------------------------------------";

    echo "<br> <br>";

    //Form Validation
//Q1:
    
    echo "<br> <br>";


    //Q2:
    
    echo "<br> <br>";


    //Q3:
    
    echo "<br> <br>";


    //Q4:
    
    echo "<br> <br>";

    //Q5:
    
    echo "<br> <br>";
    ?>

</body>

</html>