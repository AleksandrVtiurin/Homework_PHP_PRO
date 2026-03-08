<?php
namespace Object\Technics\Transport;
class Car {
    public $brand;
    public $color;
    public function __construct($brand = null, $color = null) {
        $this->brand = $brand ?? "Абстрактная машина";
        $this->color = $color ?? "Белый";
    }
    public function honk() {
        echo "Машина " . $this->brand . " Cигналит\n";
    }
    public function repaint($newColor) {
        $oldColor = $this->color;
        $this->color = $newColor;
        echo "Машина " . $this->brand . " перекрашена из " . $oldColor . " в " . $newColor . "\n";
    }
}
?>
