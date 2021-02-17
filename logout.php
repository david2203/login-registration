<?php
session_start();
?>
<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo "<h1>You are logged out!</h1>  <h2><a href='mainpage.php'>Back to registration?</a> <h2>";


?>