    <?php
    class databaseCMS {
    	private $host = "127.0.0.1:3306";
    	private $username = "tata";
    	private $password = "VFwKm5ysXXz5n2GS";
    	private $database = "radislavsplichal";

    	
      public function display_public() {
      
        

        
      }

      public function display_admin() {
        
      }

      public function write($query) { 
       //$this->connect();
       $this->baseTransaction($query);

      }

      private function connect() {
        $mysqli = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
        echo "not-conected";
        
        } else {
          
          echo "connected";

        }
        return $mysqli;
      }
      private function baseTransaction($query) {
        $mysqli = $this->connect();
        

        try {

            if ($mysqli->query($query) === true) {
            echo "Transaction OK";

            } else {    
              echo "SQL ERRR";

            }

        } catch(Exception $e) {
        echo "ERRR";
        }

      }

      public function buildDB() {

        

        //return $sql;
      }
    
    }
    

    $base = new databaseCMS;
    //$base->write($sql);
    // $query = $base->buildDB();
    // $base->write($query);






