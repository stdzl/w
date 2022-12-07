<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel logowania</title>
</head>
<body>
    <form action="login.php" method="POST">
        <input placeholder="login" type="text" name="login">
        <input placeholder="password" type="password" name="password">
        <input type="submit" value="zaloguj">
</form>
<?php 
if(isset ($_POST['login'])&& iseet($_POST['password'])){
echo "login POST: ".$_POST['login']."<br>";
$login = $_POST ['login'];
$password = $_POST ['password'];
echo "password POST: ". $_POST['password']."<br>";
$du = mysqli_connect("127.0.0.1", "root", "", "users");
$wynik = mysqli_query($du.
    "SELECT login, password FROM us WHERE login = '$login';"
);
$rekord = mysqli_fetch_assoc($wynik);
if(($_POST["login"] == $rekord["login"]) &&
($_POST['password'] == $rekord['password']))(
    echo "zalogowales sie!!! :P<br>";
    echo "login MYsQL: ". $rekord['login']. "<br>";
)else(
    echo"nie masz konta zaloz je tu <a href="register.php">zarejestruj sie</a>"
)
}

</body>
</html>