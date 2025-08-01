<?php
$data[0] = '山田';
$data[1] = '掛谷';
$data[2] = '日尾';
$data[3] = '本多';
$data[1] = '薄井'; //1番の要素を置き換え
$data[] = '矢吹'; //末尾に要素を追加
print $data[4]; //結果：矢吹
print_r($data);