<?php

class Game {

    public $name;

    //Roll would not merge properly without being in an array. 
    public $roll = [];
    
    //the first nine frames, bowler can roll up to twice on this frame. 
    public $frame; 

    //The last frame, bolwer can roll up to three times in this frame. 
    public $last_frame;

    //bowlers name constructor.
    public function __construct( $name ) {
        $this->name = $name;
    }

    public function bowl( array $num_pins ) {

        //set the number of pins knocked down into the roll array.
        $this->roll = array_merge( $this->roll, $num_pins );

        //splitting the roll array into chunks of two to emulate frames.  
        $this->frame = array_chunk( $this->roll , 2 );

        //to use for the last frame with up to 3 values.
        $this->last_frame = array_chunk( $this->roll , 3 );

        }
    public function score() {

        $score = 0;

        for($i = 0; $i < 1; $i++ ) {
            foreach($this->frame as $key => $value ) {
                //set as else state at the end of the game. 
                //else ( array_sum($value) != 10 ) {
                // $score = $score + array_sum($value);
                
                //Strike logic 
                if ( $value[0] == 10) {

                    $score += array_sum($value);

                    if ( $value[0] == 10 && next($value) != 10 ) {
                        $score += array_sum( $value );
                    }
                }
               var_dump($value);
            }
        }
    
        
               
            
        

        //testing to see if this works. 

        

    // Calculate Score Here

    return $score;
    }

}