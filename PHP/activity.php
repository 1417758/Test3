<!DOCTYPE html>
<html>
<head>
    <?php
    include("Functions.php");
    ?>
</head>
<body>

<div style="width 300px;float: left; background-color: lightgoldenrodyellow">
    <?php
    echo "<br/><br/>/*---------  DECLARE VARIABLES  -------------- */<br/>";
    $mug = "Mugs";
    $spec = "spec";
    $sausRoll = "sausage roll";
    $myName = "Retard";
    $myAge = "54";
    $firstRound = FALSE;

    //add pop up here to request user name and age

    //test - print input
    print("the username is: " . $myName . " and his/her age is: " . $myAge);
    echo "<br/><br/>/*---------  IF CONDITION  -------------- */<br/>";
    ?>
    <!-- NOTE: by refering the form to itself a postback action isnt invoked -->
    <form action="<? echo $_SERVER["PHP_SELF"] ?>" method="get">
        <label>Please enter your Age</label>
        <input type="number" name="age">

        <p><input type="submit" value="Submit"></p>
    </form>
    <?php
    $age = $_GET['age'];
    //wot is allowed
    //if ($_SERVER['REQUEST_METHOD'] === 'GET' and !empty($age))  {
    if (!empty($age)) {
        if ($age < 16)
            $result = "<b>Im sorry </b>" . "<b>" . $myName . "</b>" . "<b> you arent allowed to buy anything!</b>";
        elseif ($age >= 16 AND $age < 18)
            $result = "<b>Hi </b>" . "<b>" . $myName . "</b>" . "<b> you are allowed to buy specs!</b>";
        elseif ($age >= 18 AND $age < 21)
            $result = "<b>Hi </b>" . "<b>" . $myName . "</b>" . "<b> you are allowed to buy specs and mugs</b>";
        elseif ($age >= 21)
            $result = "<b>Hi </b>" . "<b>" . $myName . "</b>" . "<b> you are allowed to buy sausage roll!</b>";
    }
    print $result;

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
    echo "<br/>";

    //$wantedDog = userInput;
    $wantedDog = "mugs";//get user input
    switch ($wantedDog) {
        case "specs":
            echo "your are older than 16";
            break;
        case "mugs":
            echo "your are older than 18";
            break;
        case "sausage roll":
            echo "your are older than 21";
            break;
        default:
            echo "you are very old!";
            break;
    }


    //invoke function
    CaptureAward($myName, 2, 15, 36 );

    ?>

</div>

<div style="width 500px;float: right; background-color: lightgoldenrodyellow"">
    <?php
    echo "<br/>";
    echo "<br/><br/>/*---------  ARRAYS  -------------- */<br/>";
    $myArray = array("do", "re", "mi");
    echo $myArray[0];//prints 1st item of the array
    $myArray[1] = 1; //modifies position 1
    echo $myArray[1];
    unset($myArray[2]);//removes item on the index indicated
    echo $myArray[2] = "me";

    //array_push() takes two arguments: an array, and an element to add to the end of that array
    $fav_bands = array();
    array_push($fav_bands, "Katy Perry");
    array_push($fav_bands, "The Peapods");
    array_push($fav_bands, "Nickelback");
    rsort($fav_bands);
   // print count($fav_bands);

    $provActs = array("Specs", "Drugs", "Rock&Roll", "Mugs", "Sausage Rolls");
    sort($provActs);
    echo "<br/>" . count($provActs);
    echo "<br/><br/>/*---------  LOOPS  -------------- */<br/>";
    foreach ($provActs as $x) {
        if ($provActs[0] == $x)
            //print without adding a new line
            print $x;
        elseif ($x == $mug)
            //replace mugs by hugs
            echo "<br/>" . $provActs[3] = "Hugs";
        elseif ($x == $provActs[count($provActs) - 1])
            //replace mugs by hugs
            unset($provActs[count($provActs) - 1]);
        else
            print "<br/>" . $x;
    }

    for ($i = 0; $i < 10; $i++)
        echo "<br/>" . ($i) . "   -    " . ($i + 1);
    ?>
    <br/>
    <br/>
    <!-- NOTE: at runtime theres a postback action here -->
    <form id="formAct1" action="activity.php" method="get">
        <h4>Please enter the Number of days in this month:</h4>
        <input type="number" name="NumbDays" width="150px">
        <input type="submit" value="Submit">
    </form>
    <?php
    $days = $_GET["NumbDays"];
    for ($i = 0; $i < $days; $i++) {
        echo "<br/>" . ($i + 1);

    }

    ?>

</div>

</body>
</html>