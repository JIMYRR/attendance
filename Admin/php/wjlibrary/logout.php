<?php
require_once 'config.php';
use WebJol\Cookie\Cookie;
$res= Cookie::destroy();
if($res==TRUE){

  echo "<script>
  window.location.href='../index.php';
  </script>";
}

?>
