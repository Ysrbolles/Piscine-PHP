#!/usr/bin/php
<?php
date_default_timezone_set('Europe/paris');
$fd = fopen("/var/run/utmpx", "r");
while ($ret = fread($fd, 628))
{
	$unpa = unpack("a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad", $ret);
	if ($unpa["type"] == 7)
		$usr[$unpa["line"]] = array("user" => $unpa["user"], "time" => $unpa["time1"]);
}
ksort($usr);
foreach ($usr as $key => $value)
{
	$tt = sprintf("%s %s  %s\n", $value["user"], $key,date("M j H:i", $value["time"]));
	$tt = preg_filter ("/[^[:print:]]/", "", $tt);
	echo $tt . " \n";
}
?>