<?php
// 【配列と連想配列】
// 配列
$people = array("Taro", "Jiro", "Saburo");

echo "<pre>";
var_dump($people);
echo "</pre>";

echo $people[0];


// 連想配列
$people = array(
  "person1" => "Taro",
  "person2" => "Jiro",
  "person3" => "Saburo"
);

echo "<pre>";
var_dump($people);
echo "</pre>";


$people = [
  "person1" => "Taro",
  "person2" => "Jiro",
  "person3" => "Saburo"
];

echo $people["person2"] . "<br>";


// 多次元配列
$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];

echo $people[2]["first_name"] . "<br>";


// foreach文
$people = array("Taro", "Jiro", "Saburo");

foreach ($people as $person) {
  echo $person . "<br>";
}


$people = [
  "person1" => "Taro",
  "person2" => "Jiro",
  "person3" => "Saburo"
];

foreach ($people as $person => $name) {
  echo $person . "は" . $name . "です<br>";
}

// Q. foreach文をつかって多次元配列の値をすべて出力してみましょう。
// Taro(25歳men)
// Jiro(20歳men)
// Hanako(16歳women)
$people = [
  [
    "name" => "Taro",
    "age" => 25,
    "gender" => "men"
  ],
  [
    "name" => "JIro",
    "age" => 20,
    "gender" => "men"
  ],
  [
    "name" => "Hanako",
    "age" => 16,
    "gender" => "women"
  ]
];

foreach ($people as $person) {
  $name = $person["name"];
  $age = $person["age"];
  $gender = $person["gender"];
  echo $name . " (" . $age . "歳 " . $gender . ")<br>";
}