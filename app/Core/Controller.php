<?php
namespace App\Core;

class Controller {
    protected Container $c;
    public function __construct(Container $c) { $this->c = $c; }
    protected function view(string $template, array $data = []): void {
        View::make($template, $data, $this->c->get('config.app'));
    }
}