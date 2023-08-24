<?php

include_once "../service/StudentService.php";
include_once "../models/Student.php";

use Models\Student;

use Service\StudentService;

    class StudentController{

        private static $instance = null;
        

        private $studentService;
        public function __construct(){
            $this->studentService = new StudentService();
        }
        public function getAll(){

        }
        public function showAdd(){
            $student = $this->studentService->getStudent();
            include "../view/add.php";
        }
        public function handleRequest(){
            switch($_SERVER['REQUEST_METHOD'])
            {
                case 'GET': 
                    $this->handleGetRequest();
                    break;
                case 'POST': 
                    $this->handlePostRequest();
                    break;
            }
        }
        public function handleGetRequest(){
            $action =  "";
            if(isset($_GET['action'])){
                $action = $_REQUEST['action'];
            }
            switch ($action) {
                case 'add':
                    $this->showAdd();
                    break;
                case 'edit':
                    $this->showEdit();
                    break;
                case 'delete':
                    $this->deleteStudent();
                    break;
                default:
                    $this->showStudent();
                    break;
            }
        }
        public function handlePostRequest(){
            $action =  "";
            if(isset($_GET['action'])){
                $action = $_REQUEST['action'];
            }
            switch ($action) {
                case 'add':
                    $this->saveStudent();
                    break;
                case 'edit':
                    $this->updateStudent();
                    break;
                default:
                    $this->getAll();
                    break;
            }
        }
        public function saveStudent(){
            $name = $_POST['name-student'];
            $sex = $_POST['sex-student'];
            $age = $_POST['age-student'];
            $lop = $_POST['lop-student'];

            $maxId = $this->studentService->getMaxId();

            $student = new Student($maxId + 1, $name, $sex, $age, $lop);
            $this->studentService->addStudent($student);

            $student = $this->studentService->getStudent();
            include '../view/index.php';
        }
        public function showStudent(){
            $student = $this->studentService->getStudent();
            include "../view/index.php";
        }
        public function showEdit(){
            $id = $_GET['id'];
            $student = $this->studentService->getStudentById($id);

            include "../view/edit.php";
        }

        public function updateStudent(){
            $name = $_POST['name-student'];
            $sex = $_POST['sex-student'];
            $age = $_POST['age-student'];
            $lop = $_POST['lop-student'];
            $id = $_REQUEST['id'];

            
            $studentUpdate = new Student($id, $name, $sex,$age, $lop);

            $this->studentService->updateProduct($id, $studentUpdate);
            $student = $this->studentService->getStudent();
            include "../view/index.php";

        }

        public function deleteStudent(){
            $id = $_REQUEST['id'];
            $this->studentService->deleteStudent($id);


            $student = $this->studentService->getStudent();
            include "../View/Student.php";
        }
    }

    $student = new StudentController();
    $student->handleRequest();
?>