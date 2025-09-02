<?php
print '108' + '15';      // 123 (正常)
print '108' + '1.5XYZ';  // 109.5 + Warning (1.5のみ使用、XYZは無視)
print '108' + 'XYZ10';   // Fatal Error (先頭が非数値)
print '108' + '1.5XYZ';  // この行は実行されない（上でエラー終了）
// 以下も実行されない
print '108' + '1.5E1';
print '108' + '0b11';
print '108' + '010';
print '108' + '0x1A';
?>