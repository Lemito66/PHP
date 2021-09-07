<?php
if (isset($_POST['button1'])) {
    if ($_POST['name'] == "dnvaca" && $_POST['pass'] == "12345") {
        header('Location:p2.php?name='.$_POST['name']);
    } else if ($_POST['name'] == "sbvillacreces" && $_POST['pass'] == "67890") {
        header('Location:p2.php?name='.$_POST['name']);
    } else if ($_POST['name'] == "daguerra" && $_POST['pass'] == "24680") {
        header('Location:p2.php?name='.$_POST['name']);
    } else if ($_POST['name'] == "user" && $_POST['pass'] == "pass") {
        header('Location:p2.php?name='.$_POST['name']);
    } else {
        echo "<p>Usuario o contraseña incorrectos</p>";
    }
}
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
    <form method="post">
        <input type="text" name="name" placeholder="User" value="<?php echo $_POST['name']?>">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="button1" value="Go" />
    </form>
</body>

</html>