<?php
class Database
{
    private static $dbName = 'societysolidar' ;
    private static $dbHost = 'societysolidar.mysql.dbaas.com.br' ;
    private static $dbUsername = 'societysolidar';
    private static $dbUserPassword = 'Society2017';
     
    private static $cont  = null;
     
    public function __construct() {
        die('Init function is not allowed');
    }
     
    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
		  echo "conectou";
        }
        catch(PDOException $e)
        {
			echo "erro";
			die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
     
    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>