<?php
class datbaseCMS {
	var $host = "89.239.10.163:3306";
	var $username = "tata";
	var $password = "tata";
	var $table = "Articles";
	
public function display_public() {
    
  }

  public function display_admin() {
    
  }

  public function write() {
    
  }

  public function connect() {
    $mysqli = new mysqli($host, $username, $password, $table);
    if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
    echo "conected";
}
  }

 private function buildDB() {

    // $sql = MySQL_QUERY
    //     CREATE TABLE IF NOT EXISTS testDB (
    //         title	VARCHAR(150),
    //         bodytext	TEXT,
    //         created	VARCHAR(100)
    // )
    // MySQL_QUERY;

    return mysql_query($sql);
 }
}




