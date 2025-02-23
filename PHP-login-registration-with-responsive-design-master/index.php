
<?php
  include "dbConnection/session.php";
  include "main/registration.php";
  // include "main/login.php";
  
 
?>
<?php
     Session::init();
     $login = Session::get("login");
     if ($login == true) {
      header("Location: userProfile.php");
     
       }

?>


<?php
  $connect=new Register();

  if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']) ){
      $registration = $connect->registrationForm($_POST);
  }
  
?>

<?php
  //$con=new Login();
  $logi = new Register();
  if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login']) ){
      $login = $logi->userLogin($_POST);
  }

  
?>






<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="css/bootstrap.css"/>
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
    

  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <div class="head_cls">
    <h2>Login and Registration System</h2>
    <p>design & develop by <a style='color:black;' href="https://www.facebook.com/golamrabbi242">Golam Rabbi</a></p>
  </div>
  <div class="form_body">

      <div class="container">
        <div class="row">
          <div class="col-md-5 col1">
            <h2>User Login:</h2>
            
                <?php
                    if($login){
                      echo $login;
                    }
                ?>
              <form action="" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password" required >
                  </div>
                  
                 <!-- <input type="submit" class="btn log_stil" name="login" value="login"> -->
                 <button type="submit" name="login" class="button ">Login</button>
               </form>

          </div>
          <div class="col-md-2 col3">
              <p>OR</p>
          </div>
          <div class="col-md-5 col2">
          <h2>User Registration:</h2>
          <?php
            if(isset($registration)){
              echo $registration;
            }
          ?>
          <form action=""  method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputFirstName">First name</label>
                  <input type="text" name="fName" class="form-control" id="inputEmail4" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputLastName">Last Name</label>
                  <input type="text" name="lName" class="form-control" id="inputPassword4" placeholder="Last Name">
                </div>
              </div>
              
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputDivision">Division</label>
                  <select id="inputState" name="division" class="form-control">
                    <option selected>Choose...</option>
                    <option>Dhaka</option>
                      <option>Rajshahi</option>
                      <option>Sylet</option>
                      <option>Rongpur</option>
                      

                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputDistrict">District</label>
                  <select id="inputState" name="district" class="form-control">
                    <option selected>Choose...</option>
                    <option>Natore</option>
                      <option>Rajshahi</option>
                      <option>Pabna</option>
                      <option>Dinajpur</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Zip code</label>
                  <input type="text" name="zipCode" class="form-control" id="inputZip">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="inputAddress" placeholder="Email">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="password">Password</label>
                  <input type="password" name="pass" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group col-md-6">
                  <label for="password">confirm Password</label>
               <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password"> 
                </div>
              </div>
              <!-- <input type="submit" class="regis_btn" name="submit" value="submit"> -->
              <!-- <button type="submit" class="btn btn-primary align-center">Submit</button> -->
              <button type="submit" name="submit"  value="submit"class="button2">Registration</button>
            </form>
          </div>
        </div>
      </div>
    </div>



<script>

 var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>


  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="js/vendor/jquery.js" ></script>
  <script src="js/vendor/bootstrap.js" ></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <!-- <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script> -->
</body>

</html>
