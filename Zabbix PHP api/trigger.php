 <?php

// load ZabbixApi
require 'ZabbixApiAbstract.class.php';
require 'ZabbixApi.class.php';

try {

    // connect to Zabbix API
    $api = new ZabbixApi('http://zabbix.mycorp.com/zabbix/api_jsonrpc.php', 'username', 'password');

    // get all events given the conditions
    $events = $api->eventGet(array(	'time_from' => 	strtotime('-1 hour'),
					'output' => 'extend',
					'acknowledged' => 0,
					'selectHosts' => 'extend'));

    $output2 = '';
    foreach($events as $event){
	$host = $event->hosts[0];
	if ($host->available != 1) {
		$output = date('d-m-Y H:i', $event->clock) . ' Foutmelding op '. $host->name . ' met foutmelding: "'. $host->error . "\"\n";
		if ($output != $output2) {
		    $output2 = $output;
		    echo $output;
		}
	}
    }

} catch(Exception $e) {

    // Exception in ZabbixApi catched
    echo $e->getMessage();

}
?> 
