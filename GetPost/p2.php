<html>
    <?php
        $texto = "";
        $oculto = "";
        if(isset($_POST["txtTexto"]))
            $texto = $_POST["txtTexto"];
        if(isset($_POST["txtOculto"]))
            $oculto = $_POST["txtOculto"];
    ?>
    <body>
        En texto se encontr&oacute;: <?php echo($texto) ?><br/>
        En el oculto se encontr&oacute;: <?php echo($oculto) ?><br/>
        En la lista se eligi&oacute;:&nbsp;
        <?php
            echo($_POST["lista"]);
        ?>
        <p>
            Radio button:&nbsp;
            <?php
                if(isset($_POST["radio"]))
                    echo($_POST["radio"]);
                else
                    echo("nbsp;");
            ?>
        </p>
        <p>
            Checkbox elegidos:<br />
            <?php
               
                for($i=1;$i<=$oculto;$i++)
                {
                    $cad = "checkbox".$i;
                    if(isset($_POST[$cad]))
                    {
            ?>
                Checkbox<?php echo($i); ?>:
            <?php
                    echo($_POST[$cad]);
            ?> <br />
            <?php
                    }
                }
            ?>
        </p>
        <p>
            Password:&nbsp;
            <?php
                if(isset($_POST["txtClave"]))
                    echo($_POST["txtClave"]);
                else
                    echo("nbsp;");
            ?>
        </p>
        <p>
            Fecha:&nbsp;
            <?php
                if(isset($_POST["fecha"]))
                    echo($_POST["fecha"]);
                else
                    echo("nbsp;");
            ?>
        </p>
        <p>
                <a href="p1.html">Otra vez</a>
        </p>
    </body>
</html>