<?php 
  include_once './includes/header.php'; 
?>


<?php 
  $password = "  myPassw   ";

  if(strlen(trim($password)) < 10) {
    echo 'Password is weak'; 
  }else {
    echo 'Password is strong enough';
  }
?>



