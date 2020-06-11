<?php

// secret: uddKqWBEFYOd2Ifa
//ID: 971770473

$sum = $_POST['addbalance'];

require_once('cpayeer.php');
$accountNumber = 'P1021808706';
$apiId = '971770473';
$apiKey = 'uddKqWBEFYOd2Ifa';
$payeer = new CPayeer($accountNumber, $apiId, $apiKey);
if ($payeer->isAuth())
{
	$arTransfer = $payeer->transfer(array(
		'curIn' => 'USD',
		'sum' => $_POST['addbalance'],
		'curOut' => 'USD',
        'to' => 'anya.iwanova2000@gmail.com',
		'comment' => 'test'		
	));
	if (empty($arTransfer['errors']))
	{
		$_SESSION['addmsg'] = 'Money transfer completed successfully, amount:  $_POST[addbalance], transaction: $arTransfer[historyId]';
		
	}
	else
	{
		//$_SESSION['addmsg'] = 'Transaction completed in error, please check your account';
		//var_dump($arTransfer['errors']);

	}
}
else
{
	$_SESSION['addmsg'] = 'Transaction cannot be completed because you are not logged in.';
}
?>