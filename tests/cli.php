<?php

$dir = dirname( dirname(__FILE__) );

include $dir.'/lib/IpLocation.class.php';

$data_path = $dir.'/data/qqwry_all.dat';

$ip = new Org\Net\IpLocation($data_path);

$arr = $ip->getlocation("58.16.27.0");

$country = mb_convert_encoding($arr["country"], "UTF-8","GBK");
$area 	 = mb_convert_encoding($arr["area"], "UTF-8","GBK");

print_r($country);
echo "\r\n";
print_r($area);
echo "\r\n";
