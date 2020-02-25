<?php
session_start();

$users = array(
    "janjaap" => array("password" => "1234","rol" => "Administrator"),
    "bert" => array("password" => "1235","rol" => "Gebruiker"),
    "jans" => array("password" => "1236","rol" => "Administrator"),

);

if (isset($_GET["logout"])){
    $_SESSION = array();
    session_destroy();
}


if (isset($_POST['button'])
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]]["password"] == $_POST['password']){
    $_SESSION["user"] = array("name"=>$_POST["login"],"password" => $users[$_POST["login"]]['password'],
        "rol"=>$users[$_POST["login"]]['rol']);

    $message = "Welkom ".$_SESSION["user"]["name"]." met de rol ".$_SESSION["user"]["rol"];
} else {
    $message = "Inloggen";
}

print_r($_SESSION);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h1><?php echo $message; ?></h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" name="login" value="">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" value="">
    </div>
    <input type="submit" name="button">
</form>
<a href="website.php">website</a><br>
<a href="admin.php">Admingedeelte website</a><br>
<a href="login.php?logout">Uitloggen</a><br>
<a href="../index.php">PHP hoofd pagina</a>
</body>
</html>