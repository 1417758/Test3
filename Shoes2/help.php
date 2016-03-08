<?php
include("header.php");
?>
<!--START OF MAIN -->
<main>
    <h2>help with shoes</h2>
    <form id="formHelp" action="http://1417758.azurewebsites.net/php/index.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="shoeHelp_iptName"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="shoeHelp_iptEmail"></td>
            </tr>
            <tr>
                <td>favourite shoes</td>
                <td><input type="radio" name="gender" value="male" checked>Heels
                    <input type="radio" name="gender" value="female">Trainers
                    <input type="radio" name="gender" value="other">Other</td>
            </tr>
            <tr>
                <td>What is your shoe problem?</td>
                <td><textarea rows="4" cols="25" name="shoeHelp_iptProb"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
                <td></td>
            </tr>

        </table>

    </form>
</main>
<!--END OF MAIN -->
<?php
include("footer.php");
?>
