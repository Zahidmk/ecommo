<?php
$filename = 'wishlist.php';
$content = file_get_contents($filename);
$new_content = str_replace('$', 'kwa ', $content);
file_put_contents($filename, $new_content);
echo "Updated wishlist.php with kwa currency\n";
?>
