<?php

function avg($a, $b)
{
    return ($a + $b) / 2;
}

function avgWeighted($a, $b, $wa, $wb)
{
    return ($a * $wa + $b * $wb) / ($wa + $wb);
}