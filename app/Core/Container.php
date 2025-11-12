<?php
namespace App\Core;

class Container {
    private array $bindings = [];
    private array $instances = [];
    public function set(string $id, callable $factory): void { $this->bindings[$id] = $factory; }
    public function get(string $id) {
        if (array_key_exists($id, $this->instances)) return $this->instances[$id];
        $factory = $this->bindings[$id] ?? null;
        if (!$factory && class_exists($id)) $factory = fn(self $c) => new $id();
        if (!$factory) throw new \RuntimeException("Service {$id} not found");
        return $this->instances[$id] = $factory($this);
    }
}