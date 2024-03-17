<?php 
  include_once './includes/header.php'; 
?>

<?php 
  $fruits = array('apple', 'orange', 'grapes');

  for ($i=0; $i < count($fruits) ; $i++) { 
    echo $fruits[$i] . "<br/>";
  }

  $i = 0;

  while($i <= 100) {
    echo "Number " . $i . "<br/>";
    $i++;
  }
  
  $fruit = 0;
  while($fruit < count($fruits)) {
    echo "Fruit " . $fruit . "<br/>";
    $fruit++;
  }
?>
