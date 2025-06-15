<?php
// 【if文】
// Q. if 文を利用して結果が以下のようになるコードを記述しましょう
// $aは5です
$a = 5;

if ($a === 5) {
  echo "\$aは5です<br>";
}

// Q. if ~ else 文を使用して、結果が以下のようになるコードを記述しましょう。
// $aは5以外です
$a = 7;

if ($a === 5) {
  echo "\$aは5です<br>";
} else {
  echo "\$aは5以外です<br>";
}

// Q. 変数 a に 7 を代入し、if ~ elseif ~ else 文を使用して、結果が以下のようになるコードを記述しましょう。
// $aは7です
$a = 7;

if ($a === 5) {
  echo "\$aは5です<br>";
} elseif ($a === 7) {
  echo "\$aは7です<br>";
} else {
  echo "\$aは5と7以外です<br>";
}


// switch文
// Q. switch 文を使用して、結果が以下のようになるコードを記述しましょう。
// 三郎です
$people = "Saburo";

switch ($people) {
  case "Taro":
    echo "太郎です";
    break;
  case "Jiro";
    echo "次郎です";
    break;
  case "Saburo";
    echo "三郎です";
    break;
  default:
    echo "誰でもありません";
    break;
}
echo "<br>";


// 三項演算子
// Q. 三項演算子を使用して、結果が以下のようになるコードを記述しましょう。
// TRUE
$a = 7;

$result = ($a === 7) ? "TRUE" : "FALSE";
echo $result;