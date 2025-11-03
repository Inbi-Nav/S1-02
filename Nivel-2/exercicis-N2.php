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

<h1 style="color: darkblue;">Exercici 2 Nivel 2</h1>

<?php

$a = rand(0, 9999);
$b = rand(0, 9999);
$c = rand(0, 9999);
$SumaPuntuacion = CalcularSuma($a, $b, $c);

function CalcularSuma ($a, $b, $c) {

   $SumaPuntuacion = $a + $b + $c;
   return $SumaPuntuacion;
    
}

function CalcularMedia ($SumaPuntuacion){
    $media =  $SumaPuntuacion / 3;
    return $media;
}

function Clasificacion ($SumaPuntuacion) {
    if ($SumaPuntuacion < 4000) {
        return "Principante";
    } else if ($SumaPuntuacion < 8000)
        return "Intermedio";
        else {
            return "Professional";
        }
}

echo "<strong>La suma total de puntuacion es: </strong>" . CalcularSuma($a, $b, $c) ; 
echo "<br><strong> La media total es: </strong>" . CalcularMedia($SumaPuntuacion);
echo "<br><strong> Clasificacion: </strong>" . Clasificacion($SumaPuntuacion);
?>