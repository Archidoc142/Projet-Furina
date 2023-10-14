<?php
   class PDOFactory {
      const MYSQL_SERVER = 'mysql:host=localhost;dbname=dbGenshin;charset=utf8';
      const MYSQL_LOGIN = 'root';
      const MYSQL_PASSWORD = '';

      public static function getMySQLConnection() {
         $bdd = new PDO(self::MYSQL_SERVER, self::MYSQL_LOGIN, self::MYSQL_PASSWORD);

         return $bdd;
      }
   };
?>