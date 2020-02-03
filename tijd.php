<?php
$sec = 0;
$min = 0;
$hour = 0;
$dag = 0;
for($i = 1;$i<count($argv);$i++){
    if(strpos($argv[$i], "s")) {
        $arr = explode("s", $argv[$i], 2);
        $sec = (int)$arr[0];
    }else if(strpos($argv[$i], "m")) {
        $arr = explode("m", $argv[$i], 2);
        $min = (int)$arr[0];
    }else if(strpos($argv[$i], "h")) {
        $arr = explode("h", $argv[$i], 2);
        $hour = (int)$arr[0];
    }else if(strpos($argv[$i], "d")) {
        $arr = explode("d", $argv[$i], 2);
        $dag = (int)$arr[0];
    }
}
$sec += $min * 60;
$sec += ($hour * 60)*60;
$sec += (($dag*24)*60)*60;
echo($sec." seconden");
?>