<?php
/**
 * Created by PhpStorm.
 * User: 1417758
 * Date: 22/03/2016
 * Time: 10:05
 */
include ("DBConnection.php");
"<br/>";
echo "Mike Test5";

$sql_query = "SELECT title FROM marvelmovies";
$result = $db2->query($sql_query);
while($row = $result->fetch_array())
{
    $a = $row['title'];

    echo "<article>
            <h3> {$a} </h3>
          </article>";
}
?>

?>