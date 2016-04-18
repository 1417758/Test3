<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>
    <?php
    echo "Hello World";
    ?>
</h1>
<br/>

<h2><?php

    //concatenation in php
    echo "Hello," . " " . "world" . "!";

    echo 5 * 7; ?>
</h2>
<br/>
<?php
//variables
$myName = "Rachie";
$myAge = 19;
echo "My name is: " . $myName . " and his/her age is: " . $myAge . "\n";

/*  COMPARISONS
    != (Not	equal)
    == (Equal	to)
    <=  (Less	than	or	equal	to)
    >=  (Greater	than	or	equal	to)
    <   (Less	than)
    >   (Greater than)
*/
?>
<form action="<? echo $_SERVER["PHP_SELF"] ?>" method="post">

    <label>Please enter your First Name</label>
    <input type="text" name="forename">

    <p><input type="submit" value="Submit"></p>
</form>

<?php
$firstName = $_POST['forename'];
$name = "Edgar";
if ($firstName == $myName || $firstName == $name) {
    print  "\n <h2> your name is either Edgar or Rachie </h2>";
} else {
    print "\n <h2>your name is not on the system</h2>";
    print $firstName;
}


echo "<br/>we are here!!!!! <br/>";
echo "<br/>/*---------  FUNCTIONS  -------------- */<br/>";
// get the length of a string and
// print it to the screen
$length = strlen("david");
print strtoupper("david") . " has exactly " . $length . " characters";
echo "<br/>";
// Round pi down from 3.1416...
$round = round(M_PI);
print "rounding PIto 0 decimals: ".$round; // prints 3
echo "<br/>";
// This time, round pi to 4 places
$round_decimal = round(M_PI, 4);
print "rounding PI to 4 decimals: ".$round_decimal; // prints 3.1416
echo "<br/>";
// prints a number between 0 and 32767
print "random numb btw 0-32767: ".rand();
echo "<br/>";
// prints a number between 1 and 10
print "random numb btw 1-10: ".rand(1,10);
echo "<br/>";

//my function
function squareValue($number) {
    echo "square value inside myFunction: ". $number * $number;
    echo "<br/>";
}
//invoke function
$n = 6;
echo squareValue($n); // echos 36
?>


</body>
</html>