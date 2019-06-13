<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XB</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.php">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="#">Otros Ejemplos Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
<h3>Arellano Mariaca Sergio Uriel</h3>
<h2>Problema: TIEMPO DE LA NAVE EN LLEGAR A MARTE</h2>
<p> Suponiendo que una nave viaja a 340 m/s.<p>
<p>Descripción:</p>
<p><br>
a) ¿cunto tardaria la nave en llegar a marte
suponiendo que la tierra y marte no se movieran?</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
  t=d/v<br>
</section>
<section class="datos">
<h2>Datos:</h2>

dtm=distancia tierra-marte=227.9 millones km <br>
   v=velocidad de la nave= 340m/s.
</section>
<section class="calculos">
<h2>Solución</h2>
<p>a)Tiempo de llegada de la nave a marte<br>
   tiempo= distancia/velocidad <br>
   tiempo= 227.9 km/340 m/s <br>
   tiempo=(227.9)(0.2777) = 63.2878 m/s <br>
   tiempo=(63.2878 m/s)/(340 m/s)</p>
</section>
<?php
function calcula_tiempo(){
     $distancia =227.9;
    $velocidad= 340;
    $km=0.27777;
    $t1 = $distancia*$km;
    $t2=$t1/$velocidad;
 $t=0.8100000;
  return $t;
     }

?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: tiempo= ".calcula_tiempo(). " m/s(metro cubico)</h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
