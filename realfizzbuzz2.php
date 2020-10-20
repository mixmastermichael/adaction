<?php
ob_start();
for ($i = 1; $i <= 20; $i++)
{
    if ($i % 15 === 0) {
        echo " FizzBuzz ";
    }
    else if (strstr($i, '3')) {
           echo "Lucky ";
    }
    else if($i % 3 == 0){
        echo " Fizz ";
    }
    else if($i % 5 == 0){
        echo " Buzz ";
    }
    else {
        echo $i." ";
    }
}
$output = ob_get_flush();
$fizz_count = substr_count($output, " Fizz ");
$buzz_count = substr_count($output, " Buzz ");
$lucky_count = substr_count($output, " Lucky ");
$fizzbuzz_count = substr_count($output, " FizzBuzz ");
$number_count = 20 - $fizz_count - $buzz_count - $fizzbuzz_count - $lucky_count;
echo "<br>";
echo "Fizz: $fizz_count times listed<br>";
echo "Buzz: $buzz_count times listed<br>";
echo "Fizzbuzz: $fizzbuzz_count times listed<br>";
echo "Lucky: $lucky_count times listed<br>";
echo "Numbercount: $number_count times listed<br>";
?>

