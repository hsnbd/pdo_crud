<?php include 'config.php';


class DB {
    private static $pdo;

    public static function connection(){
        
        try {
            self::$pdo = new PDO('mysql:host='. DB_HOST. '; dbname='.DB_NAME,DB_USER,DB_PASS);
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public static function prepare($sql){
        
    }
}

?>