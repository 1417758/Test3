<?php
//echo "you are here1! login page";
include("../Heros/DBConnection.php"); //Establishing connection with our database
//echo "you are here2! login page";
if (empty($_POST["username"]) || empty($_POST["password"])) {
    echo "Both fields are required!";
}
//echo "you are here3! login page";
$username = $_POST['username'];
$password = $_POST['password'];
echo "you are entered the wrong credentials!";
echo "<br/>";
echo $username . "\t" . "\t" . "\t" . $password;

$riteUser = "mike";
$ritePass = "mypass";

"<br/>";
/*  ----  TEST DB DATA REQUEST  -------
echo "Test here area 51";
echo $username . "   " . $password;

$sql_query = "SELECT * FROM marvelmovies";
$result = $db1->query($sql_query);

while ($row = $result->fetch_array()){
    $a = $row['title'];
    $b = $row['yearReleased'];

    echo "<p>{$a}</p>";
    echo "<h3>" . $b . "</h3>";
}*/
//wrong way
//echo "<a href=\"http://example.com/search.html?query=cat&type=image\">fjytrj</a>";

//check the correct user logged in (hard coded)
if ($username == $riteUser && $password == $ritePass) {
    session_start();
    setcookie('access_level_cookie', 'standarduser');
    //redirects to another page
    header('Location: homepage.php');
}
?>
<!-- redirect to index -->
<form method="post" action="index.php">
    <input type="submit" name="submit" value="Try Again"/>
</form>
<!--
    <a href="http://example.com/search.html?query=cat&type=image">fjytrj</a>
-->
<a href="<? echo "{$_SERVER['PHP_SELF']}"?>query=cat&type=image">fjytrj</a>


<?php if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    ?>
    <form action="<? echo $_SERVER["PHP_SELF"] ?>" method="post">

        <label>Forename</label>
        <input type="text" name="forename">
        <label>Surname</label>
        <input type="text" name="surname">

        <p><input type="submit" value="Submit"></p>
    </form>



    <?
    foreach ($_GET as $key => $value){

    }
}
?>
