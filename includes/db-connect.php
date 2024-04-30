<?php 
    class dbConn{
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "mangaia2";
        private $conn ;
        
        function  __construct(){
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            if ($this->conn->connect_error) {
              die("Connection failed: " . $this->conn->connect_error);
            }
        }

        public function getQuery($sql) {
            $result = $this->conn->query($sql);
            if ($result) {
                header("HTTP/1.1 200 ok");
                return $result;
            }else{
                return false;
                header("HTTP/1.1 500 Internal Server Error");
            }
        }

        public function addProduct($sql) {
            if ($this->conn->query($sql)) {
                header("HTTP/1.1 200 ok");
                return $this->conn->insert_id;
            }else{
                return false;
                header("HTTP/1.1 500 Internal Server Error");
            }
        }

        public function postQuery($sql){
             if ($this->conn->query($sql)) {
                header("HTTP/1.1 200 ok");
                return true;
            }else{
                return false;
                header("HTTP/1.1 500 Internal Server Error");
            }
        }
    };
?>