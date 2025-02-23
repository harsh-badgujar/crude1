<?php

    class Validations{

        public function formValidation($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
           return $data;
           }
    }
?>  