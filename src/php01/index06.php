<?php
// 【for文】
for ($i = 0; $i < 4; $i++) {
  echo $i . "\n";
}
echo "<br>";

// Q. for 文を使用して、結果が以下のようになるコードを記述しましょう。
// 2
// 4
// 6
// 8
// 10
for ($i = 1; $i <= 5; $i++) {
  echo $i * 2 . "\n";
}
echo "<br>";


// while文
$i = 0;

while ($i < 3) {
  echo "i = " . $i . "<br>";
  $i++;
}

// Q. while 文を使用して、結果が以下のようになるコードを記述しましょう。
// 1
// 2
// 3
// ...
// 19
// 20
$count = 0;

while ($count < 20) {
  $count++;
  echo $count . "\n";
}
echo "<br>";


$i = 0;

while ($i < 10) {
  if ($i == 5) {
    break;
    // $i が5の時、ループから抜ける
  }
  echo $i . "\n";
  $i++;
}
echo "<br>";


$i = 0;

while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
    // $i が5のとき、$i に +1する処理をし、その後の処理をスキップする
  }
  echo $i . "\n";
  $i++;
}
echo "<br>";

// Q. while 文を使用して、結果が以下のようになるコードを記述しましょう。
// 1
// 2
// 4
// 5
// 7
// 8
// 10
// 11
// 13
// 14
// 16
// 17
// 19
// ループは、$count が 100 まで行うような条件式としてください
$count = 0;

while ($count <= 100) {
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . "\n";
  $count++;
}
echo "<br>";


// do...while文
$i = 0;

do {
  echo $i . "\n";
  $i++;
} while ($i < 5);
echo "<br>";

// Q. do...while 文を使用して、結果が以下のようになるコードを記述しましょう。
// num = 0
// num = 1
// num = 2
$num = 0;

do {
  echo "num = " . $num . "<br>";
  $num++;
} while ($num < 3);


// 応用問題
// Q. FizzBuzz問題を解いてみよう
// 今回は、1 から 50 までの数で FizzBuzz ゲームを行います。 for文、if文を使用して FizzBuzz ゲームを完成させましょう
// 3で割り切れる数	Fizz
// 5で割り切れる数	Buzz
// 3でも5でも割り切れる数	FizzBuzz
// それ以外の数	数字
$fizz = "Fizz";
$buzz = "Buzz";
$fizz_buzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 === 0) {
    echo $fizz_buzz . "<br>";
  } elseif ($i % 3 === 0) {
    echo $fizz . "\n";
  } elseif ($i % 5 === 0) {
    echo $buzz . "\n";
  } else {
    echo $i . "\n";
  }
}
  echo "<br>";

// Q. 二重ループを使用して、結果が以下のようになるコードを記述しましょう。
// ●●●●●
// ●●●●●
// ●●●●●
// ●●●●●
// ●●●●●
for ($i = 1; $i <= 5; $i++) {
  for ($j = 1; $j <= 5; $j++) {
    echo "●";
  }
  echo "<br>";
}