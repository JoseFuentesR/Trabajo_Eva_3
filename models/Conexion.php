<?php

namespace models;

class Conexion
{
public static $user = "ukdrtj08bsfct4gi";
public static $pass = "V9Xv34yzP2KGUWmR0Dkw";
public static $URL = "mysql:host=bzg8zsc3ntcq6u0gkueg-mysql.services.clever-cloud.com;dbname=bzg8zsc3ntcq6u0gkueg";

public static function conector()
{
    try {
        return new  \PDO(Conexion::$URL, Conexion::$user, Conexion::$pass);
    } catch (\PDOException $e) {
        return null;
    }
}
}