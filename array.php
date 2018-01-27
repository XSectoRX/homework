<?php

$arr = array(
    array(
        "calldate" => "01-07-2017 12:48:32",
        "src" => 22,
        "dst" => 4957850000,
        "billsec" => 250
    ),
    array(
        "calldate" => "01-07-2017 12:48:32",
        "src" => 23,
        "dst" => 4957850012,
        "billsec" => 160
    ),
    array(
        "calldate" => "01-07-2017 12:48:32",
        "src" => 24,
        "dst" => 4957853500,
        "billsec" => 16
    )
);

$billsec = array();

foreach ($arr as $value){
    foreach ($value as $key => $element){
        if ($key == "billsec") {
            $billsec[] = $element;
        }
    }
}
$dst = array_column($arr, 'dst');
$sum_dst = array_sum($dst);
$sum_billsec = array_sum($billsec);

echo $sum_billsec . "\n";
echo $sum_dst . "\n";
