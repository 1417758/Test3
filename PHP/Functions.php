<?php
/**
 * Created by PhpStorm.
 * User: 1417758
 * Date: 19/04/2016
 * Time: 10:16
 */

//my function
function squareValue($number) {
    echo "square value inside myFunction: ". $number * $number;
    echo "<br/>";
}
//my function2
function squareValue2($number) {
    return $number * $number;
}
//my other function
function CaptureAward($name, $numbSpecs, $numbMugs, $numbSausRolls) {
    $award = 10* squareValue2($numbSpecs*$numbMugs*$numbSausRolls)/2;
    $awardTxt = strtoupper("Wanted "). $name ."<br/>";
    $awardTxt .= "Known to be in possession of the following items: "."<br/>";
    $awardTxt .= $numbSpecs . " Specs <br/>";
    $awardTxt .= $numbMugs . " Mugs <br/>";
    $awardTxt .= $numbSausRolls . " Sausage Rolls <br/>";
    $awardTxt .= "Award for capture: £ " . $award. ".00 <br/>";
    return $awardTxt;
}
?>