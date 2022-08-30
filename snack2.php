<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<form method="GET">
    <input type="text" name="name" placeholder="Name..." required>
    <input type="email" name="mail" placeholder="Mail..." required>
    <input type="number" name="age" placeholder="Age..." required>
    <button type="submit">Submit</button>
</form>

<hr>

<?php if ($name) : ?>
<p>Accesso consentito</p>
<?php else : ?>
<p>Accesso negato</p>
<?php endif; ?>

<a href="snack2.php">Return</a>

</body>
</html>