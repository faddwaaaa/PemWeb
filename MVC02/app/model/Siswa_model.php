<?php
class Siswa_model {
    // private $siswa = [
    //     [
    //         "nis" => "18482",
    //         "nama" => "Fadwa Pamulasih"
    //     ],
    //     [
    //         "nis" => "19095",
    //         "nama" => "Gading Ahnaf Arasya"
    //     ]
    // ];
    
    private $dbh; // database handler
    private $stmt; //statement
    
    public function __construct(){
        // data source name
        $dsn = 'mysql:host=localhost;dbname=xiirpl1';
        
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllSiswa(){
        $this->stmt = $this->dbh->prepare("SELECT * FROM siswa01");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    } 
}
?>