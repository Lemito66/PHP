<?php   
    $i; $n;
    $n = $_POST["txtNum"];
?>
<html>
    <body>
        <form action="p3.php" method="post">
            Las opciones son las siguientes:<br>
            <?php for($i=0;$i<$n;$i++) { ?>
                <input type="checkbox" value="<?php echo($i); ?>"
                    name="chkOpcion<?php echo($i); ?>">
                    Opci&oacute;n <?php echo($i); ?>
                    <br />
            <?php } ?>
            <input type="hidden" name="n" value="<?php echo($n); ?>">
            <input type="submit" value="Aceptar">
        </form>
    </body>
</html>