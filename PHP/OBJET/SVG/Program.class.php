<?php
class Program {
	private $rectangle;
	private $carre;
	private $circle;
	private $ellipse;
	private $polygon;

    public function __construct(Rectangle $rectangle, Carre $carre, Circle $circle, Ellipse $ellipse, Polygon $polygon) {

    	$this->rectangle = $rectangle;
			$this->carre = $carre;
			$this->circle = $circle;
			$this->$ellipse = $ellipse;
			$this->polygon = $polygon;
    }

	public function drawRectangle() {
		$size = $this->rectangle->getSize(); // ['width' =>200,'height' => 100];
    	$position = $this->rectangle->getPosition();
		$style = $this->rectangle->getStyle();

    	return '<rect x="'.$position['x'].'" y="'.$position['y'].'" width="'.$size['width'].'" height="'.$size['height'].'" fill="'.$style['fill'].'" opacity="'.$style['opacity'].'"></rect>';
    }


		public function drawCarre() {
			$size = $this->carre->getSize(); // ['width' =>200,'height' => 100];
				$position = $this->carre->getPosition();
			$style = $this->carre->getStyle();

				return
				'<rect x="'.$position['x'].'" y="'.$position['y'].'" width="'.$size['width'].'" height="'.$size['height'].'" fill="'.$style['fill'].'" opacity="'.$style['opacity'].'"></rect>';
			}



			public function drawCircle() {

			$size = $this->circle->getSize();
			$position = $this->circle->getPosition();
			$style = $this->circle->getStyle();

			return '<circle cx="'.$position['x'].'" cy="'.$position['y'].'" r="'.$size.'" fill="'.$style['fill'].'" opacity="'.$style['opacity'].'"></circle>';
		}


		public function drawEllipse() {
		    $rx = $this->ellipse->getSize();
				$ry = $this->ellipse->getEllipseSize();
				$position = $this->ellipse->getPosition();
				$style = $this->ellipse->getStyle();

		    	return '<ellipse cx="'.$position['x'].'" cy="'.$position['y'].'" rx="'.$rx.'" ry="'.$ry.'" fill="'.$style['fill'].'" opacity="'.$style['opacity'].'"></ellipse>';

		   }


			 public function drawPolygon() {
	$points =$this->polygon->getPosition();
			 	 		$style = $this->polygon->getStyle();

			 	         return '<polyg points="'.$points[0].', '.$points[1].', '.$points[2].'" fill="'.$style['fill'].'" opacity="'.$style['opacity'].'"></polyg>';

			 	    }

		}



?>
