<?php

    date_default_timezone_set("Atlantic/Canary");
    echo(date("Y-m-d H:i:s"))."<br>";

    $t = date("H:i");

    if ($t > "6:59") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
?> 