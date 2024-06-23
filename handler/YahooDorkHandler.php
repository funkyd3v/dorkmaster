<?php
require_once 'DorkHandler.php';

class YahooDorkHandler extends DorkHandler {
    protected function insertIntoDatabase($line) {
        $stmt = $this->db->prepare("INSERT INTO google_dorks (dorks) VALUES (:line)");
        $stmt->bindParam(':line', $line);
        $stmt->execute();
    }

    public function fetchDorks() {
        $stmt = $this->db->query("SELECT dorks FROM google_dorks");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
