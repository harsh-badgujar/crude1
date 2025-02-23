<?php

include "dbConnection/session.php";
include "main/registration.php";
 Session::init();
Session::checkSession()
 
?>
<?php

// $u = new Register();
// $uid = Session::get('userId');
// $usr = $u->userprofileInfo($uid); 
// if($usr){
//     while ($user = $usr->fetch_assoc()) {
        // echo $user["fName"]."<br>";
        // echo $user["lName"]."<br>";
        // echo $user["division"]."<br>";
        // echo $user["district"]."<br>";
        // echo $user["zipCode"]."<br>";
        // echo $user["email"]."<br>";
//     }
// }
//    ?>
  <html>
    <!-- <a href="?uid=<?php //Session::get('userId') ?>">logout</a> -->
</html>
 
  
<?php
    
    if(isset($_GET['uid'])){
      Session::destroy();
    }
   
  
    

?>


<!DOCTYPE html>
<html lang="en">
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
    <div class="user_table">
    <div class="container">
        <h2>User Information</h2>
        <table class="table table-light align-center">
        <thead>
            <tr>
            <!-- <th scope="col">#</th>
            <th scope="col">First</th> -->
            <!-- <th scope="col">Last</th>
            <th scope="col">Handle</th> -->
            </tr>
        </thead>
        <?php
            $u = new Register();
            $uid = Session::get('userId');
            $usr = $u->userprofileInfo($uid); 
            if($usr){
                while ($user = $usr->fetch_assoc()) {
        ?>
        <tbody>
            <tr>
            <th scope="row"></th>
            <td>First Name:</td>
            <td><?php echo $user["fName"];?></td>
            
            </tr>
            <tr>
            <th scope="row"></th>
            <td>Last Name:</td>
            <td><?php echo $user["lName"];?></td>
            
            </tr>
            <tr>
            <th scope="row"></th>
            <td>USer Division:</td>
            <td><?php echo $user["division"];?></td>
            
            </tr>
            <tr>
            <th scope="row"></th>
            <td>User District:</td>
            <td><?php echo $user["district"];?></td>
            
            </tr>
            <tr>
            <th scope="row"></th>
            <td>Zip Code</td>
            <td><?php echo $user["zipCode"];?></td>
            
            </tr>
            <tr>
            <th scope="row"></th>
            <td>User Email</td>
            <td><?php  echo $user["email"];?></td>
           
            </tr>

        </tbody>
        <?php
           }
        }
           ?>
        </table>
        <button class="prfl_logut_btn"><a href="?uid=<?php Session::get('userId') ?>">Logout</a></button>
    </div>
    </div>
</body>
</html>