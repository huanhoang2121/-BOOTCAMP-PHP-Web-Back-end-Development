<?php
class Circle {
   private $radius;
   private $color;
   public function __construct($radius,$color) {
      $this->radius = $radius;
      $this->color = $color;
   }
   public function getRadius() { return $this->radius; }
   public function getColor() { return $this->color; }
   public function setRadius($radius) { $this->radius = $radius; }
   public function setColor($color) { $this->color = $color; }
   public function __toString() {
      return   'radius=' . $this->radius . ','. ' color = '.$this->color .'';
   }
   public function getArea() {
      return $this->radius * $this->radius * pi();
   }
}
class Cylinder extends Circle {
   private $height;
   public function __construct($radius ,$color, $height) {
      parent::__construct($radius,$color);
      $this->height = $height;
   }
   public function getHeight() { return $this->height; }
   public function setHeight($height) { $this->height = $height; }
   public function __toString() {
      return  'height=' . $this->height . ', ' . parent::__toString() . '';
   }
   public function getVolume() {
      return $this->getArea() * $this->height;
   }
}
$circle = new Circle(1,'blue',1);
echo 'Diện tích hình tròn: ' . $circle->getArea() . '<br />';
echo 'Thông tin hình tròn: ' . $circle->__toString() . '<br />';
$cylinder = new Cylinder(1,'blue',2);
echo 'Diện tích hình trụ: ' . $cylinder->getVolume() . '<br />';
echo 'Thông tin hình trụ: ' . $cylinder->__toString() . '<br />';
?>