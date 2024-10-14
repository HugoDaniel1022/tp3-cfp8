<?php

if (count($_REQUEST) > 0) {
    $altura = $_REQUEST['altura'];
    $peso = $_REQUEST['peso'];
    $altura_t = $altura/100;

    echo "Su indice de masa corporal es: ".round($peso / ($altura_t**2), 2);
}
