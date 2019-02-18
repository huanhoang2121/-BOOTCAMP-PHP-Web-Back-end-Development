<?php
include_once ('Rectangle.php');
include_once ('Resizeable.php');
class Square extends Rectangle implements Resizeable 
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }
    public function resize($percent){
        return ($this->width * $this->width) * $percent;
    }
}