<?php

require_once("config/status_codes.php");

$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);
// index.php からのデータ取得（POSTメソッド）の際にXSS対策
// $answer_code は正解のデータ、$option は選択されたデータ

if (!$option) {
  header("Location: index.php");
  // 未選択状態で回答した場合（データが正しく送信されなかった時）のリダイレクト処理
}

foreach ($status_codes as $status_code) {
  // 送信された回答のデータから配列を探す
  if ($status_code["code"] === $answer_code) {
    $code = $status_code["code"];
    $meaning = $status_code["meaning"];
    $description = $status_code["description"];
    // 回答コードと配列の値、データ型が一致した場合のみ、必要となるデータの取得
  }
}

$result = $option === $code;
// 選択したコード（数値）と正解のコード（数値）が完全一致した場合に result とし、正誤判定に用いる
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php03">
        Status Code Quiz
      </a>
    </div>
  </header>

  <main>
    <div class="result__content">
      <div class="result">
        <?php if ($result): ?>
        <h2 class="result__text--correct">正解</h2>
        <?php else: ?>
        <h2 class="result__text--incorrect">不正解</h2>
        <?php endif; ?>
      </div>
      <div class="answer-table">
        <table class="answer-table__inner">
          <tr class="answer-table__row">
            <th class="answer-table__header">ステータスコード</th>
            <td class="answer-table__text">
              <?php echo $code ?>
            </td>
          </tr>
          <tr class="answer-table__row">
            <th class="answer-table__header">意味</th>
            <td class="answer-table__text">
              <?php echo $meaning ?>
            </td>
          </tr>
          <tr class="answer-table__row">
            <th class="answer-table__header">説明</th>
            <td class="answer-table__text">
              <?php echo $description ?>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </main>
</body>

</html>