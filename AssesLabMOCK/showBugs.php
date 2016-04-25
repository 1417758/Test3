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
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo fread($myfile, filesize("H:/DOCS - MODULES/CMM007 - Intranet Systems Dev/Labs/Test3/AssesLabMOCK/data.txt"));
        fclose($myfile);
        ?>
    </section>

</main>
<!--END OF MAIN -->
<?php
include("rguFooter.php");
?>

