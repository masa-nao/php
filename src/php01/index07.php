<?php
// 【関数】
// 引数と戻り値あり
function outputNumber($a)
{
  echo "引数の値は" . $a . "です<br>";
  return;
  // 返す値がない場合、return は省略可能
}

outputNumber(2);


// 引数と戻り値なし
function outputHello()
{
  echo "Hello World!<br>";
}

outputHello();


// 引数（複数）と戻り値あり
function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

$total = text(2, 4);
echo $total . "<br>";


// Q. 関数を定義して、結果がが以下のようになるコードを記述しましょう。
// 5
function outputVersion($v)
{
  return $v;
}

$version = outputVersion(5);
echo $version . "<br>";


// Q. 引数に $score1、$score2、$score3 を持ち、合計点が 210 より大きい時「合計点は ○○ なので合格です」、
// そうではなかったら「合計点は OO なので不合格です」と表示する関数を作りなさい。
function addScores($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;

  if ($total > 210) {
    echo "合計点は{$total}なので合格です";
  } else {
    echo "合計点は{$total}なので不合格です";
  }
}

$exam = addScores(72, 86, 63);
echo $exam . "<br>";


// Q. 三角形・四角形・台形の面積を求める関数を定義して、面積を求めてみましょう。
function getTriangleArea($width, $height)
{
  $area = $width * $height / 2;
  return $area;
}

function getSquareArea($width, $height)
{
  $area = $width * $height;
  return $area;
}

function getTrapezoidArea($upper_line, $rower_line, $height)
{
  $area = ($upper_line + $rower_line) * $height / 2;
  return $area;
}

$triangle = getTriangleArea(3, 8);
$square = getSquareArea(5, 7);
$trapezoid = getTrapezoidArea(8, 6 ,3);

echo $triangle . "<br>";
echo $square . "<br>";
echo $trapezoid;