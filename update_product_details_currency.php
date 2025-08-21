<?php
$filename = 'product-details.php';
$content = file_get_contents($filename);
$new_content = str_replace('$', 'kwa ', $content);
file_put_contents($filename, $new_content);
echo "Updated product-details.php with kwa currency\n";
?>
