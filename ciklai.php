<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.black{
    color:black;
}
.red{
    color: red;
}
.blue{
    color:blue;
}
.square {
    line-height:0.4;
    color: red;
    font-size: 10px;
}

</style>
<body>

<?php
////////////////////////////////////////////////////////////////////////////
// Naršyklėje nupieškite linija iš 400 “*”. 
// Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
// Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 

echo " 1 uzdavinys"; 
echo "<hr>";

$arr = ['zvgz'=> '*'];
for ($i=1; $i < 601; $i++) { 
echo $arr['zvgz'];
if ($i % 50 == 0 ) {
echo "<br>"; 
}
 }
 ///////////////////////////////////////////////////////////////////////////
//  Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.
echo "<hr>";
echo " 2 uzdavinys";
echo "<hr>";
$cnt = 0;
for ($i=0; $i < 300 ; $i++) { 
    
    $skc = rand(0,300);
    if ($skc >275) {
        echo "<span class='red'>" . $skc . "</span> ";
    }else {
        echo " " . $skc ." ";
    }
    if ($skc > 150){
        $cnt++;
    }
   
}
echo "<hr>";
echo "kiek yra didesniu uz 150 --->". "<span class='blue'>" . $cnt . "</span> "; 
///////////////////////////////////////////////////////////////////////////////
// Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.
echo "<hr>";
echo " 3 uzdavinys";
echo "<hr>";
$skc2 = rand(3000,4000);
$txt = "";
echo "Random skaicius". $skc2;
echo "<hr>";
for ($i=1; $i <= $skc2 ; $i++) { 
   if ($i % 77==0) {
    $txt .= $i.",";
    
   } 
}
echo rtrim($txt,",");
////////////////////////////////////////////////////////////////////////////////
// Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
echo "<hr>";
echo " 4 uzdavinys";
echo "<hr>";
?>
<div class="square">
<?php
for ($i=0; $i < 100; $i++) { 
    for ($a=0; $a <100 ; $a++) { 
     echo "*";
    }
    echo "<br>";
}
?>
</div>
<?php
/////////////////////////////////////////////////////////////////////////////
// Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
echo "<hr>";
echo " 5 uzdavinys";
echo "<hr>";
for ($i=0; $i < 10; $i++) { 
    for ($a=0; $a <10 ; $a++) { 
    // echo "*";
     if ($i==$a || $i == 9 - $a ) {
        echo "<span class='red'>" . "*" . "</span> ";
     } else {
        echo "<span class='black'>" . "*" . "</span> ";
     }
     
    }
    echo "<br>";
}
/////////////////////////////////////////////////////////////////////////////////////////
// Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
// Iškritus herbui;
// Tris kartus iškritus herbui;
// Tris kartus iš eilės iškritus herbui;
echo "<hr>";
echo " 6 uzdavinys";
echo "<hr>";
$herbas = 0;
while (true) {
    $skaiciusz = rand(0, 1);
  if ($skaiciusz == 0) {
    echo "H";
    break;
  }else{
    echo "S";
  }
}
  echo "<hr>";
  $herbas3 =0;
  $counts = 0;
  while(true){
    $skaicius= rand(0, 1);
    if ($skaicius ==0) {
        $counts++;
        echo "H";
    }else{
        echo "s";
    }
    if ($counts == 3) {
        break;
     }
  }
  echo "<hr>";
  $herbas4 =0;
  $counteris=0;
  while(true){
    $skt= rand(0,1);
    if ($skt==0) {
      echo "H";
      $counteris++;
    }else {
       echo "s";
        $counteris =0;
    }if ($counteris==3) {
        break;
    }
  }
  //////////////////////////////////////////////////////////////////
//   Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.
  echo "<hr>";
  echo " 7 uzdavinys";
  echo "<hr>";
  $Ptaskai=0;
  $Ktaskai=0;
  $artiesa = true;
  while ($artiesa) {
    $petras = rand(10,20);
    $kazys = rand(5,25);
    $Ptaskai += $petras;
    $Ktaskai += $kazys;
    if ($Ptaskai>=222 ||$Ktaskai>=222 ) {
      $artiesa = false;
    }

  }if ($Ptaskai > $Ktaskai) {
   echo "Partija laimejo: Petras"." ".$Ptaskai;
  }else {
    echo "Partija laimejo: Kazys"." ".$Ktaskai;
  }
?>
<?php
  /////////////////////////////////////////////////////////////////////////////////////////////
//   Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
// “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
// “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
echo "<hr>";
echo " 10 uzdavinys";
echo "<hr>";
for ($i=1; $i <=6 ; $i++) { 
    $lenta = 0;
    $count =0;
    while ($lenta <= 850) {
      $gyl = rand(5,20);
      $lenta += $gyl;
      $count++;
    }
    echo $i." "." vinis buvo ikaltas ". " ". $count." ". " smugiu "." ";
}
echo "<hr>";
//////////////////////B/////////////////////
echo "<hr>";
echo " B dalis";
echo "<hr>";
$vinies_ilgis = 850;
for ($i = 1; $i <= 5; $i++) {
    $ikalimo_gylis = 0;
    $smugiu_skaicius = 0;
    while ($ikalimo_gylis < $vinies_ilgis) {
        $smugio_tikimybe = rand(0, 1);
        if ($smugio_tikimybe == 1) {
            $gylis = rand(20, 30);
            echo " ". $gylis."|";

            
            $ikalimo_gylis += $gylis;
        }
        $smugiu_skaicius++;
    }
    echo "<hr>";
    echo "Vinis "." " . $i . " buvo įkaltas per " . $smugiu_skaicius . " smūgius<br>";
    echo "<hr>";
}

<?php

?>


  

 
 




</body>
</html>



