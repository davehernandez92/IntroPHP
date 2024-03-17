<?php 
  include_once './includes/header.php'; 
?>

<?php 
  $fruits = array('apple', 'orange', 'grapes');

  for ($i=0; $i < count($fruits) ; $i++) { 
    echo $fruits[$i] . "<br/>";
  }

  foreach($fruits as $fruit){
    echo $fruit . '<br/>';
  }
?>
