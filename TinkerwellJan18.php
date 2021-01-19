<?php
use Carbon\Carbon;

$date = "2021-01-20";
$time = "11:00";
$dt = Carbon::create($date . $time);
$date2 = "2021-01-20";
$time2 = "13:00";
$dt2 = Carbon::create($date2 . $time2);
$length = '10';
$times = "";
for ($i = $dt->timestamp; $i <=$dt2->timestamp; $i+=$length*60) {
	 $times = $times . Carbon::createFromTimestamp($i) . ", ";
}

echo $times . "\n\n";

$carbon_obj = Carbon::createFromFormat('Y-m-d H:i:s' , '2018-01-30 07:11:21','America/Chicago')->timestamp;

echo $carbon_obj;
