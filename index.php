<?php

echo "TALLER 1 GENERALIDADES PHP. " ;
echo "<br> Elaborado por LEONARDO CARO <br>";

/*Punto 1 del taller*/
$numero1=15;
$numero2=34;
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;

echo "<br>Ejercicio #1 <br>";
echo ("<br>La suma de los numeros 15 + 34 es ".$suma);
echo ("<br> La resta de los numeros 15 - 34 es ".$resta);
echo ("<br> La multiplicación de los numeros 15 * 34 es ".$multiplicacion);
echo ("<br> La división de los numeros 15 / 34 es ".$division);


/*punto 2 del taller indice de masa corporal*/
echo "<br><br>Ejercicio #2 <br>";

$peso=85;
$estatura=1.78;
$imc=$peso/($estatura*$estatura);
echo "<br>Señor usuario su estatura es de: ".$estatura."m y su peso es de: ".$peso."Kg";
echo"<br>Su indice de masa corporal es de: ".$imc." por lo tanto usted tiene ";

if ($imc<=18.4 && $imc>0)
{
    echo " Insuficiencia de peso "; 
}elseif ($imc>=18.5 && $imc<=24.9)
{
    echo "peso normal ";
}elseif ($imc>=25 && $imc<=29.9)
{
    echo "sobrepeso ";
}elseif ($imc>=30 && $imc<=34.9)
{
    echo "Obesidad 1 ";
}elseif ($imc>=35 && $imc<=39.9)
{
    echo "Obesidad 2 ";
}else
{
    echo " <br> Obesidad 3 ";
}










?>
