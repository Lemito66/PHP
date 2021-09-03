<!DOCTYPE html>
<?php
$i;
$n;
$n = $_POST["txtNum"];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="p2.php" method="post">
        Las opciones son las siguientes: <br>
        <?php for ($i = 0; $n < $n; $i++) { ?>
            <input type="checkbox" name="chkOpcion" id="" value="<?php echo ($i); ?>">
            Opciones byneri <?php echo ($n); ?> <br>
        <?php } ?>
        <input type="hidden" name="n" value="<?php echo ($n); ?>">
        <input type="submit" value="Aceptar">

        <input type="text" name="txtNum" id="">
        <!-- <input type="submit" value="Aceptar"> -->

    </form>
</body>

</html>