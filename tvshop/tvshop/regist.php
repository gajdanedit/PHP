<?php

if (isset($_POST['regist'])) {
    // Ellenőrizd a felhasználói adatokat
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    if ($db->regist($email, $username, $password) ) {
        header("Location: index.php?menu=login");
        exit;
    } else {
        $error = "Hiba történt a regisztráció során.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Regisztráció</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Regisztráció</h1>
    <form method="post">
        <input type="text" name="username" placeholder="Felhasználónév" required><br>
        <input type="password" name="password" placeholder="Jelszó" required><br>
        <input type="email" name="email" placeholder="E-mail cím" required><br>
        <button type="submit" name="regist">Regisztráció</button>
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>
