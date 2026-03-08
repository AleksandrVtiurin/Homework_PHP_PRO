<?php
namespace Object\Human;
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
?>
