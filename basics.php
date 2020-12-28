<?php 
    // this is a comment inside a PHP script
    // you can always add scripts inside your HTML file

    echo "Hello World! This an output from a PHP script!<br>";
    
    // PHP variables
    $var1 = "Donald";
    $var2 = "Mickey";
    $var3 = "Goofy";

    // two ways to insert variables in strings
    echo "Hi there! I am $var2 and these are my friends " . $var1 . " and " . $var3 . "<br><br>";

    $myString = "This is a test string!";
    $myStringLength = strlen($myString);

    echo $myString . "<br>";
    echo "The length of the string above is $myStringLength characters";
?>