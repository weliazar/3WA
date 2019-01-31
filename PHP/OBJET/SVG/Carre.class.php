<?php
class Carre extends Rectangle {
/*prend les proprietes(heritage) de rectangle*/


    public function __construct($x, $y, $width, $fill, $opacity)
	{
    	parent::__construct($x, $y, $width, $width, $fill, $opacity);
/*2 width pour le carre */

	}




}
