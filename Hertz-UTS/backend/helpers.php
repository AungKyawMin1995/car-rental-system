<?php
function dd($arg, $die = true)
{
    echo "<pre>";
    print_r($arg);
    echo "</pre>";

    $die && die();
}
