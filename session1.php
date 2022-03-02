<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
$_SESSION["username"] = "anjalyj";
$_SESSION["email"] = "anjalyj@gmail.com";
echo "Session variables are set.";
?>
</body>
</html>
