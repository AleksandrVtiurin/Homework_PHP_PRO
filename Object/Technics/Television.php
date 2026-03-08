<?php
namespace Object\Technics;
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
