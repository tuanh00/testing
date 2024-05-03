<?php
        $var = 'PHP';

        // This is a single-line comment
        # This is also a single-line comment

        /* This is multiline comment */


        echo gettype($var); // prints out 'string'

        $msg1 = '$var is of type ' . gettype($var);
        $msg2 = "$var is of type " . gettype($var);
        $msg3 = '$var is of type ' . gettype($var);

        //$ms4 and $msg5 are the same
        $msg4 = "PHP's string type is awesome!";
        $msg5 = 'PHP\'s string type is awesome!';

        echo $msg1 . "<br>";
        echo $msg2 . "<br>";

        // Constants
        define("MY_CONSTANT", 100);

        //Identical and equal operators
        $msg1 === $msg2; // false
        $msg1 == $msg3; // true

        $me = 'I will';
        $escapin2 = 'PP said: "Yes" and I said $me';
        $escapin3 = "PP said: \"Yes\" and I said $me";
        $escapin4 = 'PP said: "Yes" and I said ' . $me;
        echo $escapin2 . "<br>";
        echo $escapin3 . "<br>";
        echo $escapin4 . "<br>";

?>
