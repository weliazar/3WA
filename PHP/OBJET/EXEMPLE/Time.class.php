<?php


/*Objet : class - __construt(parametre) */
class Time {
    
    /*
    public $test = 'test';
    private $test2 = 'test2';
    */
    /* private utilisation que dans l'objet */
 	private $hours;
 	private $minutes;
    private $seconds;

    
/*Toujours mettre le double underscore pour le construct */
	public function __construct($hours, $minutes, $seconds) {
    
		$this->hours = $hours; 
    	$this->minutes = $minutes;
		$this->seconds = $seconds; 

	}
/*SET : MODIFIER */
public function showTime() {
    
    	echo $this->hours.':'.$this->minutes.':'.$this->seconds;
    }
    
    public function getHour() {
    
    	return $this->hours;
    
    }
    
    public function setHour($hour) {
    
    	$this->hours = $hour;
    
    }

	public function getMinute() {
    
    	return $this->minutes;
    
    }
    
    public function setMinute($minute) {
    
    	$this->minutes = $minute;
    
    }
    
    public function getSecond() {
    
    	return $this->seconds;
    
    }
    
    public function setSecond($second) {
    
    	$this->seconds = $second;
    
    }

}


?>