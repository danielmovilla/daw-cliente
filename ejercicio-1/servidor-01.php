<?php
session_start();
if (!isset($_SESSION['numeroOculto'])) {
    $_SESSION['numeroOculto'] = random_int(1,20);
    echo "<h1> ¡¡ BIENVENIDO !! <h1>";
} else {
    if (isset($_REQUEST['numeroUsuario'])) {

        echo "El número es: " . $_SESSION['numeroOculto'] . "<br>";
        if ($_SESSION['numeroOculto'] == $_REQUEST['numeroUsuario']) {
                echo " Enhorabuena, has acertado. "
                session_destroy();
                header("Refresh:3");
        } else {
            echo " Fallaste... "
        }
    }
}
?>
<form method="get">
    Introduce un número: <input type="text" name="numeroUsuario"/>
</form>