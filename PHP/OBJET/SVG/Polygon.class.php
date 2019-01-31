<?php
class Polygon extends Shape{
	public $points;

    public function __construct($pos1, $pos2, $pos3 , $fill, $opacity)
	{
	        parent::__construct('', '', $fill, $opacity);
	        $this->points = [ $pos1, $pos2, $pos3 ];
	}

    public function getPosition(){

		return $this->points;
	}


}
