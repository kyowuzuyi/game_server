<?php
// �u��v�����
$seed = 'test'; // �_���ȗ�
$seed = time(); // �_���ȗ�
$seed = microtime(true); // �_���ȗ�
$seed = random_bytes(128); // �悢��(PHP7�ȍ~)

// token�����
$token = md5($seed);
echo $token , "\n";

$token = sha1($seed);
echo $token , "\n";

$token = hash('sha512', $seed);
echo $token , "\n";

// �{��
$token = trim(`uuidgen -r`);
echo $token , "\n";

