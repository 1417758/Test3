<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
echo "<br/>/*---------  DECLARE VARIABLES  -------------- */<br/>";
$mug = "mug";
$spec = "spec";
$sausRoll = "sausage roll";
$name;
$age;

//add pop up here to request user name and age

//test - print input
print("the user name is: " . $myName . " and my age is: " . $myAge);
echo "<br/>/*---------  IF CONDITION  -------------- */<br/>";
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
echo "<br/>/*---------  SWITCH CONDITION  -------------- <br/>*/";
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
        echo "your are older then 16";
        break;
    case "mugs":
        echo "your are older then 18";
        break;
    case "sausage roll":
        echo "your are older then 21";
        break;
    default:
        echo "you are very old!";
        break;
}

echo "<br/>/*---------  ARRAYS  -------------- */<br/>";
$myArray = array("do", "re", "mi");
echo $myArray[0];//prints 1st item of the array
echo $myArray[1] = 1; //modifies position 1
echo $myArray[1];
unset($myArray[2]);




?>


</body>
</html>