<?php

class Game {

    public $name;

    public $rolls;

    public function __construct( $name ) {
        $this->name = $name;
    }

    public function bowl( array $num_pins ) {

        // Log rolls to $this->rolls

    }

    public function score() {

        $score = 0;

        // Calculate Score Here

        return $score;

    }

}