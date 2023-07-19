<?php

// 图片地址
$imgPath = '/image/1.png';

// 获取 图片尺寸【index 0 => 宽 1 => 高】
// $imageSize['mime'] = image/png   => 对应 图片 mime 类型
$imageSize = getimagesize($imgPath);

$imgData = fread(fopen($imgPath,'r'),filesize($imgPath));

// 将 转为 base64 格式 的 图片 分片
$base64Img = 'data:' . $imageSize['mime'] . ';base64,' . chunk_split(base64_encode($imgData));

// 正则匹配 图片 格式
preg_match('/image\/(\w+)/',$base64Img,$res);
print_r($res);