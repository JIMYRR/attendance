<?php

include"wjlibrary/config.php";

 if(isset($_POST['btn-signup'])){
   
   $db->where("email",$_POST['email']);
   
   $check=$db->getOne("signup");

    if($check>0){

    	header('Location: ../signup.php?already');
    }
  else{
 
   	$arr=Array('name'=>$_POST['name'],
               'email'=>$_POST['email'],
               'contact'=>$_POST['contact'],
               'password'=>$_POST['password'],
               'address'=>$_POST['address']);

   	    $db->insert("signup",$arr);
      header('Location:../index.php?success');

  }
 

 }

?>