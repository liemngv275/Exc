<?php
namespace Dao;
use \PDO;
use \PDOException;

class ProductDao {
    private $pdo;
    public function __construct($host, $dbname, $username, $password)
    {   
        try{
            //mysql:host=$host;dbname=$dbname;charset=utf8
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo "Kết nối không thành công: " . $e->getMessage();
        }
    }
    public function addStudent($student){
        try{
            $sql = "INSERT INTO sinhvien (name, description, price) VALUES (:name, :description, :price)";
            
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":ten_sinh_vien", $student->getName());
            $stmt->bindParam(':gioi_tinh', $student->getSex());
            $stmt->bindParam(":tuoi", $student->getTuoi());
            $stmt->bindParam(":lop", $student->getLop());
            $stmt->execute();

        }catch(PDOException $e){
            echo "Lỗi thêm sinh viên: " . $e->getMessage();
            return false;
        }
    }

    public function getstudent(){
        try{
            $sql = "SELECT * FROM sinhvien";
            $stmt = $this->pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e) {
            echo "Lỗi đọc sinh viên: " . $e->getMessage();
            return [];
        }
    }
}
?>