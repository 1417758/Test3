<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Holla</title>
    <!--CSSs link -->
    <link rel="stylesheet" type="text/css" href="../CSS/htmlDefault.css">
    <link rel="stylesheet" type="text/css" href="../CSS/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" type="text/css" href="CSS/menu.css">

</head>
<body>
<!--START OF HEADER -->
<header>
    <?php
    //echo "you are here3! login page";
    $user = $_POST['username'];
    ?>

    <section>
        <h1>Hello!! You have successfully logged into the database</h1>
    </section>

    <marquee>
        <b>
            <time datetime="YYYY-MM-DDThh:mm:ssTZD">11:39:21</time>
        </b>
    </marquee>

    <ul id="mainNav">
        <li><a href="...php">All Movies</a></li>
        <li><a href="...php">Movies by Marvel Studios</a></li>
        <li><a href="...php">Movies after 2010</a></li>
        <li><a href="...php">X-Men Movies</a></li>
        <ul style="text-align: right">
            <li> <b><span style="background-color: lightgreen;">
                Hi <?php echo $user; ?></span>
                <br/>
                    <a href="..." style="height: 15px;">Logout</a>
                </b>
            </li>
        </ul>
    </ul>


</header>
<!--END OF HEADER -->
