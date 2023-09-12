<?php

$n = 14;
$r = $n % 2;

switch (true) {
    case (0 == $r && $n > 0):
        echo "$n is a positive even number";
        break;

    case (1 == $r && $n > 0):
        echo "$n is a positive odd number";
        break;

    case (0 == $r && $n < 0):
        echo "$n is a negetive even number";
        break;

    case (-1 == $r && $n < 0):
        echo "$n is a negetive odd number";
        break;
}
