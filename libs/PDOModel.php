<?php
require_once 'libs/IConnect.php';

class PDOModel implements IConnect {
    
    const host = IConnect::HOST;
    const user = IConnect::USER;
    const password = IConnect::PASSWORD;
    const db_name = IConnect::DBNAME;
    private $sql = "";
            
    function __construct() {
        
        // catch an exception not to reveal the connection details
        try {
            /* PDO (Library) is an acronym for PHP Data Objects.
             * It is a PHP interface for database communication.
             * More convenient, faster and safer than the old solutions.
             */
            $dsn = sprintf("mysql:host=%s;dbname=%s", self::host, self::db_name);
            $this -> pdo = new PDO($dsn, self::user, self::password);
            $this -> pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            //echo "Connected successfully.<br />"; // [S]OLID
        } catch (PDOException $e) {
            die("Could not connect to the database :" . $e->getMessage()); // [S]OLID
        }
    }
    
    public function select($select = '*', $from = null, $where = null, $orderBy = null, $limit = null) {
       
        $this -> sql .= ($from) ? "SELECT $select FROM $from " : '';
        $this -> sql .= ($where) ? "WHERE $where " : '';
        $this -> sql .= ($orderBy) ? "ORDERBY $orderBy " : '';
        $this -> sql .= ($limit) ? "LIMIT $limit " : '';
        
        $stmt = $this -> pdo -> query($this -> sql);
        $result = $stmt->fetch();   
 
        return $result;
    }
    
    public function __toString() {
        
        return $this -> sql;
    }
}