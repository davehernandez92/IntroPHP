<?php 
  include_once './includes/header.php'; 
?>

<?php 
  class Client {
    // Declaring property
    public $name;

    public function __construct($client)
    {
      $this->name = $client;
    }

    public function show_name() {
      echo 'The name is ' . $this->name;
    }
  }

  $client = new Client('David');
  $client->show_name();
?>
