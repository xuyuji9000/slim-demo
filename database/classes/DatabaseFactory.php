<?php
/*
 * This class is used to generate database instance
 * Include: Mysql, Sqlite
 */
class DatabaseFactory 
{
    public static function create($database) 
    {
        switch($database)
        {
            case 'mysql': {
                $dsn = "mysql:host=".getenv("HOST").";dbname=".getenv("DATABASE").";charset=".getenv("CHARSET");
                $user = getenv("USERNAME");
                $pass = getenv("PASSWORD");
                return new PDO($dsn, $user, $pass);
                break;
            }
            case 'sqlite': {
                return new PDO("sqlite:../database/database.sqlite");
                break;
            }
            default:
                break;
        }
    }
}
