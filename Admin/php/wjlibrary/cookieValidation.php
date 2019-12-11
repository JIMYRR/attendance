<?php
require_once 'Cookie.php';
use WebJol\Cookie\Cookie;
//if user loggedin = cookie found
if(isset($_COOKIE['userid'])) {
//checking module access if true
if(trim(Cookie::get('usertype'))== $moduleAccess){

}
//cheking module access if false
else
if(trim($user['utype'])!= $moduleAccess){
  echo ("<script LANGUAGE='JavaScript'>
     alert('Permission Denied');
    window.location.href='../wjlibrary/logout.php';
   </script>");
}
}

//User Not Loggedin cookies not found
else{
  echo ("<script LANGUAGE='JavaScript'>
     alert('You Need to Login First');
   </script>");
 require 'logout.php';
}
 ?>
