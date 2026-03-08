<?php
spl_autoload_register(function ($className) {
    $baseDir = __DIR__ . '/';
    $filePath = $baseDir . str_replace('\\', '/', $className) . '.php';
    if (file_exists($filePath)) {
        require_once $filePath;
        echo "Загружен класс: " . $className . " из файла: " . $filePath . "\n";
        return true;
    } else {
        echo "Файл не найден: " . $filePath . "\n";
        return false;
    }
});
echo "Автозагрузчик инициализирован\n\n";
?>
