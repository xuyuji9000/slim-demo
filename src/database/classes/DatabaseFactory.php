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
