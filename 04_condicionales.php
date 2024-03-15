<?php 
  include_once './includes/header.php'; 
?>



<?php 
  $user = 'David';
  $number1 = 20;
  $number2 = 20;

  if($number1 < $number2) {
    echo ' Number 1 is smaller';
  } elseif($number1 === $number2) {
    echo ' Numbers are equal' ;
  } else {
    echo ' Number 2 is smaller';
  }

?>
