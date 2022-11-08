<?php
$url = "https://enkiduglobal.org/wp-admin/admin-ajax.php";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,"action=wpsd_donation&name=Mohammed+Ali&email=mmaa58027%40gmail.com&amount=20&donation_for=Donate&currency=GBP&idempotency=cGpIdEsu&security=1b0fd5c8e6");
$res = curl_exec($ch);
echo json_decode($res);
