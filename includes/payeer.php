<?php 

// secret: uddKqWBEFYOd2Ifa
//ID: 971770473




$balance = $_POST['balance'];

require_once('cpayeer.php');
$accountNumber = 'P1021808706';
$apiId = '971770473';
$apiKey = 'uddKqWBEFYOd2Ifa';
$payeer = new CPayeer($accountNumber, $apiId, $apiKey);
if ($payeer->isAuth())
{
	$balance = $payeer->getBalance();
    // $balance["balance"]["USD"]["BUDGET"];
}
else
{
	echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>';
}



?>