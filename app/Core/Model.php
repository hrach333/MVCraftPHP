<?php
namespace App\Core;

use PDO;

abstract class Model {
    protected PDO $db;
    protected string $table;
    public function __construct(PDO $db) { $this->db = $db; }
    public function all(): array {
        $stmt = $this->db->query("SELECT * FROM {$this->table} ORDER BY id DESC");
        return $stmt->fetchAll();
    }
    public function find(int $id): ?array {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row ?: null;
    }
    public function create(array $data): int {
        $keys = array_keys($data);
        $cols = implode(',', $keys);
        $vals = implode(',', array_fill(0, count($keys), '?'));
        $stmt = $this->db->prepare("INSERT INTO {$this->table} ({$cols}) VALUES ({$vals})");
        $stmt->execute(array_values($data));
        return (int)$this->db->lastInsertId();
    }
}
