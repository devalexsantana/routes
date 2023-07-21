<?php 
namespace App\Db;


class ConnectionDb{

    private  $conn;
    private $host = 'localhost';
    private $drive = 'mysql';
    private $db = 'portal';
    private $user = 'root';
    private $password = '';

  
    private function ConnectionDB()
    {
        try {
            $this->conn = new \PDO('' . $this->drive . ':host=' . $this->host . ':3306;dbname=' . $this->db . '', $this->user, $this->password);

            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo 'ERROR:' . $e->getMessage();
        }

        return $this->conn;
    }


    public function conn(){
        return $this->ConnectionDB();

     }




     

}