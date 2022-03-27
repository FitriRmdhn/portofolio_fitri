<?php

    class PortofolioModel{
        private $host   = DB_HOST;
        private $user   = DB_USER;
        private $pass   = DB_PASS;
        private $db_name= DB_NAME;

        private $dbh;
        private $stmt;
        function __construct()
        {
            $dsn = 'mysql:host=' .$this->host. ';db_name=' .$this->db_name;
            $option = [
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            try {
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
            } catch (PDOException $e){
                die($e->getMessage());
            }
        }
        public function getProfile()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM user');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getAboutMe()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM about me');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getMyActivity()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM my activity');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getContact()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM contact');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function tampungPesan($data_pesan)
        {
            $email = $data_pesan["email"];
            $nama  = $data_pesan["nama"];
            $pesan = $data_pesan["pesan"];

            $query = "INSERT INTO contact
            VALUES
            ('','$email','$nama','$pesan')
            ";
            $this->stmt = $this->dbh->prepare($query);
            $this->stmt->execute();
            return $this->stmt->rowCount();
        }
    }
            
?>