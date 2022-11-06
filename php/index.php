<?php
$vendingItems = ['Coffe' => 40, 'Tea' => 80];
$wallet = 0;
$selectedItemValue = 0;
$selectedItemName = 0;

echo "[1] Coffe" . PHP_EOL;
echo "[2] Tea" . PHP_EOL;

    $input1 = (int) readline('Choose: ');
    if ($input1 == 1){
        $selectedItemValue = $vendingItems['Coffe'];
        $selectedItemName = key($vendingItems);

    }

    if ($input1 == 2){
        $selectedItemValue = $vendingItems['Tea'];
    }

    echo 'You choose ' . $selectedItemName . ' ' . PHP_EOL;





/*$remainder = $wallet - $selectedItemValue;*/
$coins = [
    200 => 25,
    100 => 50,
    50 => 30,
    20 => 100,
    10 => 150,
    5 => 200,
    1 => 250
];
$times = 0;
$payout = [];
/*foreach ($coins as $coin => $val){
     $times = intdiv($remainder, $coin);
     $remainder -= $coin * $times;
     $payout[] += $coin * $times;
}*/
/*$remove = array(0);
$result = array_diff($payout, $remove);*/

while ($wallet <= $selectedItemValue){
    echo "Insert coins {$selectedItemValue} to buy it." . PHP_EOL;
    echo 'You can Insert only coins from list' . PHP_EOL;
    echo "[1] 1 coin" . PHP_EOL;
    echo "[2] 5 coins" . PHP_EOL;
    echo "[3] 10 coins" . PHP_EOL;
    echo "[4] 20 coins" . PHP_EOL;
    echo "[5] 50 coins" . PHP_EOL;
    echo "[6] 100 coins" . PHP_EOL;
    echo "[7] 200 coins" . PHP_EOL;
    $input = (int) readline('Insert coins: ');
    if ($input == 1){
        $wallet += 1;
    }
    if ($input == 2){
        $wallet += 5;
    }
    if ($input == 3){
        $wallet += 10;
    }
    if ($input == 4){
        $wallet += 20;
    }
    if ($input == 5){
        $wallet += 50;
    }
    if ($input == 6){
        $wallet += 100;
    }
    if ($input == 7){
        $wallet += 200;
    }
    $remainder = $wallet - $selectedItemValue;
    foreach ($coins as $coin => $val){
        $times = intdiv($remainder, $coin);
        $remainder -= $coin * $times;
        $payout[] += $coin * $times;
    }
    $remove = array(0);
    $result = array_diff($payout, $remove);

    echo "Thank you for purchase" . PHP_EOL;
    echo 'Coins left- ';
    foreach ($result as $res){
        echo $res . ' coins ';
    }

}






