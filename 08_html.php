<?php 
  include_once './includes/header.php'; 
?>


<?php 
$student = [
  'name' => 'David',
  'last_name' => 'Hernandez',
  'country' => 'Mexico'
];

echo '<h1> Hi!  ' . $student['name'] . '</h1>';
?>

<!-- I think this one is easier to read , previously is more error prompting I believe -->
<h1>
  Hi! <?php echo $student['name'];?> 
</h1>