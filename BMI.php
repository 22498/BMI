<?php
$gewicht = $_GET["gewicht"];
$lengte = $_GET["lengte"];
BMIcalc($gewicht, $lengte);

function BMIcalc($gewicht, $lengte) {
$lengteMeter = $lengte / 100;
$bmi = $gewicht / ($lengteMeter * $lengteMeter);
switch ($bmi):
   case $bmi < 18.5:
   echo 'Je hebt ondergewicht';
   break;
   case $bmi >= 18.5 && $bmi <= 24.9:
   echo 'Je hebt een normaal gewicht';
   break;
   case $bmi >= 25.0 && $bmi <= 29.9:
   echo 'Je hebt overgewicht';
   break;
   case $bmi >= 30.0 && $bmi <= 34.9:
   echo 'Je hebt obesitas klasse 1';
   break;
   case $bmi >= 35.0 && $bmi <= 39.9:
   echo 'Je hebt obesitas klasse 2';
   break;
   case $bmi >= 40.0:
   echo 'Je hebt obesitas klasse 3';
   break;
   default:
   echo 'Error berekening BMI';
   break;
   endswitch;

}
?>
