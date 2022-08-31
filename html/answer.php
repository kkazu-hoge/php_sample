<?php

  require_once __DIR__."/../lib/functions.php";

  $id = $_POST["id"];
  var_dump($id);
  $selectedAnswer = strtoupper($_POST["selectedAnswer"]);
  var_dump($selectedAnswer);
  $data = getFormattedData(fetchById($id));
  var_dump($data);
  // $data = null;
  #$dataがなければ404ページを表示

  // echo "$selectedAnswer:".$selectedAnswer;
  // echo "$question:".$question = $data["question"];
  // echo $collectAnswer = $data["collectAnswer"];
  // var_dump($collectAnswer === $selectedAnswer);
  // $collectAnswerValue = $data["answers"][$collectAnswer];
