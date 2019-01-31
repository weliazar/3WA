<?php
class Rectangle extends Shape {
/*rectangle herite de shape*/
	private $width;
	private $height;


    public function __construct($x, $y, $width, $height, $fill, $opacity)
	{
    	parent::__construct($x, $y, $fill, $opacity);
   	    $this->width = $width;
		$this->height = $height ;

	}


	public function getSize() {

		return [
			'width' => $this->width,
			'height' => $this->height
		];
	}



}
