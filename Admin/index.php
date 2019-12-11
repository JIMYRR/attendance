<?php
 error_reporting(0);

  // $day=date("l");
  //  if($day=='Sunday'){
  //     $l='disabled';
  //     $m='Today Is Sunday';
  //    }

include"php/wjlibrary/config.php";
 
 if(isset($_POST['btn-login'])){
 
    
 
   $db->where("email",$_POST['uname']);
   $db->where("password",$_POST['upass']);
   $check=$db->getOne("admin_login");
   
   if($check>0){
   
    $_SESSION['a-id']=$check['id'];
    $_SESSION['a-name']=$check['name'];
    header('Location: dashboard.php');
   }
  else{
      $db->where("email",$_POST['uname']);
       $check_email=$db->getOne("admin_login");
  
      if($check_email==0){
      $email="Wrong Email Address";
     }
     else{
      $pass="Wrong Password";
     }
  }
 

 }

 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login Page</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

 
</head>

<body class="login-img3-body">
        
  <div class="container">
    
    <form class="login-form" method="post" action="">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="email" class="form-control" name="uname" placeholder="Username" autofocus required>
          <small><font color="red"><?=$email?></font></small>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="upass" placeholder="Password" required>
           <small><font color="red"><?=$pass?></font></small>
        </div>
       
        <button class="btn btn-primary btn-lg btn-block" name="btn-login" type="submit" >Login</button>
       
        <br>
       
      </div>
    </form>
   
  </div>


</body>

</html>
