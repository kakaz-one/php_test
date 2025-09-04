<?php
$add = bcadd('0.1', '0.7', 1);
$mul = bcmul($add, '10', 1);
print floor($mul); //結果：8 またエラーメッセージ（PHP Warning:  Module "bcmath" is already loaded in Unknown on line）が表示されているが、結果は8になる
?>