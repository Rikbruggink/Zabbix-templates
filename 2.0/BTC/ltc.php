<?php
function GetJsonFeed($json_url)
{
    $feed = file_get_contents($json_url);
    return json_decode($feed, true);
}
$LTC_BTC = GetJsonFeed("https://btc-e.com/api/2/ltc_btc/ticker");
$LTC_BTC_HIGH = $LTC_BTC["ticker"]["high"];
$LTC_BTC_LOW = $LTC_BTC["ticker"]["low"];
$LTC_BTC_AVG = $LTC_BTC["ticker"]["avg"];
$LTC_BTC_VOL = $LTC_BTC["ticker"]["vol"];
$LTC_BTC_VOL_CUR = $LTC_BTC["ticker"]["vol_cur"];
$LTC_BTC_LAST = $LTC_BTC["ticker"]["last"];
$LTC_BTC_BUY = $LTC_BTC["ticker"]["buy"];
$LTC_BTC_SELL = $LTC_BTC["ticker"]["sell"];

$LTC_USD = GetJsonFeed("https://btc-e.com/api/2/ltc_usd/ticker");
$LTC_USD_HIGH = $LTC_USD["ticker"]["high"];
$LTC_USD_LOW = $LTC_USD["ticker"]["low"];
$LTC_USD_AVG = $LTC_USD["ticker"]["avg"];
$LTC_USD_VOL = $LTC_USD["ticker"]["vol"];
$LTC_USD_VOL_CUR = $LTC_USD["ticker"]["vol_cur"];
$LTC_USD_LAST = $LTC_USD["ticker"]["last"];
$LTC_USD_BUY = $LTC_USD["ticker"]["buy"];
$LTC_USD_SELL = $LTC_USD["ticker"]["sell"];
$BTC_USD = GetJsonFeed("https://btc-e.com/api/2/btc_usd/ticker");
$BTC_USD_HIGH = $BTC_USD["ticker"]["high"];
$BTC_USD_LOW = $BTC_USD["ticker"]["low"];
$BTC_USD_AVG = $BTC_USD["ticker"]["avg"];
$BTC_USD_VOL = $BTC_USD["ticker"]["vol"];
$BTC_USD_VOL_CUR = $BTC_USD["ticker"]["vol_cur"];
$BTC_USD_LAST = $BTC_USD["ticker"]["last"];
$BTC_USD_BUY = $BTC_USD["ticker"]["buy"];
$BTC_USD_SELL = $BTC_USD["ticker"]["sell"];

//print_r($a)
print_r($LTC_BTC);
?>

