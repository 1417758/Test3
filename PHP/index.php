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
echo "My name is: " . $myName . " and my age is: " . $myAge . "<br/>";

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
$firstName = $_POST['forename'];;
$name = "Edgar";
if ($firstName == $myName || $firstName == $name) {
    print  "\n your name is either Edgar or Rachie";
} else {
    echo "\n your name is not on the system";
}

echo $name;

echo "<br/>WE ARE HERE!!!!! <br/>";
echo "your name is:  " . $_POST["shoeHelp_iptName"] . "<br/>";
echo "Your email address is:  " . $_POST["shoeHelp_iptEmail"];

?>


</body>
</html>