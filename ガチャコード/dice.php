<?php

// "nDn"���������������q
function dice_mono($s) {
  //
  list($num, $dice) = explode('d', $s);
//var_dump($num);
//var_dump($dice);
  //
  $ret = 0;
  for($i = 0; $i < $num; $i ++) {
    $ret += mt_rand(1, $dice);
  }
  //
  return $ret;
}

function dice($s) {
  $parts = explode('+', $s);
  $ret = 0;
  foreach($parts as $p) {
    $p = strtolower($p);
    if (false !== strpos($p, 'd')) {
      // �_�C�X��U��
      $ret += dice_mono($p);
    } else {
      // (���l���낤����)���ڑ���
      $ret += $p;
    }
  }
  return $ret;
}

// �u�U�ʃ_�C�X���Q��v
$i = dice('2d6');
var_dump($i);

//
$i = dice('2D6+2d8');
var_dump($i);

//
$i = dice('1d4+1d6+1d8');
var_dump($i);

//
$i = dice('2D6+3');
var_dump($i);

//
$i = dice('2D6-3');
var_dump($i);
