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
    require 'partials/view_greeting.php';
    require 'partials/view_new_entry.php';
    require 'partials/view_get_all_entries.php';
    require 'partials/view_edit.php';
  }
  else
  {
    require 'partials/view_login_register.php';
  }
?>

</div>

<?php require 'partials/footer.php'; ?>