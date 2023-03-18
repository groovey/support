<?php

require "vendor/autoload.php";

$rand = random_array(['one', 'two' , 'three']);

print string_mask($rand);

use Groovey\Support\Test;

$test = new Test();
$test->hello();
