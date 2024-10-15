<!-- 1. Given a number N. Print numbers from 1 to N in separate lines. 
================================================================= -->

<?php   

$n = 5; 
for ($numbers = 1; $numbers <= $n; $numbers++) {
    echo $numbers;
}
echo "<br>";
?>


<!-- 2.  Given a number N. Print all even numbers between 1 and N inclusive in separate lines.  
 ===================================================================================================== -->
<?php
// $number= 5;
$number= 10; {for ( $n = 1 ; $n <= $number ; $n++ )
    if   ($n % 2 === 0)
    echo $n;
}

echo "<br>";

?>

<!-- 3. Given a number N, and N numbers, find maximum number in these N numbers. 
=========================================================================== -->

<?php 

$numbers = [5,1,8,5,7,5];
$largest = max($numbers);
$smallest = min($numbers);

   echo "$largest is the largest number ";
   echo "<br>";
   echo "$smallest is the smallest number ";
   echo "<br>";

?>

<!-- 4. Given a number X. Determine if the number is prime or not. 
============================================================= -->

<?php 

?>

<!-- 5. Given a number N. 
==================== -->

<?php 

?>

<!-- 6. Given a number N. Print all the divisors of N in ascending order. 
===================================================================== -->

<?php 

$N = 6; 
// $N = 7; 
// $N = 4; 

    for ($i = 1; $i <= $N; $i++)    
    echo $i;
 echo"<br>";
 
?>

<!-- 7. Given two numbers A and B. Print all lucky numbers between A and B 
======================================================================= -->

<?php 

?>

<!-- 8. Given a number N. Print a left angled triangle that has N rows. 
================================================================== -->

<?php
$Number = 4; for ($n = 1; $n <= $Number; $n++) {
        echo "*";
}
?>