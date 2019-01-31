<?php
class Ellipse extends Circle {

	private $ry;

	public function __construct($x, $y, $rx, $ry, $fill, $opacity)
	{
		parent::__construct($x, $y, $rx, $fill, $opacity);
		$this->ry = $ry;
	}


	public function getEllipseSize() {
		return  $this->ry;
	}


}

?>
