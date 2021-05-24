<?php 
    // this is a comment inside a PHP script
    // you can always add scripts inside your HTML file

    echo "Hello World! This an output from a PHP script!<br>";
    
    // PHP variables
    $var1 = "Donald";
    $var2 = "Mickey";
    $var3 = "Goofy";
    $var4 = "Minnie";

    // two ways to insert variables in strings
    echo "Hi there! I am $var2 and these are my friends " . $var1 . " and " . $var4 . "<br><br>";

    $myString = "This is a test string!";
    $myStringLength = strlen($myString);
    $myStringWordCount = str_word_count($myString);
    $myStringReversed = strrev($myString);

    // getting the length of a string
    echo $myString . "<br>";
    echo "The length of the string above is $myStringLength characters.<br>";

    // getting the number of words in a string
    echo "There are $myStringWordCount words in my string.<br>";

    // reversing a string
    echo "This is the string above which is reversed: $myStringReversed.<br>";
?>