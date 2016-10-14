<?php
header('Content-type:text/html; charset="utf-8"');

/*
API:
	getData.php

		����
		key : �ڸ������Ļ��   a24a1b2d25d1bc36f245483570a567f0
		info:���͵���Ϣ
*/
$key ='a24a1b2d25d1bc36f245483570a567f0';
$info = $_GET['info'];
$userid='73c9d85170bd189b';
//$info = '���';

$url = 'http://www.tuling123.com/openapi/api?key=' . $key.'&info='.$info.'&userid='.$userid;

$content = file_get_contents($url);
// $content = iconv('gbk', 'utf-8', $content);

echo $content;

?>