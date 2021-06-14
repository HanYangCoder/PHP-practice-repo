<?php
    // start a PHP session, must be in every PHP file to handle sessions
    session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
    // sets session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
?>

<body>
</html>