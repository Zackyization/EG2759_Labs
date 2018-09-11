<?php
    function IsPrime($n) {
        for ($x = 2;$x < $n; $x++) {
            if ($n % $x == 0) {
                return 0;
            }
        }
        return 1;
    }

    $test_result = IsPrime(5); //Calling the function
    if ($test_result) {
        echo "This is not a Prime Number.....";
    } else {
        echo "This is a PRIME Number.....";
    }

    echo "<br>";

    for ($i = 1; $i <= 100; $i++) {
        echo $i . "::";
        $test_result = IsPrime($i);
        if ($test_result) {
            echo "This is not a Prime Number.....";
        } else {
            echo "This is a PRIME Number.....";
        }

        echo "<br>";
    }
?>