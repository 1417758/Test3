<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
echo "<br/><br/>/*---------  DECLARE VARIABLES  -------------- */<br/>";
$mug = "Mugs";
$spec = "spec";
$sausRoll = "sausage roll";
$myName = "Retard";
$myAge = "54";

//add pop up here to request user name and age

//test - print input
print("the user name is: " . $myName . " and my age is: " . $myAge);
echo "<br/><br/>/*---------  IF CONDITION  -------------- */<br/>";
//wot is allowed
if ($age < 16)
    print "Im sorry " . $name . " you arent allowed to buy anything!";
elseif ($age > 16 AND $age < 18)
    print "Hi " . $name . " you are allowed to buy specs!";
elseif ($age > 18 AND $age < 21)
    print "Hi " . $name . " you are allowed to buy specs and mugs";
elseif ($age > 21)
    print "Hi " . $name . " you are allowed to buy sausage roll!";

/*  LOGICAL OPERATORS
    $a and $b 	(And) 	TRUE if both $a and $b are TRUE.
    $a or $b 	(Or) 	TRUE if either $a or $b is TRUE.
    $a xor $b 	(Xor) 	TRUE if either $a or $b is TRUE, but not both.
    ! $a 	    (Not) 	TRUE if $a is not TRUE.
    $a && $b 	(And) 	TRUE if both $a and $b are TRUE.
    $a || $b 	(Or) 	TRUE if either $a or $b is TRUE.
*/
echo "<br/><br/>/*---------  SWITCH CONDITION  -------------- */<br/>";
$numbHobbits = 2;
switch ($numbHobbits) {
    case 1:
        echo "1 sad hobitt";
        break;
    case 2:
        echo "2 happy hobbits";
        break;
    case 3:
        echo "3 hobbits are a crowd";
        break;
    default:
        echo "All the hobbits have gone home";
        break;
}
//$wantedDog = userInput;
$wantedDog = "mugs";//get user input
switch ($wantedDog) {
    case "specs":
        echo "<br/>your are older then 16";
        break;
    case "mugs":
        echo "<br/>your are older then 18";
        break;
    case "sausage roll":
        echo "<br/>your are older then 21";
        break;
    default:
        echo "<br/>you are very old!";
        break;
}

echo "<br/><br/>/*---------  ARRAYS  -------------- */<br/>";
$myArray = array("do", "re", "mi");
echo $myArray[0];//prints 1st item of the array
$myArray[1] = 1; //modifies position 1
echo $myArray[1];
unset($myArray[2]);//removes item on the index indicated
echo $myArray[2] = "me";

$provActs = array("Specs", "Drugs", "Rock&Roll", "Mugs");

echo "<br/><br/>/*---------  LOOPS  -------------- */<br/>";
foreach ($provActs as $x) {
    if ($provActs[0] == $x)
        print $x;
    elseif ($x == $mug)
        echo "<br/>" . $provActs[3] = "Hugs";
    else
        print "<br/>" . $x;
}

for ($i = 0; $i < 10; $i++)
    echo "<br/>" . ($i + 1);
?>
<form id="formAct1" action="activity.php" method="get">
    Please enter the Number of days this month has:
    <input type="number" name="NumbDays" width="150px">
    <input type="submit" value="Submit">
</form>
<?php
for ($i = 0; $i < 30; $i++) {
    echo "<br/>" . ($i + 1);

}

?>


</body>
</html>