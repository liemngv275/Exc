<?php

namespace Service;

include '../model/Student.php';
include '../utils/JsonUtils.php';
include '../dao/StudentDao.php';

use  model\Student;
use Utils\JsonUtils;
use Dao\StudentDao;

class ProductService {

    private StudentDao $studentDao;

    public function __construct(){
            $this->studentDao = new StudentDao("localhost:3306", "qlsv", "root", "123456");
    }
    public function addProduct(Student $student){
            $this->studentDao->addProduct($student);
    }
    public function getStudent(){
            return $this->studentDao->getStudent();
    }
 
}

?>