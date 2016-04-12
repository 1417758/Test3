<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cookies & Sessions</title>
    <link rel="stylesheet" href="../CSS/htmlDefault.css" type="text/css"/>
    <link rel="stylesheet" href="../DBs/CSS/rguStyle.css" type="text/css"/>
</head>
<body>
<h1>PHP Cookies & Sessions</h1>

<div class="loginBox">
    <h3>Login Form</h3>
    <h2>Pass to homepage = mike & mypass</h2>
    <br><br>

    <form method="post" action="Login.php">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username"
            /><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password"/>
        <br><br>
        <input type="submit" name="submit" value="login"/>
    </form>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo
        $password; ?></div>
</div>
</body>
</html>