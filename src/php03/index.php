<?php

require_once("config/status_codes.php");

$random_indexes = array_rand($status_codes, 4);
// 多次元連想配列 $status_codes からランダムに4つのキー（インデックス）を取得

foreach ($random_indexes as $index) {
  $options[] = $status_codes[$index];
  // ランダムに選ばれた4つのキーを使って、対応する連想配列を新しい配列 $options に格納
}

$question = $options[mt_rand(0, 3)];
// 正解の選択肢として、配列のうちの1つをランダムで取得する（正解のデータ）
// $question は「多次元配列$options からランダムに取得した1つ（正解）の連想配列」といえる
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">
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
    <div class="quiz__content">
      <div class="question">
        <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
        <p class="question__text">
          <?php echo $question["description"] ?>
        </p>
      </div>
      <form class="quiz-form" action="result.php" method="post">
        <input type="hidden" name="answer_code" value="<?php echo $question["code"] ?>">
        <!-- 正解のステータスコードをフォームに hidden で埋め込み、result.php 側での答え合わせに使う -->
        <div class="quiz_form__item">
          <?php foreach ($options as $option): ?>
            <!-- $options（4つの選択肢）から1つずつ取り出し、各ステータスコードを表示用に使っている -->
          <div class="quiz-form__group">
            <input class="quiz-form__radio" id="<?php echo $option["code"] ?>"
              type="radio" name="option" value="<?php echo $option["code"] ?>">
            <label class="quiz-form__label" for="<?php echo $option["code"] ?>">
              <?php echo $option["code"] ?>
            </label>
            <!-- inputタグのid属性と labelタグのfor属性の値はセット -->
            <!-- value属性は実際のデータ、タグ間の記述は表示用のデータ -->
          </div>
          <?php endforeach; ?>
        </div>
        <div class="quiz-form__button">
          <button class="quiz-form__button-submit" type="submit">
            回答
          </button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>