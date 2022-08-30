<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <script src="./questions.js" defer></script>
    <title>問題<?php echo $id; ?> | Quiz!</title>
</head>
<body>
    <div id="main">
        <h1>Quiz!</h1>
        <form action="question.php" method="get">
          <div>
            <label for="id">質問番号</label>
            <input type="text" id="question_id" name="id">
          </div>
          <input type="submit" value="送信">
        </form>
        <div class="section">
            <h2>問題<?php echo $id; ?></h2>
            <p><?php echo $question; ?></p>

            <h3>選択肢</h3>
            <ol class="answers" data-id="question<?php echo $id; ?>">
                <?php foreach($answers as $key => $value): ?>
                    <li data-answer="<?php echo $key; ?>"><?php echo $value; ?></li>
                <?php endforeach; ?>
            </ol>
        </div>

        <div id="section-correct-answer" class="section">
            <h2>答え</h2>
            <p>
                <span id="correct-answer"><?php echo $collectAnswer; ?>.<?php echo $collectAnswerValue; ?></span></br>
                <?php echo $explanation; ?>
            </p>
        </div>
        <div>
          <form action="answer.php" method="POST">
            <label for="id">ID:</label><br>
            <input type="text" id="id-input" name="id"><br>
            <label for="answer">選んだ答え:</label><br>
            <input type="text" id="answer-input" name="selectedAnswer"><br>
            <p><input type="submit" value="送信"></p>
          </form>
        </div>
        <div class="section">
            <a href="./index.html">戻る</a>
        </div>
    </div>
</body>
</html>