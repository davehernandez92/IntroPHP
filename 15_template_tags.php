<?php 
  include_once './includes/header.php'; 
?>

<?php 
  function the_title($title){
    echo $title;
  }
  function the_date(){
    echo "Posted on " . date('Y m d');
  }
  function the_author($author){
    echo "Written by: " . $author;
  }
?>

<div class="entrada">
  <h2><?php the_title('Title of my blog')?></h2>
  <p> <?php the_date()?></p>
  <p> <?php the_author('David Hernandez')?></p>
</div>