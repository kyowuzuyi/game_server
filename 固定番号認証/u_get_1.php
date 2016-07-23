<?php

// ヘッダの出力
header("Content-Type: application/json; charset=utf-8");

// uuidを作成
//uuidを使うメリットは毎回ログイン時に、idとpasswordを入力せずに、ログインできる//個人の携帯ゲームなどに向いている

$uuid = strtolower(trim(`uuidgen -r`));

//
$ret = array(
  'status' => 'ok',
  'uuid' => $uuid,
);
echo json_encode($ret);

