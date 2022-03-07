<?php

echo 'kod php';

echo '<br />';
echo '<br />';

$a = 2.5;
$b = 6;

if($a>$b) {
    echo "$a is greater than $b";
} else  {
    echo "$b is greater than $a";
}

for($i = 0; $i <= 6; $i++) {
    echo '<br />';
    echo $i++;
}

echo '<br />';
echo '<br />';

switch ($b) {
    case 2.5: echo "$a is b";
    case 6: echo "$b is b";
}

echo '<br />';
echo '<br />';

if($b % 2 == 0)
    echo "$b is even";
else
    echo "$b is odd";


