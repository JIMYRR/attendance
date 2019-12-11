<?php
include"php/wjlibrary/config.php";
error_reporting(0);

 if(isset($_POST['btn-pass'])){
  
   $db->where("id",$_SESSION['a-id']);
   $pass=$db->getOne("admin_login");

 if($pass['password']==$_POST['old_pass']){
     if($_POST['new_pass']==$_POST['con_pass']){
        $arr=Array('password'=>$_POST['new_pass']);
        $db->where("id",$_SESSION['a-id']);
        $db->update("admin_login",$arr);
       $done="Password Update Successfully";
     }
     else{
      $con_msg="Confirm Password Not Match";
     }
 }
   else{
    $msg_old="Old Password Not Match";
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

  <title>Update Password</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  
</head>

<body>

  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
   <?php include"header.php"; ?>
    <!--header end-->

    <!--sidebar start-->
 <?php include"left-sidebar.php"; ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Update Password</h3>
           
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="post" action="">
                  
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      
                      <h2><font color="green"><?=$done?></font></h2>
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Enter Old Password</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control round-input" name="old_pass" required>
                      <span class="help-block"><font color="red"><small><?=$msg_old?></small></font></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Enter New Password</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control round-input" name="new_pass" required>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="col-sm-2 control-label">Confirm Password</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control round-input" name="con_pass" required>
                       <span class="help-block"><font color="red"><small><?=$con_msg?></small></font></span>
                    </div>
                  </div>
                  
                  
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      <input type="submit" class="btn btn-primary btn-block round-input" value="Update" name="btn-pass">
                    </div>
                  </div>
                  
                 <div class="form-group">
                    <label class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      
                      
                    </div>
                  </div>

                </form>
              </div>
            </section>

       
         
          
          </div>
        </div>
        <!-- Basic Forms & Horizontal Forms-->

    
        <!-- Inline form-->
     
      
        <!-- page end-->
      
    </section>
    <!--main content end-->
  </section>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>


</body>

</html>
