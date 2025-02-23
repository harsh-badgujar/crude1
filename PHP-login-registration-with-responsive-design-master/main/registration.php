<?php
    include_once "dbConnection/session.php";
    include_once "dbConnection/dbConfig.php";
    include_once "dbConnection/database.php";
    include_once "formValidation/validation.php";

?>

<?php
    class Register{
        public $db;
        public $validate;
        public function __construct(){
            $this->db = new Database();
            $this->validate = new Validations();
        }
    public function registrationForm($data){
            // $fName = $data['fName'];
            // $lName = $data['lName'];
            // $division = $data['division'];
            // $district = $data['district'];
            // $zipCode = $data['zipCode'];
            // $email = $data['email'];
            // $pass = $data['pass'];
            
        $fName = $this->validate->formValidation($data['fName']);
        $lName = $this->validate->formValidation($data['lName']);
        $division = $this->validate->formValidation($data['division']);
        $district = $this->validate->formValidation($data['district']);
        $zipCode = $this->validate->formValidation($data['zipCode']);
        $email = $this->validate->formValidation($data['email']);
        $pass = $this->validate->formValidation($data['pass']);

         $fName = mysqli_real_escape_string($this->db->link,$fName);
         $lName = mysqli_real_escape_string($this->db->link,$lName);
         $division = mysqli_real_escape_string($this->db->link,$division);
         $district = mysqli_real_escape_string($this->db->link,$district);
         $zipCode = mysqli_real_escape_string($this->db->link,$zipCode);
         $email = mysqli_real_escape_string($this->db->link,$email);
        $pass = mysqli_real_escape_string($this->db->link,$pass);
        $pass = md5($pass);

        
        

        if(empty($fName) or empty($lName) or empty($division) or empty($district) or empty($zipCode) or empty($email) or empty($pass) ){
           $msg= "<p style='color:red;'> Field Must not be empty </p>";     
            return $msg;
        }
        $sqlEml = "SELECT email FROM usertable WHERE email='$email'";
        $eml = $this->db->select($sqlEml);
        if($eml==$email){
        
            $msg= "<p style='color:red;'>email already exist </p>"; 
            return $msg;
            
        }
        else{
            $sql = "INSERT INTO usertable(fName,lName,division,district,zipCode,email,pass)VALUE('$fName','$lName','$division','$district','$zipCode','$email','$pass')";
            $inst= $this->db->insert($sql);
            if($inst){
              
                $msg= "<p style='color:green;'>you have been register successfully </p>";
                return $msg;

                
            }else{
               
                $msg= "<p style='color:red;'>something is not valids </p>"; 
               return $msg;
            }
        }

    }

// login
    public function userLogin($data)
    {
        $email = $this->validate->formValidation($data['email']);
        $pass = $this->validate->formValidation($data['pass']);
        $pass = md5($pass);
        $email = mysqli_real_escape_string($this->db->link, $email);
        $pass = mysqli_real_escape_string($this->db->link, $pass);
        
        if(empty($email) or empty($pass)){
            $msg="field empty ";
            return $msg;

        }else{
            $query = "SELECT * FROM usertable WHERE email='$email' && pass='$pass'";
            $result = $this->db->select($query);
            if ($result != false) {
                $value = $result->fetch_assoc();
                Session::set("login", true);
                Session::set("email", $value['email']);
                Session::set("userId", $value['id']);
                echo "login successful";
                header("Location: userProfile.php");
            
            //echo "<script>window.location = 'index.php';</script>";
            } else {
                echo "email or password is not valid";
            }
        }
    }




// profile profile profile;


    public function userprofileInfo($id){
        $sql = "SELECT * FROM usertable WHERE id='$id'";
        $user = $this->db->select($sql);
        return $user;
    }





    }

?>