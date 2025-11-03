<h1 style="color: darkblue;">Exercici 1 Nivel 2</h1>

<?php

function CalcularLlamada ($tiempoLlamada, $pagar) {

        if ($tiempoLlamada  <= 3) {
        return $pagar;
        
        } else {
        $minutosExtra = $tiempoLlamada - 3;
        return $pagar = 10 + ($minutosExtra * 5);
}
    }

    $pagar = 10;
    echo CalcularLlamada(6, $pagar)
?>
