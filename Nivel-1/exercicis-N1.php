<h1 style="color: darkblue;">Exercici 1</h1>
<?php
$age = 40;
$percentage = 77.89;
$name = "Emma";
$IsStudent = "False";

echo "<pre>";
print($age);
echo "<pre>";
print($percentage);
echo "<pre>";
print($name);
echo "<pre>";
print($IsStudent);

const MY_NAME = 'Inbi';
?>
<h1><?= MY_NAME; ?></h1>
<h1 style="color: darkblue;">Exercici 2</h1>
<?php
$string = "Hello World!";
$course = "Este es el curso de PHP";
echo "$string";
echo "<pre>";
print(strtoupper($string));
echo "<pre>";
print(strlen($string));
echo "<pre>";
echo "$string ". "$course";
?>

<h1 style="color: darkblue;">Exercici 3</h1>
<?php 
$X = 11;
$Y = 47;

$N = 55.45;
$M = 71.15;
?>

<strong><?= "a) Valor de cada variable INT";?></strong>
<?="<pre>";?>
<?= "X: $X  Y: $Y";?>
<?="<pre>";?>
<?="La suma de X, Y es: " .($X + $Y) ;?>
<?="<pre>";?>
<?="La resta de X, Y es: " .($X - $Y) ;?>
<?="<pre>";?>
<?="El producto de X, Y es: " .($X * $Y) ;?>
<?="<pre>";?>
<?="La modulo de X, Y es: " .($X % $Y) ;?>


<strong><?= "a) Valor de cada variable DOUBLE";?></strong>
<?="<pre>";?>
<?= "N: $N , M: $M";?>
<?="<pre>";?>
<?="La suma de N y M es: " .($N + $M) ;?>
<?="<pre>";?>
<?="La resta de N y M es: " .($N + $M) ;?>
<?="<pre>";?>
<?="EL producto de N y M es: " .($N + $M) ;?>
<?="<pre>";?>
<?="EL modulo  de N y M es: " .($N + $M) ;?>
<?="<pre>";?>
<?="El doble de X es: " . ($X * 2), "<pre>" , " El doble de Y es: " . ($Y * 2), "<pre>" , " El doble de N es: " . ($N * 2), "<pre>" , " El doble de M es: " . ($M * 2);?>
<?="<pre>";?>
<?= "La suma de todas las variables es: " . ($X + $Y + $N + $M);?>
<?="<pre>";?>
<?= "El producto de todas las variables es: " . ($X * $Y * $N * $M);?>
<?="<pre>";?>

<strong><?= "b) Operación Aritmetica";?></strong>
<?php
$a =2 ;
$b = 4;

function Calculator ($a, $b, $operacion){

    switch ($operacion) {
    case "suma":
        return $a + $b;
    case "resta":
        return $a - $b;
    case "multiplicacion":
        return $a * $b;
    default:
        return $a / $b;
    }
}
echo "<pre>";
echo Calculator(2, 4, "suma");
echo "<pre>";
echo Calculator(34, 30, "resta");
echo "<pre>";
echo Calculator(14, 2, "multiplicacion");
echo "<pre>";
echo Calculator(10, 5, "division");
?>

<h1 style="color: darkblue;">Exercici 4</h1>
<?php

function Contador($num = 10, $paso = 2) {

    for ($i = 0; $i <= $num; $i += $paso) {
        echo $i . "<br>";
    }
}

// Contador(); //Por defecto 10
Contador(10, 2);
?>

<h1 style="color: darkblue;">Exercici 5</h1>

<?php 

    function StGrade ($grade){

    if ($grade >= 60) {
        echo "Primera División";

    } 
    else if ($grade >= 45 && $grade <= 59) {
        echo "Segunda División";

    }
    else if ($grade >= 33 && $grade <= 44) {
        echo "Tercera  División";
    }
    else {
        echo "reprobar";
    }

}
echo "<h3>Notas de prueba:</h3>";

StGrade(75); echo "<pre>";
StGrade(54); echo "<pre>";
StGrade(31); echo "<pre>";
?>

<h1 style="color: darkblue;">Exercici 6</h1>

<?php
$int = rand(0, 1);

function isBitten ($int) {
    if ($int == 1) {
    return  TRUE;
} 
else 
    {
    return FALSE;
}
}
var_dump(isBitten($int));
?>