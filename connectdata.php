<?php


class database2 {

    private $id;
    private $name;
    private $email;
    private $date;
    private $conn;


    public function __construct($id = 0 , $name = "" , $email = "" , $date = "")
    {
        $this->id    = $id;
        $this->name  = $name;
        $this->email = $email;
        $this->date  = $date;

        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=task3" , "root" , "");
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getDate(){
        return $this->date;
    }


    public function insert(){
        try {
            $sql = $this->conn->prepare("INSERT INTO users(name,email,date) VALUES(?,?,?)");
            $sql->execute([$this->name,$this->email,$this->date]);
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function fetchAll(){
        try {
            $sql = $this->conn->prepare("SELECT * FROM users");
            $sql->execute();
            return $sql->fetchAll();
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function FetchOne(){
        try {
                $sql =$this->conn->prepare("SELECT FROM users WHERE id=?");
                $sql->execute([$this->id]);
                return $sql->fetchAll();
        }catch (Exception $e){
            return $e->getMessage();
        }
    }


    public function delete(){
        try{
            $sql = $this->conn->prepare("DELETE FROM users WHERE id = ?");
            $sql->execute([$this->id]);
            return $sql->fetchAll();
            echo "<script>alert('data deleted successfully');document.location='index.php'</script>";
        }catch (Exception $e){
            return $e->getMessage();
        }
    }


}





