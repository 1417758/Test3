<?php
//echo "you are here1! login page";
include("../Heros/DBConnection.php"); //Establishing connection with our database
//echo "you are here2! login page";
if (empty($_POST["username"]) || empty($_POST["password"])) {
    echo "Both fields are required!";
    echo "<br/>";
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
<!-- this hyperlink recursive call to the same page adding a GET method
    and also -->
<a href="<? echo "{$_SERVER['PHP_SELF']}"?>?query=cat&type=image">fjytrj</a>
<br/>

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
    // loop through the superglobal GET array
    foreach ($_GET as $key => $value){
        print($key);
        echo "<br/>";
        print($value);
        echo "<br/>";
    }


}
//otherwise print Post stuff (data entered to form)
elseif ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    // loop through the superglobal POST array
    foreach ($_POST as $key => $value){
        print($key);
        echo "<br/>";
        print($value);
        echo "<br/>";
    }
}

?>
