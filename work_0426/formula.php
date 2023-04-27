<?php

// formula.phpというファイルを作り、 class formulaを作成し下記を出力してください。
// 足し算を出力する関数、additionを作成し出力してください。
// 引き算を出力する関数、minusを作成し出力してください

// output.phpというファイルを作り、下記を行ってください。
// require_onceでformula.phpを読み込んで、下記を出力してください。
// ５＋５を出力
// ７－１を出力
class formula {
    function addition($number1,$number2){
        $add_result = "$number1 + $number2";
       echo $add_result;
    }
    function minus($number1,$number2){
        $minus_result = "$number1 - $number2";
        echo $minus_result;
    }
}

?>
