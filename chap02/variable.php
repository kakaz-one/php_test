<?php
$name = "hello";
$$name = "world";

// 上記は以下と同等
$hello = "world";

echo $name; //"hello" が出力される
echo $hello; // "world" が出力される
echo $$name; // "world" が出力される