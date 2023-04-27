<?php
declare(strict_types=1);

class src_Connection {
    private static ?PDO $connection = null;

    public static function get(): PDO {
        if (! self::$connection) {
            $config = include __DIR__ . '/../config.php';

            $dbHost = $config['pdo']['db_host'] ?? '';
            $dbName = $config['pdo']['db_name'] ?? '';
            $dbUser = $config['pdo']['db_user'] ?? '';
            $dbPass = $config['pdo']['db_pass'] ?? '';

            self::$connection = new PDO("mysql:host=$dbHost;port=3306;dbname=$dbName", $dbUser, $dbPass);
        }

        return self::$connection;
    }
}