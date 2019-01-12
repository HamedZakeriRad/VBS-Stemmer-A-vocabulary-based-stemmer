<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'config.php';

/**
 * Class to Create PDO Connection Tunnel to MySQL Database.
 *
 * @author Hamed
 */
class mySQLConnect {

    private $hostname;
    private $username;
    private $password;
    private $database;
    
    /**
     * PDO Connection Tunnel to MySQL
     * @example Connection->exec(SQL_Query) Use Connection to Execute SQL Query (Doesn't Return Value)
     * @example Connection->query(SQL_Query) Use Connection to Execute SQL Query (Returns Value)
     */
    public $Connection;

    function __construct() {
        $Config = new config();
        $this->hostname = $Config->hostname;
        $this->username = $Config->username;
        $this->password = $Config->password;
        $this->database = $Config->database;
    }

    /**
     * Connect To MySQL using PDO
     * @return void 
     */
    public function PDOConnect($DBType, $DBName) {
        try {
            if($DBType == "MySQL"){
                $this->Connection = new PDO("mysql:host=$this->hostname;dbname=$this->database", $this->username, $this->password);
            }else{
                if(extension_loaded('sqlite3')){
                    if(!file_exists($DBName)){
                        $this->SQLiteCreate($DBName); 
                    }
                    $this->Connection = new PDO("sqlite:$DBName");
                }else{
                    die("SQLite is not loaded in php.ini <br/> Please Add(UnComment) the following lines in the php.ini file:<br/>extension=sqlite3 <br/>extension=pdo_sqlite");
                }
                
            }
            

            $this->Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the PDO error mode to exception
            //echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    /**
     * Select Query with Prepare Statement
     * @param string $SelectQuery (MySQL Select Query)
     * @return array Returns the requested data as Associative Array 
     */
    public function Select($SelectQuery) { // This function is use for returning ASSOS Array result for SQL Select Query
        $Statement = $this->Connection->prepare($SelectQuery);
        $Statement->execute();
        $Statement->setFetchMode(PDO::FETCH_OBJ); // Set the resulting array to Associative Array
        return $Statement->fetchAll();
    }

    /**
     * Update Query with Prepare Statement
     * @param string $UpdateQuery (MySQL Update Query)
     * @return Bool Returns TRUE if the execution of the query is Successful and returns FALSE if the execution of the query is not Successful. 
     */
    public function Update($UpdateQuery) { // This function is use for executing update query
        $Statement = $this->Connection->prepare($UpdateQuery);
        $Result = $Statement->execute();
        return $Result;
    }

    /**
     * Delete Query
     * @param string $DeleteQuery (MySQL Delete Query)
     * @return Bool Returns TRUE if the execution of the query is Successful and returns FALSE if the execution of the query is not Successful. 
     */
    public function Delete($DeleteQuery) { // This function is use for executing Delete query
        $Statement = $this->Connection->prepare($DeleteQuery);
        $Result = $Statement->execute();
        return $Result;
    }

    /**
     * Close The Open PDO Connection to MySQL
     * @return void
     */
    public function PDOConnectionClose() {
        $this->Connection = null;
    }

    /**
     * Get Today's Date
     * @return date Returns Date in (Y-m-d) Format
     */
    public function getTodayDate() {
        return date('Y-m-d');
    }

    /**
     * Create SQLite Database file with Table and data
     * @return void 
     */
    public function SQLiteCreate($DBName) {
 
        $exec_enabled = function_exists('exec') && !in_array('exec', array_map('trim', explode(', ', ini_get('disable_functions')))) && strtolower(ini_get('safe_mode')) != 1;
        if($exec_enabled) { 
            $SQLite = new SQLite3($DBName); 
            $SQLite->exec('CREATE TABLE vocabulary (wordid INTEGER NOT NULL, word varchar(80) NOT NULL, pos varchar(15) NOT NULL, definition text NOT NULL)');
            $SQLite->exec(file_get_contents('classes/Vocabulary.data'));
            $SQLite->exec('CREATE INDEX word ON vocabulary (word);'); 
        }else{
            die("Please Enable exec function in your php.ini, Make sure exec is not listed under disable_functions in the php.ini file.");
        }
        
    }

}
