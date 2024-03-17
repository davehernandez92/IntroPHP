<?php 
  include_once './includes/header.php'; 
?>

<?php 
  function calculate_total( $price) {
    $taxes = 1.15;
    $total = $price * $taxes;
    return $total;
  }

  $final_price = calculate_total(1000);

  function pay($total){
    $available_balance = 500;
    
    if($available_balance < $total) {
      echo 'Sorry, there was an error';

    }else {
      echo 'Payment was made successfully';
    }
  }

  pay($final_price);
?>