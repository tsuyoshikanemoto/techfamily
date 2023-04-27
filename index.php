<?php

/**
 * 現在時刻が
 * 午前($ampm が 'am')だった場合は「おはようございます」、
 * 午後('pm')だった場合は「こんにちは」
 * と返すプログラムを作成してください。
 */


$now = time();
$ampm = date('a', $now);

if($ampm === 'am'){
    echo 'おはようございます';
}else{
    echo 'こんにちは';
}

// /Q1 配列の出力
echo '<br><br>------Q1------<br><br>';
/*
以下の変数 $arr 内の[サッカー]を出力してください
*/
$arr = ['野球', 'サッカー', 'テニス'];

echo $arr[1];

//Q2 連想配列の出力
echo '<br><br>------Q2------<br><br>';
/*
以下の変数$array 内の[blue]を表示してください
*/
$array = [
    'value' => 100,
    'color' => 'blue',
    'text' => 'example',
];

echo $array['color'];

//Q3 二次元配列の出力
echo '<br><br>------Q3------<br><br>';
/*
以下の変数 $ary から [Kyoto]を出力してください
*/
$ary = [
    ['Tokyo', 'Osaka', 'Kyoto'],
    ['New York', 'LasVegas', 'LosAngeles'],
    ['Roma', 'Venezia', 'Firenze']
];

echo $ary[0][2];

//Q4 多次元配列の出力
echo '<br><br>------Q4------<br><br>';
/*
以下の変数 $values 内から[falcon]を出力してください
*/
$values = [
    'birds' => ['hawk', 'owl', 'falcon'],
    'curriculum' => ['html', 'php', 'laravel'],
    'target' => ['1か月', '2か月', '5か月']
];

echo $values['birds'][2];

echo '<br><br>------Q5------<br><br>';
/*
foreach文を使用し、次の配列内（$team）の要素を取得し、全員について
●番:ポジション:名前
の形式で出力してください
example.
4番:セカンド:島田
*/
$team = [
    [
    '名前' => '松井',
    '背番号' => '4',
    'ポジション' => 'FW'
    ],
    [
    '名前' => '金本',
    '背番号' => '2',
    'ポジション' => 'CB',
    ],
    [
    '名前' => '塚田',
    '背番号' => '1',
    'ポジション' => 'MF',
    ],
];

foreach($team as $key =>$value){
    echo $value['背番号']. ':' .$value['名前'] .':'. $value['ポジション'] ;
    
    // print_r($value);

}
