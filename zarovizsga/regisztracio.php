<h2>Regisztráció</h2>
<p><span class="error">* Kötelező mező</span></p>
<form method="post" action="php echo htmlspecialchars$_SERVER"PHP_SELF>  
  Név: <input type="text" name="nev">
  <span class="error">*</span>
  <br><br>
  E-mail: <input type="email" name="email">
  <span class="error">*</span>
  <br><br>
  Jelszó:
  <input type="password" name="jelszo">
  <span class="error">* </span>
  <br><br>
  Nem:
  <input type="radio" name="nem" value="no">Nő
  <input type="radio" name="nem" value="ferfi">Férfi
  <span class="error">* </span>
  <br><br>
  <input type="button" name="bekuldes" value="beküldés">

</form>


<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    echo $nameErr = "Név megadása kötelező";
  } else {
    $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      echo $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email megadása kötelező";
  } else {
    $email = test_input($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo $emailErr = "Érvénytelen email formátum";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);

    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Érvénytelen URL";
    }    
  }

  if (empty($_POST["nem"])) {
    $genderErr = "Nem megadása kötelező";
  } else {
    echo $gender = test_input($_POST["nem"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>