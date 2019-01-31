
<?php

/*abtract =  Classe qui peut que etre utiliser  pour l'heritage */


/*extends = heritage*/

include 'Shape.class.php';
include 'Rectangle.class.php';
include 'Carre.class.php';
include 'Cercle.class.php';
include 'Ellipse.class.php';
include 'Polygon.class.php';
include 'Program.class.php';


$rectangle = new Rectangle('50', '20', '200', '100', 'firebrick', '1');

$carre = new Carre('400', '200','100', 'deepskyblue','0.5');

$circle = new Circle('300', '250', '180', 'gold', '0.33');

$ellipse = new Ellipse('600', '250', '40', '80', 'blue', '0.75');

$polygon = new Polygon('60 60', '200 250', '60 250', 'purple', '0.75');

$prog = new Program($rectangle, $carre,$circle,$ellipse,$polygon);

$rec = $prog->drawRectangle();
var_dump($rec);


$car = $prog->drawCarre();
var_dump($car);

$cir = $prog->drawCircle();
var_dump($cir);

$poly = $prog->drawPolygon();
var_dump($poly);

$ell = $prog->drawEllipse();
var_dump($ell);

include 'index.phtml';

?>
