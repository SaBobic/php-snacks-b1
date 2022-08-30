<?php

$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';
$age = $_GET['age'] ?? '';

$access_denied = true;

if (mb_strlen($name) > 3 && str_contains($mail, '@') && str_contains($mail, '.') && is_numeric($age)) $access_denied = false;

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
    <input type="text" name="mail" placeholder="Mail..." required>
    <input type="text" name="age" placeholder="Age..." required>
    <button type="submit">Submit</button>
</form>

<hr>

<?php if (!$access_denied) : ?>
<p>Successfull authentication</p>
<?php else : ?>
<p>Access denied</p>
<?php endif; ?>

<a href="snack2.php">Return</a>

</body>
</html>