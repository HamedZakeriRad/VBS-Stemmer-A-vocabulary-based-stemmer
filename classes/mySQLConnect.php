<?php

/**
 * Description of mySQLConnect
 *
 * @author Hamed Zakeri Rad
 */

require_once 'config.php';

class mySQLConnect {

    private $host;
    private $username;
    private $password;
    private $database;
    private $dbc;
    
    
    function __construct() {
        $Config = new config();
        $this->host = $Config->hostname;
        $this->username = $Config->username;
        $this->password = $Config->password;
        $this->database = $Config->dbName;
    }

    function connect() {
        $conn = mysql_connect($this->host, $this->username, $this->password) or die("Couldn't connect to SQL Server");
        $this->dbc = mysql_select_db($this->database, $conn) or die("Couldn't open database " . $this->database);
    }

    function query($sql) {
        
        $pResult = mysql_query($sql);
        return mysql_fetch_object($pResult);
        
    }
    public function close() {
        return mysql_close();
    }

}
