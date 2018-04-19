<?php
  require 'partials/session_start.php';
  require_once 'partials/head.php';
  require_once 'classes/UserController.php';
  require_once 'classes/Entry.php';
  $user = new User();

    if (isset($_GET["message"])) 
    {
      echo "<div class='message'>" . $_GET["message"] . "</div>";
    }
?>


<div class="wrapper">

  <?php
    if($user->isLoggedIn())
    {
      require 'partials/greeting.php';
      require 'partials/post_entry.php';
      require 'partials/get_all_entries.php';
      require 'partials/edit.php';
    }
    else
    {
      require 'partials/signin.php';
    }
  ?>

</div>


<?php require 'partials/footer.php'; ?>