<?php

class Game {

    public $name;

    public $roll;
    
    //the first nine frames, bowler can roll up to twice on this frame. 
    public $frame; 

    

    //bowlers name constructor.
    public function __construct( $name ) {
        $this->name = $name;
    }

    public function bowl( array $num_pins ) {

        //set the number of pins knocked down into the roll array. 
        $this->roll = $num_pins;

        }
    public function score() {

        $score = 0;
        
        if ($this->roll[0] == 10){
                $score = $score + 10;
        } elseif ( $this->roll[0] != 10 ) {
            $score = $this->roll[0] + $this->roll[1];
        }   


    // Calculate Score Here

    return $score;
    }

}