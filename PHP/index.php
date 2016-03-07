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
    echo "My name is: " . $myName . " and my age is: " . $myAge;

/*  COMPARISONS
    != (Not	equal)
    == (Equal	to)
    <=  (Less	than	or	equal	to)
    >=  (Greater	than	or	equal	to)
    <   (Less	than)
    >   (Greater than)
*/

    $name = "Edgar";
    if ($name > $myName){
        print $name > $myName;
        echo $name > $myName;
    }else{
        print $name > $myName;
        echo $name > $myName;
    }

echo $name;
?>




</body>
</html>