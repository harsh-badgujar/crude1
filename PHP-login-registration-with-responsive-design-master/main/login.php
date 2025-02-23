<?php
    //     include "dbConnection/dbConfig.php";
    //    include "dbConnection/database.php";
    //    include "formValidation/validation.php";
?>

<?php

    class Login
    {
        public $dbl;
        public $vald;
        public function __construct()
        {
            $this->dbl = new Database();
            $this->vald = new Validations();
        }
    
        public function userLogin($data)
        {
            $email = $this->vald->formValidation($data['email']);
            $pass = $this->vald->formValidation($data['pass']);
            $email = mysqli_real_escape_string($this->dbl->link, $email);
            $pass = mysqli_real_escape_string($this->dbl->link, $pass);
            $pass = md5($pass);


            $query = "SELECT * FROM usertable WHERE email='$email'pass='$pass'";
            $result = $this->dbl->select($query);
            if ($result != false) {
                $value = $result->fetch_assoc();
                Session::set("login", true);
                Session::set("email", $value['email']);
                Session::set("userId", $value['id']);
                header("Location: userProfile.php");
            //echo "<script>window.location = 'index.php';</script>";
            }else{
                echo "email or password is not valid";
            }
        }
    }
?>