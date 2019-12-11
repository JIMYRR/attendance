
<?php

include"php/wjlibrary/config.php";
 $db->where("email",$_POST['eemail']);
 $data=$db->getOne("signup");

  if($data>0){
    $e="<font color='red'>This Email Alredy Exist</font>";
  }else{

 if(isset($_POST['btn-emp'])){
 $arr=Array('name'=>$_POST['ename'],
            'email'=>$_POST['eemail'],
            'contact'=>$_POST['econtact'],
            'password'=>$_POST['epass'],
            'address'=>$_POST['eadd'],
            'coming_time'=>$_POST['time'],
            'occupation'=>$_POST['eoccupation']
              );
  if($db->insert("signup",$arr)){
    $msg="<font color='green'>Employee Add Successfully</font>";
  }else{
    $msg="<font color='red'>Some Error</font>";
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

  <title>my profile</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
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
            <h3 class="page-header"><i class="fa fa-user-md"></i>Add New Employee </h3>
            <ol class="breadcrumb">
             <li><?=$msg?></li>
             <!--   <li><i class="icon_documents_alt"></i>Pages</li>
              <li><i class="fa fa-user-md"></i>Profile</li> -->
            </ol>
          </div>
        </div>
        
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
             
              <div class="panel-body">
                <div class="tab-content">
                 

                 
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                       
                        <form class="form-horizontal" role="form" method="post" action="">
                          <div class="form-group">
                            <label class="col-lg-2 control-label"> Name</label>
                            <div class="col-lg-6">
                              <input type="text" name="ename" class="form-control" id="f-name" placeholder="Employee Name ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                              <input type="text" name="eemail" class="form-control" id="email" placeholder="Employee Email " required>
                              <small><?=$e?></small>
                            </div>
                          </div>
                         
                           <div class="form-group">
                            <label class="col-lg-2 control-label">Mobile</label>
                            <div class="col-lg-6">
                              <input type="number" name="econtact" class="form-control" id="mobile" placeholder=" ">
                            </div>
                          </div>
                          
                              <div class="form-group">
                            <label class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-6">
                              <input type="password" name="epass" class="form-control" id="mobile" placeholder=" " required>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Occupation</label>
                            <div class="col-lg-6">
                              <input type="text" name="eoccupation" class="form-control" id="occupation" placeholder=" ">
                            </div>
                          </div>
                         
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Office Timeing</label>
                            <div class="col-lg-6">
                              <input type="time" name="time" class="form-control" id="occupation" placeholder=" " required>
                            </div>
                          </div>
                        
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Address</label>
                            <div class="col-lg-10">
                              <textarea name="eadd" id="" class="form-control" cols="20" rows="5"></textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" name="btn-emp" class="btn btn-primary">ADD</button>
                              <button type="reset" class="btn btn-danger">Cancel</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  <script>
    //knob
    $(".knob").knob();
  </script>


</body>

</html>
