<h1 style="color: darkblue;">Exercici 1 Nivel 3</h1>

<?php
$numMax = 30; 
$numeros = range(2, $numMax); 

for ($i = 2; $i <= sqrt($numMax); $i++) {
    if (in_array($i, $numeros)) {
        foreach ($numeros as $key => $value) {
            if ($value != $i && $value % $i == 0) {
                unset($numeros[$key]);
            }
        }
    }
}
echo "<pre>";
echo "Numeros primos hasta $numMax:<br>";
print_r(array_values($numeros));
?>
