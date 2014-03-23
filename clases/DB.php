<?php

class DB
{
    private static $dbname = "DB_Mundialito";
    private static $dbuser = "root";
    private static $dbpass = "";
    private static $dbhost = "localhost";

    public static function getNombreDB()    {   return self::$dbname;   }
    public static function getUsuario()    {   return self::$dbuser;    }
    public static function getPass()    {   return self::$dbpass;   }
    public static function getHost()    {   return self::$dbhost;   }
    
    private static function conexion()
    {
        $link = mysql_pconnect(self::$dbhost, self::$dbuser, self::$dbpass);

        if ( !$link )
        {
            die('Could not connect: ' . mysql_error());
        }

        return $link;
    }

    public static function conectar()
    {
        $link = self::conexion();
        mysql_select_db(self::$dbname,$link);
        return $link;
    }
    
}


?>