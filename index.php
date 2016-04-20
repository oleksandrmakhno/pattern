<?php

echo '<h1>pattern list</h1>';

$res = scandir('.');
//var_dump($res);
$ignoreList = [
    'index.php',
    '.idea',
];
$res = array_diff($res, $ignoreList);
foreach ($res as $item) {
    echo "<a href='$item'>$item</a><br />";
}
