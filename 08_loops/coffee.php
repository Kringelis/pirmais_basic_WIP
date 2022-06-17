<?php


$coins = [  //monētu masīvs, kurā ir monētu vērtība un skaits
    1 => 10,
    2 => 10,
    5 => 10,
    10 => 10,
    20 => 10,
    50 => 10,
    100 => 10,
    200 => 10,
    500 => 10
];
$products = [   //produktu masīvs, kurā ir produkta nosaukums un cena
    'Coffee' => 75,
    'Choco' => 60,
    'Espresso' => 80,
    'Sugar' => 500,
];
foreach ($products as $product => $price) {    // foreach cikls, kurā tiek izvadīts produkts un tā cena
    echo $product . ' - ' . $price . 'c' . PHP_EOL;
}

foreach ($coins as $coin => $amount) {   // foreach cikls, kurā tiek izvadītas monētas un to daudzums
    echo "$coin ($amount) | ";
}
echo PHP_EOL;
$insertedAmount = 0;  // sakumā nav ievietota neviena monēta vai dota komanda pirkt


while (true) {
    $inserted = readline('Insert coin:'); //prompt, kurā tiek jautāts, kādu monētu ievietot
    var_dump($inserted);
    //$change = $inserted - $price; //atlikums, kur tiek no ievietoto monētu vērtibas atņemta produkta cena

    if ($inserted === 'buy') {   // if, kurā tiek atrunāts nosacījums, kur tiek pasniegts produkts un atlikums
        echo 'Thanks!' ;
        echo PHP_EOL;
    }


    if (!isset($coins[$inserted])) {  // if, kurā tiek pārbaudīts, vai monēta atrodas masīvā(makā)
        echo 'Invalid coin';
        exit;

    }
    if ($coins[$inserted] <= 0) {  //if, kurā tiek pārbaudits vai makā vēl atrodas ieliktā monēta
        echo 'NO COIN';
        exit;
    }
    $insertedCoin = (int)$inserted;

    $coins[$inserted] -= 1;
    $insertedAmount += $inserted;
    $change = $inserted - $price;
    echo 'INSERTED COINS: ' . $insertedAmount;
    echo PHP_EOL;
    echo 'Total amount:';
    echo PHP_EOL;

    foreach ($coins as $coin => $amount) {
        echo "$coin ($amount) | ";
    }
    switch ($products) {
        case 'coffee';
            if ($insertedAmount >= $products->$price['coffee'] && $inserted === 'coffee') {
                echo 'One coffee coming up!';
            }
            break;
        case 'choco';
            if ($insertedAmount >= 60 && $inserted === 'choco') {
                echo 'One hot choco coming up!';
                echo PHP_EOL;
                echo 'Here is your change' . ' ' . $change;
            }
            break;
            case 'espresso';
            if($insertedAmount >= 80 && $inserted === 'espresso'){
                echo 'One espresso coming up!';
                echo PHP_EOL;
                echo 'Here is your change' . ' ' . $change;
            }
            break;
            case 'sugar';
            if($insertedAmount >= 500 && $inserted === 'sugar'){
                echo 'Gold sugar coming up!';
                echo PHP_EOL;
                echo 'Here is your change' . ' ' . $change;
            }
    }
}



