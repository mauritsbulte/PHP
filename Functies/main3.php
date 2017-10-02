<?php
$str = "first=tekst&arr[]=foo+bar&arr[]=baz";
parse_str($str);
echo strrev($first);  // value
?>