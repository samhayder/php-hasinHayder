<?php

class RGB {
    private $colors; //#ff0000
    private $red;
    private $green;
    private $blue;

    public function __construct( $colorCode = "" ) {
        $this->colors = ltrim( $colorCode, "#" );
        $this->parseColor();
    }

    public function getColor() {
        return $this->colors;
    }

    public function setColor( $colorCode ) {
        $this->colors = ltrim( $colorCode, "#" );
        $this->parseColor();

    }

    private function parseColor() {
        if ( $this->colors ) {
            list( $this->red, $this->green, $this->blue ) = sscanf( $this->colors, "%02x%02x%02x" );
        } else {
            list( $this->red, $this->green, $this->blue ) = array( 0, 0, 0 );
        }
    }

    public function displayRGBColor() {
        echo "#{$this->red}{$this->green}{$this->blue}";
    }
}

$myColor = new RGB( "#ff00ff " );
$myColor->displayRGBColor();
