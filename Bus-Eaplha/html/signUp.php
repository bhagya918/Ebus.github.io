<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'C:\xampp\htdocs\Bus-Eaplha\php\dbconnection.php';
$userId=$_POST["phone"];
$username=$_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$exists=false;


if(($password == $cpassword) && $exists==false)
{
  $sql="INSERT INTO `appusre1` (`userId`, `full_Name`, `emailId`, `phone`, `password`, `time`)
        VALUES ('$phone', '$username', '$email', '$phone', '$password', CURRENT_TIMESTAMP);";
  $result =mysqli_query($conn,$sql);
  if($result)
  {
  $showAlert = true;
  header("Refresh:5;url=http://localhost/Bus-Eaplha/index.php");
  }
 else {
$showError=" Phone number already used for a registered user";
}
}
else {
$showError=" password dont matched";
}
}
 ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Project Bus-E</title>
    <link href="\Bus-Eaplha\bootstrap-5.3.0-alpha1-dist\css\bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="\Bus-Eaplha\css\signUp.css">
    <link rel="stylesheet" href="\Bus-Eaplha\css\fixed.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
  </head>
  <body>

    <script src="\Bus-Eaplha\bootstrap-5.3.0-alpha1-dist\js\bootstrap.js" ></script>
    <script type="text/javascript" src="\Bus-Eaplha\javascript\formvalidation.js" ></script>







    <div class="video-background">
      <div class="video-wrap">
        <div id="video">
        <video id="bgvid" autoplay loop muted playsinline >
           <source src="\Bus-Eaplha\media\video\video (2).mp4" type="video/mp4">
        </video>
        </div>
      </div>
    </div>

    <div class="caption">
  <center>
    <?php
    if($showAlert)
    {
    echo '<div class="alert alert-success" role="alert">
  <strong>Sucess!</strong> Your account is now created and you can login.
</div>';
    }
  if($showError)
    {
     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Oops!</strong>'.$showError.'
 </button>
</div>';
    }
    ?>
    <h1 class="display-1 gfont">Project Bus-E</h1><br>
    <h2 class="tagln">Welome to Project Bus-E</h2>
    <h2 class="tagln">Let's begin your journey with us!</h2></br><br>
    <a href="#signUpForm" class="btn btn-outline-light btn-lg">Let's Create Your Account</a><br><br>
    <a href="/Bus-Eaplha/index.php" class="text-white linksmall">Click Me If You Have Account</a>
    </center>
    </div>



     <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <center><h1 class="display-5" id="signUpForm">Please fill the details to create an account</h1>
             <br>
          </center>
        </div>
        <form action="signUp.php" method="post" >
  <div class="sm-12">
    <label for="name" class="form-label form-control-sm">Full Name</label>
    <input name="username" type="text" class="form-control form-rounded form-control-sm" id="username" aria-describedby="nameHelp" required maxlength="140">
    <div id="nameHelp" class="form-text form-control-sm">Please insert full name as per goverment id.</div>
  </div>
  <div class="sm-12">
    <label for="phone" class="form-label form-control-sm">Phone number</label>
    <input name="phone" type="tel" class="form-control form-rounded form-control-sm" id="phone" aria-describedby="emailHelp" required minlength="10" maxlength="10">
  </div>
  <div class="sm-12">
    <label for="email" class="form-label form-control-sm">Email address</label>
    <input name="email" type="email" class="form-control form-rounded form-control-sm" id="email" aria-describedby="emailHelp" required maxlength="56">
    <div id="emailHelp" class="form-text form-control-sm">We'll never share your email phone with anyone else.</div>
  </div>
  <div class="sm-12">
    <label for="password" class="form-label form-control-sm">Password</label>
    <input name="password" type="password" class="form-control form-rounded form-control-sm" id="password" aria-describedby="passwordHelp" required minlength="8" maxlength="23">
    <div id="passwordHelp" class="form-text form-control-sm">Use minimum 8 to 12 character password with upper lower and special characters combination.</div>
  </div>
  <div class="sm-12">
    <label for="cpassword" class="form-label form-control-sm">Confirm password</label>
    <input name="cpassword" type="password" class="form-control form-rounded form-control-sm" id="cnfrm-password" required minlength="8" maxlength="23">
  </div>

</br>
<center>
  <div class="row">
    <div class="col-sm-12">
  <button type="submit" onclick="checkPassword()" class="btn btn-outline-dark form-rounded">Create My Account</button>
  </div>
  <div class="col-sm-12">
  </br>
  <a href="/Bus-Eaplha/index.php" class="text-black">Click Me If You Have Account</a>
  </div>
  </div>
</center>
</form>
      </div>
      <br>
    </div>
  <footer  class="flex-shrink-0 py-4 text-black-5">
  <div class="container text-center">
    <small>Copyright &copy; 2023 Project Bus-E</small>
  </div>
</footer>
  </body>
</html>
