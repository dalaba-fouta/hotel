<?php

class Database {

    private static $dbHost = "";  // L'adresse IP du serveur MySQL
    private static $dbName = "database";    // Nom de la base de données
    private static $dbUsername = "ousmane";          // Nom d'utilisateur MySQL
    private static $dbUserpassword = "qaMEWrjRInFzHikFliBq";  // Mot de passe MySQL
    private static $connection = null;

    public static function connect() {
        if(self::$connection == null) {
            try {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e) {
                die($e->getMessage());
            }
        }

        return self::$connection;
    }

    public static function disconnect() {
        self::$connection = null;
    }
}
?>
