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

        //Setting an iterator
        for ( $i = 0; $i < count( $this->frame ); $i++ ) {
          //Strike Logic  
          //If the first frame is set to 10 and the first frame in the next array is not set to 10.  
          if ( $this->frame[$i][0] == 10 && $this->frame[$i+1][0] != 10) {

            //Sets score equal to itself then adds the current frame plus the next two rolls scores.  
            $score += array_sum( current( $this->frame ) ) + array_sum( $this->frame[ $i + 1 ] );

            //Spare logic
            //If the first frame is not set to but the sum of the 2 frame equal 10
            } elseif ($this->frame[$i][0] != 10 && array_sum( $this->frame ) == 10) {

                //Sets score equal to itself then adds the current frame plus the first frame of next roll.
                $score += array_sum( current( $this->frame ) ) + array_sum( $this->frame[$i][0] );

            //add the values of other unset values. 
            } else {
                $score += array_sum( $this->frame[$i] );
            }
        }

         var_dump( $this->frame );

    // Calculate Score Here 

    return $score;
    }

}