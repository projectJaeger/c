<?php
$dirs = array_filter(glob('../*'), 'is_dir');
print_r($dirs);
?>