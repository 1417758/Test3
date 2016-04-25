<?php
include("bugHeader.php");
?>
<!--START OF MAIN -->
<main class="grid-container">
    <aside id="asideLeft" class="grid-30 tablet-grid-30 mobile-grid-30">
        <?php
        include("bugNavig.php");
        ?>
    </aside>

    <section id="mainSection" class="grid-60 tablet-grid-60 mobile-grid-60">

        <table>
            <tr>
                <td>Bug Name</td>
                <td><input type="text" name="txtName" size="90%" placeholder="Bug Name" required></td>
            </tr>
            <tr>
                <td>Bug Summary</td>
                <td><textarea rows="4" cols="25" name="txtSum" size="90%" placeholder="Bug Category"></textarea></td>
            </tr>
            <tr>
                <td>Bug Category</td>
                <td><input type="text" name="txtCat" size="90%" placeholder="Bug Category" required ></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>

    </section>

</main>
<!--END OF MAIN -->
<?php
include("rguFooter.php");
?>

