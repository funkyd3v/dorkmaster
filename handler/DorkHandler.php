<?php
require_once './Database.php';
require_once './factory/DorkHandlerInterface.php';

abstract class DorkHandler implements DorkHandlerInterface {
    protected $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function sanitize($input) {
        return trim($input);
    }

    protected function validate($input) {
        return !empty($input);
    }

    public function processInput($input) {
        $lines = explode(PHP_EOL, $input);
        foreach ($lines as $line) {
            $sanitizedLine = $this->sanitize($line);
            if ($this->validate($sanitizedLine)) {
                $this->insertIntoDatabase($sanitizedLine);
            }
        }
    }

    abstract protected function insertIntoDatabase($line);
}
