<?php
    /*
    PHP User Defined Functions :
    Besides the built-in PHP functions, we can create our own functions.
    A function is a block of statements that can be used repeatedly in a program.
    A function will not execute immediately when a page loads.
    A function will be executed by a call to the function.

    Create a User Defined Function in PHP :
    A user-defined function declaration starts with the word function:

    Syntax:
    function functionName() {
        code to be executed;
    } 
    */
    function familyName($fname, $year) {
        echo "$fname Refsnes. Born in $year <br>";
    }
    
    familyName("Hege", "1975");
    familyName("Stale", "1978");
    familyName("Kai Jim", "1983");
?>