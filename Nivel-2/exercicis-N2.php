<h1 style="color: darkblue;">Exercici 1 Nivel 2 </h1>

<?php
function CalcularCostoLlamada($tiempoLlamada, $costoPrimerosMinutos = 10, $costoMinutoExtra = 5, $minutosIncluidos = 3) {

    if ($tiempoLlamada < 0) {
        return "Errorr= tiempo no puede ser negativo !";
    }
    
    if ($tiempoLlamada <= $minutosIncluidos) {
        return $costoPrimerosMinutos;
    } else {
        $minutosExtra = $tiempoLlamada - $minutosIncluidos;
        $costoTotal = $costoPrimerosMinutos + ($minutosExtra * $costoMinutoExtra);
        return $costoTotal;
    }
}

echo "<strong>Llamada de 2 minutos:</strong> " . CalcularCostoLlamada(2) . " centimos<br>";
echo "<strong>Llamada de 5 minutos:</strong> " . CalcularCostoLlamada(5) . " centimos<br>";
echo "<strong>Llamada de 10 minutos:</strong> " . CalcularCostoLlamada(10) . " centimos<br>";
echo "<strong>Tiempo negativvo:</strong> " . CalcularCostoLlamada(-1) . "<br>";
?>

<h1 style="color: darkblue;">Exercici 2 Nivel 2</h1>

<?php
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


$a = rand(0, 9999);
$b = rand(0, 9999);
$c = rand(0, 9999);
$SumaPuntuacion = CalcularSuma($a, $b, $c);

echo "<strong>La suma total de puntuacion es: </strong>" . CalcularSuma($a, $b, $c) ; 
echo "<br><strong> La media total es: </strong>" . CalcularMedia($SumaPuntuacion);
echo "<br><strong> Clasificacion: </strong>" . Clasificacion($SumaPuntuacion);
?>