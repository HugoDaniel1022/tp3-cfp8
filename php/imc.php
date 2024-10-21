<?php

if (count($_REQUEST) > 0) {
    $altura = $_REQUEST['altura'];
    $peso = $_REQUEST['peso'];

    // Verificar si altura o peso son 0
    if ($altura == 0 || $peso == 0) {
        echo "Error: La altura o el peso no pueden ser cero.";
    } else {
        $altura_t = $altura / 100;
        $resultado = round($peso / ($altura_t ** 2), 2);
        $mensaje = "Su índice de masa corporal es: ";
        $mensaje2 = ". Y su situación actual es ";
        $mensajeFinal = $mensaje . $resultado . $mensaje2;

        switch (true) {
            case ($resultado > 0 && $resultado < 15):
                echo $mensajeFinal . "delgadez muy severa";
                break;
            case ($resultado >= 15 && $resultado < 16):
                echo $mensajeFinal . "delgadez severa";
                break;
            case ($resultado >= 16 && $resultado < 18.5):
                echo $mensajeFinal . "delgadez";
                break;
            case ($resultado >= 18.5 && $resultado < 25):
                echo $mensajeFinal . "normal";
                break;
            case ($resultado >= 25 && $resultado < 30):
                echo $mensajeFinal . "sobrepeso";
                break;
            case ($resultado >= 30 && $resultado < 34.5):
                echo $mensajeFinal . "obesidad moderada";
                break;
            case ($resultado >= 35 && $resultado < 40):
                echo $mensajeFinal . "obesidad severa";
                break;
            case ($resultado >= 40):
                echo $mensajeFinal . "obesidad mórbida";
                break;
        }
    }
}

?>
