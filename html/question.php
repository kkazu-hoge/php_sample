<?php

require_once __DIR__."/../lib/functions.php";

// foreach (getallheaders() as $name => $value) {
//   echo "$name: $value\n";
// }
// echo var_dump($_REQUEST);
#送信内容のバリデーション(idがセットされている、数値である、番号が1~6の範囲である)
$qNo_min =1;
$qNo_max =6;
if (isset($_GET["id"]) && is_numeric($_GET["id"]) && ($qNo_min <= $_GET["id"]) && ($_GET["id"] <= $qNo_max)) {
  $id = escape($_GET["id"]);
} else {
  $id = "1";
}

$data = getFormattedData(fetchById($id));
// $data = null;
#$dataがなければ404ページを表示
if ($data) {
  $question = $data["question"];
  $answers = $data["answers"];
  $collectAnswer = $data["collectAnswer"];
  $collectAnswerValue = $answers[$collectAnswer];
  $explanation = $data["explanation"];

  include __DIR__.'/../template/question.tpl.php';
} else{
  error404();
  include __DIR__.'/../template/404.tpl.php';
}