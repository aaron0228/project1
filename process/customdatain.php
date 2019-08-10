<?php
$customdata = $_REQUEST;
$customdata1 = "";
foreach ($customdata as $key => $value){
    $customdata2 = "$value";
    $customdata1 = "$customdata1" . " " . "$customdata2";
    $customdata1 = trim($customdata1);
}
$path = __DIR__ . '\customdata.txt';
$dataintxt = "$customdata1" . PHP_EOL;
file_put_contents($path, $dataintxt, FILE_APPEND); 
$changeincustomdata1 = explode(" ", $customdata1);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?= print_r($customdata,true)?>
    <br>
    <?= $customdata1?>
    <br>
    <?= print_r($changeincustomdata1)?>
</body>
</html>