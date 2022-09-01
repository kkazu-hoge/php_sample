<?php

  require_once __DIR__."/../lib/functions.php";

  $id = $_POST["id"];
  // var_dump($id);
  $selectedAnswer = strtoupper($_POST["selectedAnswer"]);
  // var_dump($selectedAnswer);
  $data = getFormattedData(fetchById($id));
  // var_dump($data);
  // $data = null;
  #$dataがなければ404ページを表示

  echo "selectedAnswer:".$selectedAnswer."\n";
  echo "question:".$question = $data["question"]."\n";
  $collectAnswer = $data["collectAnswer"]."\n";
  $result = $collectAnswer === $selectedAnswer;
  // $collectAnswerValue = $data["answers"][$collectAnswer];
