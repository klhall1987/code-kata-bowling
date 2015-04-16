<?php

class Game {

    public $name;

    public $roll = [];
    
    //the first nine frames, bowler can roll up to twice on this frame. 
    public $frame = 9;
    
    //tenthframe since bowler will have possiblity to roll three times on this frame. 
    public $tenthframe;

    //bowlers name.
    public function __construct( $name ) {
        $this->name = $name;
    }

    public function bowl( array $num_pins ) {
        //set the number of pins knocked down into the roll array. 
        $this->roll = $num_pins;
        var_dump($num_pins);
    }

    public function score() {

        $score = 0;

        //logic for the first nine frames bowler. 
       for($this->frame = 1; $this->frame <= 2; $this->frame++){
            if($this->roll == 10 && $this->frame == 1){
                $score = $score + 10;
            }
        }

    // Calculate Score Here
    return $score;
    }

}