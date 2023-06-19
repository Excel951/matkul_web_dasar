<?php
class ConnectionOOP
{
    protected $servername, $dbname, $user, $password;
    public function __construct(string $servername = "localhost", string $dbname = "toko", string $user = "root", string $pass = "")
    {
        $this->servername = $servername;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $pass;
    }

    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->user, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $conn;
        } catch (ErrorException $error) {
            echo $error . '<br>';
        }
    }

    public function queryGetAllData($tableName)
    {
        try {
            $querySQL = "SELECT * FROM $tableName";
            $stmt = $this->connect()->prepare($querySQL);
            // $stmt->bindParam('s', $tableName);
            $stmt->execute();
            // if ($stmt->rowCount()>0) {    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // }
            return $result;
        } catch (ErrorException $error) {
            echo $error . '<br>';
        }
    }

    public function renderData()
    {
        try {
            $result = $this->queryGetAllData("barang");
            echo json_encode($result);
        } catch (ErrorException $error) {
            echo $error . '<br>';
        };
    }
}

$x = new ConnectionOOP();

$x->renderData();
