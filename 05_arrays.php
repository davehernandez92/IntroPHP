<?php 
  include_once './includes/header.php'; 
?>


<?php 
  $fruits = array('apple', 'orange', 'grapes');
  $fruits2 = ['apple2', 'orange2', 'grapes2'];

  array_push($fruits, 'pear');

  echo "<pre>";
  var_dump($fruits);
  echo "</pre>";

  unset($fruits[2]);

  echo "<pre>";
  var_dump($fruits);
  echo "</pre>";

  echo "<pre>";
  var_dump($fruits2);
  echo "</pre>";
  

?>
