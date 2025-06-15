<?php
// 【変数と定数】
// 変数
$item = "JavaScript";
$item = "PHP";
echo $item . "<br>";
var_dump($item);
echo "<br>";

// Q. 変数を使用し出力結果が以下のようなコードを記述しましょう
// JavaScript
$item = "JavaScript";
echo $item;
echo "<br>";


// 定数
const FELANGUAGE = "Vue.js";
echo FELANGUAGE;
echo "<br>";


// データ型
$string = "BSC48 - ドリームブースター【巡る星々】<br>";
$number = 20251099;

// Q. 出力結果が以下になるようなコードを記述しましょう
// echo // 20
// echo // こんにちは
$age = 20;
$greet = "こんにちは";

echo $age;
echo "<br>";
echo $greet;
echo "<br>";


// 連結演算子
$name1 = "Sato" . "Taro";
$name2 = "Tanaka";
$last_name = "Yamada";
$first_name = "Saburo";

echo $name1;
echo "<br>";
echo $name2 . "Jiro";
echo "<br>";
echo $last_name . $first_name;
echo "<br>";

// Q. 連結演算子を使用し出力結果が以下のようなコードを記述しましょう
// TanakaJiro
// YamadaSaburo
$name = "Tanaka";
$last_name = "Yamada";
$first_name = "Saburo";

echo $name . "Jiro";
echo "<br>";
echo $last_name . $first_name;