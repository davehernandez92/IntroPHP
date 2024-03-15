<?php 
  include_once './includes/header.php'; 
?>


<?php 
  $student = [ 
    'name' => 'David',
    'last_name' => 'Hernandez',
    'country' => 'Mexico'
  ];

  echo $student['name'] . " " . $student['last_name'] ." from ". $student['country'] ;
?>
