<?php

require "vendor/autoload.php";

$rand = random_array(['one', 'two' , 'three']);

print string_mask($rand);
