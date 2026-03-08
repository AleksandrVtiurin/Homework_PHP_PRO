<?php
class Student {
    public $name;
    public $age;
    public function __construct($name = null, $age = null) {
        if ($name === null) {
            $this->name = "Абстрактный студент";
        } else {
            $this->name = $name;
        }
        
        if ($age === null) {
            $this->age = 20;
        } else {
            $this->age = $age;
        }
    }
    public function introduce() {
        echo "Привет! Меня зовут " . $this->name . ", мне " . $this->age . " лет.\n";
    }
    public function haveBirthday() {
        $this->age++;
        echo "У " . $this->name . " день рождения! Теперь возраст: " . $this->age . "\n";
    }
}
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
class Television {
    public $brand;
    public $channel;
    public function __construct($brand = null, $channel = null) {
        $this->brand = $brand ?? "Абстрактный телевизор";
        $this->channel = $channel ?? 1;
    }
    public function showChannel() {
        echo "Телевизор " . $this->brand . " показывает канал №" . $this->channel . "\n";
    }
    public function nextChannel() {
        $this->channel++;
        echo "Переключение на следующий канал: №" . $this->channel . "\n";
    }
}
?>
