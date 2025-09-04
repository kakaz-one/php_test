<?php
// 十分な精度を指定
$add = bcadd('0.1', '0.7', 2);
$mul = bcmul($add, '10', 1);
print floor((float)$mul);

// または通常の算術演算を使用
$result = floor((0.1 + 0.7) * 10);