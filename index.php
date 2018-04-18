<?php
require 'partials/session_start.php';
require_once 'partials/head.php';
require_once 'classes/UserController.php';
require_once 'classes/Entry.php';
$user = new User();
if (isset($_GET["message"])) {
  echo "<div class='message'>" . $_GET["message"] . "</div>";
}
?>

<div class="wrapper">

<?php
  if($user->isLoggedIn())
  {
    require 'partials/greeting.php';
    require 'partials/new_entry.php';
    require 'partials/all_entries.php';
    require 'partials/edit.php';
  }
  else
  {
    require 'partials/login.php';
  }
?>

</div>

<?php require 'partials/footer.php'; ?>