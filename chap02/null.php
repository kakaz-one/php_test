<?php
$n1; //値が代入されていないのでnull
$n2 = null; //明示的にnullを代入

$n2 = "hello"; 
unset($n2); //unset関数で変数の内容を破棄
echo $n2;  // null