<?php
namespace App\Core;

class View {
    public static function make(string $template, array $data, array $app): void {
        extract($data, EXTR_OVERWRITE);
        $title = $data['title'] ?? $app['name'];
        $viewFile = __DIR__ . '/../Views/' . str_replace('.', '/', $template) . '.php';
        $layout = __DIR__ . '/../Views/layout.php';
        ob_start();
        require $viewFile;
        $content = ob_get_clean();
        require $layout;
    }
}