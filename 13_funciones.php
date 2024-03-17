<?php 
  include_once './includes/header.php'; 
?>


<?php 
  function say_hi($username) {
    echo 'Hi , welcome ' . $username . '<br/>' ;

  }

  say_hi('David');


  function adding($num1 =0 , $num2 = 0 ) {
    echo $num1 + $num2 ;
  }

  adding(2, 10);

?>
