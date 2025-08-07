<?php
var_dump((int) '1530.95'); //結果：int(1530)
var_dump((int) '-1530.95'); //結果：int(-1530)
var_dump((int) '1530.95abc'); //結果：int(1530)
var_dump((int) true); //結果：int(1)
var_dump((string) true); //結果：string(1) "1"
var_dump((int) false); //結果：int(0)
var_dump((array) '108'); //結果：array(1) {[0]=>string(3) "108"}

$x = 1;
var_dump("$x");//結果：string(1) "1"