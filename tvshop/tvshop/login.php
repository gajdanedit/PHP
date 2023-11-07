<?php

if (filter_input(INPUT_POST,
                'belepesiAdatok',
                FILTER_VALIDATE_BOOLEAN,
                FILTER_NULL_ON_FAILURE)) {
    
    $email = htmlspecialchars(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
    $username = htmlspecialchars(filter_input(INPUT_POST, 'felhasznalonev'));
    $pass = htmlspecialchars(filter_input(INPUT_POST, 'jelszo'));

    if ($db->login($username, $pass)) {
        $_SESSION['login'] = true;
        $_SESSION['felhasznalonev'] = '';
        $_SESSION['jelszo'] = '';
        header("Location: index.php");  
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <link rel="stylesheet" type="text/css" href="style.css">
    <h1>Bejelentkezés</h1>
    <form method="post">
        <input type="text" name="felhasznalonev" placeholder="Felhasználónév" required><br>
        <input type="password" name="jelszo" placeholder="Jelszó" required><br>
        <button type="submit" name="login" value="true">Bejelentkezés</button>
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>


