<?php

$presentTime = new DateTime('2023-11-08 11:39 AM');
echo "Date et heure de départ: ", $presentTime->format('M d Y H:i ');

echo "</br>";

$destinationTime = new DateTime('1986-03-26, 08:01 PM');
echo "Date et heure de déstination: ", $destinationTime->format('M d Y H:i');

echo "</br>";

$interval = $destinationTime->diff($presentTime);
echo $interval->format('%Y years, %M month, %D days, %H:%M');

