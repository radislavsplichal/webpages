  <?php
  class databaseCMS {
  	public $host = "192.168.0.108:3306";
  	public $username = "tata";
  	public $password = "tata";
  	public $database = "radislavsplichal";
  	
  public function display_public() {
      
    }

    public function display_admin() {
      
    }

    public function write() { 
      
    }

    public function connect() {
      $mysqli = new mysqli($this->host, $this->username, $this->password, $this->database);
      if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
      echo "not-conected";
      
      } else {
        
        echo "connected";

      }

    }

    // private function buildDB() {

    //   // $sql = MySQL_QUERY
    //   //     CREATE TABLE IF NOT EXISTS testDB (
    //   //         title	VARCHAR(150),
    //   //         bodytext	TEXT,
    //   //         created	VARCHAR(100)
    //   // )
    //   // MySQL_QUERY;

    //   return mysql_query($sql);
    // }
  
  }
  $base = new databaseCMS;
  $base->connect();






