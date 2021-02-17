<?php

$dsn = "mysql:host=localhost;dbname=logindb";
$user ="root";
$password = "";

$pdo = new PDO ($dsn, $user, $password);




$stm = $pdo->query("SELECT id, username, password FROM users");

while($row = $stm->fetch()){

    echo $row ["id"] . " Username:" . " " . $row ["username"] . " " . "Password: " . $row["password"] . "<br/>";
}

?>

<br>
<form method="POST" action="registration.php">
<input type="text" placeholder="Insert your Name" name="name"><br>
<input type="text" placeholder="Insert Username..." name="username"><br>
<input type="text" placeholder="Insert Password..." name="password"><br>
<input type="submit" value="Register!">
</form>

Already registered ? <a href='login.php'> Login </a >
