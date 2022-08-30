<?php
  function fetchById ($id) {
    #ファイルオープン
    $handler = fopen(__DIR__."/data.csv", "r");
    #データ取得
    $question = [];
    while($row = fgetcsv($handler)){
      if(isDataRow($row)){
        if ($row[0] === $id){
          $question = $row;
          break;
        }
      }
    }
    #ファイルクローズ
    fclose($handler);

    return $question;
  }

  function isDataRow(array $row)
  {
      // データの項目数が足りているか判定
      if (count($row) !== 8) {
          return false;
      }
  
      // データの項目の中身がすべて埋まっているか確認する
      foreach ($row as $value) {
          // 項目の値が空か判定
          if (empty($value)) {
              return false;
          }
      }
  
      // idの項目が数字ではない場合は無視する
      if (!is_numeric($row[0])) {
          return false;
      }
  
      // 正しい答えはa,b,c,dのどれか
      $correctAnswer = strtoupper($row[6]);
      $availableAnswers = ['A', 'B', 'C', 'D'];
      if (!in_array($correctAnswer, $availableAnswers)) {
          return false;
      }
  
      // すべてチェックが問題なければtrue
      return true;
  }

  function getFormattedData($data){
    $formattedData = [
      "id" => escape($data[0]),
      "question" => escape($data[1], true),
      "answers" => [
        "A" => escape($data[2]),
        "B" => escape($data[3]),
        "C" => escape($data[4]),
        "D" => escape($data[5]),
      ],
      "collectAnswer" => escape(strtoupper($data[6])),
      "explanation" => escape($data[7], true)
    ];
    return $formattedData;
  }

  function escape($data_column, $nl2br = false){
    
    $escapeData = htmlspecialchars($data_column);

    if ($nl2br === true){
      $escapeData = nl2br($escapeData);
    }

    return $escapeData;
  }

#404エラーの関数
 function error404()
 {
     // HTTPレスポンスのヘッダを404にする
     header('HTTP/1.1 404 Not Found');
 
     // レスポンスの種類を指定する
     header('Content-Type: text/html; charset=UTF-8');
 
     // 404ページを出力
     loadTemplate('404');
 
     // PHPスクリプトを終了(0は正常に終了)
     exit(0);
 }





?>