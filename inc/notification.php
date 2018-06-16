<?php 

  //we should use error class for displaying tha notification inside form ...

if (isset($_SESSION['success'])) {
 ?>
 <div class="success">
   <?php 
   echo $_SESSION['success'];
   unset($_SESSION['success']);
   ?>
 </div>
 <?php
}

?>

<?php
if (isset($_SESSION['warning'])) {
  ?>
  <div class="error">
    <?php 
    echo $_SESSION['warning'];
    unset($_SESSION['warning']);
    ?>
  </div>
  <?php
}

?>


