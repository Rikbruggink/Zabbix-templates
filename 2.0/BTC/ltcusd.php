#!/usr/bin/php
<?php

$command = $argv[1];

$GLOBALS['script'] = basename($argv[0]);
$GLOBALS['ver'] = "1.0";

function help() {
	echo "Help menu for ". $GLOBALS['script'] ."\n";
 
	echo "-h \t print otions menu. \n";
	echo "high \t LTC VS BTC HIGH value.\n";
	echo "low \t LTC VS BTC LOW value.\n";
	echo "avg\t LTC VS BTC AVG value.\n";
	echo "last \t LTC VS BTC LAST value.\n";
	echo "buy \t LTC VS BTC BUY value.\n";
 	echo "sell \t LTC VS BTC SELL value.\n";
 
}// end help

function switch_default() {
	echo "Command not found \n";
	help();
}

function GetJsonFeed($json_url)
{
    $feed = file_get_contents($json_url);
    return json_decode($feed, true);
}
$LTC_BTC = GetJsonFeed("https://btc-e.com/api/2/ltc_usd/ticker");
$LTC_HIGH = $LTC_BTC["ticker"]["high"];
$LTC_LOW = $LTC_BTC["ticker"]["low"];
$LTC_AVG = $LTC_BTC["ticker"]["avg"];
$LTC_LAST = $LTC_BTC["ticker"]["last"];
$LTC_BUY = $LTC_BTC["ticker"]["buy"];
$LTC_SELL = $LTC_BTC["ticker"]["sell"];


if (isset($command)){
switch($command) {
	case "-h" : 
		echo help();
	break;

	case "high" :
		echo $LTC_HIGH;
	break;

	case "low" :
                echo $LTC_LOW;
        break;

	case "avg" :
                echo $LTC_AVG ;
        break;

	case "last" :
                echo $LTC_LAST;
        break;
	case "buy" :
                echo $LTC_BUY;
        break;

	default:
		switch_default();
	break;	
}}
?>

