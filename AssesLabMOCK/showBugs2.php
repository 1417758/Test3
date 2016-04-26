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
        <?php
        $myfile = fopen("assets/data.txt", "r") or die("Unable to open file!");
        // Output one line until end-of-file
        while (!feof($myfile)) {
            echo fgets($myfile) . "<br>";
        }
        fclose($myfile);
        echo "<hr>";

        //add data from addBugs.php page
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // loop through the superglobal POST array
            foreach ($_GET as $key => $value) {
                print("key: " . $key . " value: " . $value);
            }
            echo "<hr>";
        }

        //echo "you are here3! login page";
        $a = $_GET['txtName'];
        $b = $_GET['txtCat'];
        $c = $_GET['txtSum'];
        PrintBug($a, $b, $c);

        ?>
    </section>

</main>
<!--END OF MAIN -->
<?php
include("rguFooter.php");
?>
