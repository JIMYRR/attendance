<?php
error_reporting(0);
if(isset($_GET['already'])){
  $msg="This Email Already Exist";
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

  <title>SignUp Page</title>

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
<style type="text/css">
  
 .custom{
  margin-bottom: 30px;
  padding-top: 10px;
  padding-bottom: 10px;
 }

</style>
 
</head>

<body class="login-img3-body">

  <div class="container custom">
        
   
               <form class="login-form " method="post" action="php/user-signup.php">
                <p class="login-img"></p>
                   <div class="form-group has-success field">
                     <div class="col-lg-12 field">
                     <h2 align="center"><font color="blue">SIGN UP</font></h2>
                    </div>
                  </div>

                  <div class="form-group has-success field">
                     <div class="col-lg-12 field">
                      <label><font color="blue">Enter Name</font></label>
                      <input type="text" name="name" class="form-control" id="inputSuccess" placeholder="Enter Name">
                    </div>
                  </div>

                  <div class="form-group has-success field" >                   
                    <div class="col-lg-12">
                      <label><font color="blue">Enter Email</font></label>
                      <input type="email" name="email" class="form-control" id="inputWarning" placeholder="Enter Email" required>
                      <small><font color="red"><?=$msg?></font></small>
                    </div>
                  </div>

                  <div class="form-group has-success field">
                     <div class="col-lg-12">
                       <label><font color="blue">Enter Phone</font></label>
                      <input type="number" name="contact" class="form-control" id="inputError" placeholder="Enter Mobile">
                    </div>
                   </div> 

                   <div class="form-group has-success ">
                     <div class="col-lg-12">
                       <label><font color="blue">Enter Password</font></label>
                      <input type="password" name="password" class="form-control" id="inputError" placeholder="Enter password">
                    </div>
                   </div>

                   <div class="form-group has-success">
                     <div class="col-lg-12">
                       <label><font color="blue">Enter Address</font></label>
                      <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
                    </div>
                   </div>

              <!--   <div class="form-group has-success">
                     <div class="col-lg-6">
                       <label><font color="blue">Enter Your Office Time</font></label>
                       <select class="form-control">
                        
                         <option vlaue="09">08</option>
                         <option vlaue="10">10</option>
                         <option vlaue="11">11</option>
                         <option vlaue="12">12</option>
                         

                       </select>
                      <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
                    </div>
                   </div> -->

                  <!--  <div class="form-group has-success">
                     <div class="col-lg-6">
                      <select class="form-control" >
                        <option value="am">AM</option>
                         <option value="pm">PM</option>
                      </select> 
                      <textarea class="form-control" name="address" placeholder="Enter Address"></textarea>
                    </div>
                   </div> -->


                  <div class="form-group ">
                     <div class="col-lg-12">
                      <button class="btn btn-primary  btn-block" name="btn-signup" type="submit">SignUp</button>
                    </div>
                  </div>

                   <div class="form-group ">
                     <div class="col-lg-12">
                      <a href="index.php" class="btn btn-primary btn-block"><font color="white">Login</font></a>
                    </div>
                  </div>

 
               </div>
             </form>

        
    
  </div>


</body>

</html>
