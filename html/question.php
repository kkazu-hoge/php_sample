<?php

$id = '1';
$question = "HTMLは何の略称？part2";

$answers = [
  'A' => 'HyperTextMakingLanguage',
  'B' => 'HyperTextMarkupLanguage',
  'C' => 'HonmaniTensaitekinaMajidesugoiLanguage',
  'D' => 'そもそも略称ではない',
];

$collectAnswer = 'B';
$collectAnswerValue = $answers[$collectAnswer];
$explanation = 'これが間違えてたら「HTMLとは？」の動画を復習お願いします！';

include __DIR__ . '/../template/question.tpl.php';
