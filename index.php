<?php
curl_setopt($search, CURLOPT_URL, "https://enkiduglobal.org/wp-admin/admin-ajax.php"); 
curl_setopt($search, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($search, CURLOPT_ENCODING , "");
curl_setopt($search, CURLOPT_HTTPHEADER, explode("\n", 'Host: enkiduglobal.org
content-length: 150
sec-ch-ua: "Chromium";v="107", "Not=A?Brand";v="24"
accept: application/json, text/javascript, */*; q=0.01
content-type: application/x-www-form-urlencoded; charset=UTF-8
x-requested-with: XMLHttpRequest
sec-ch-ua-mobile: ?1
user-agent: Mozilla/5.0 (Linux; Android 10; YAL-L21) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36
sec-ch-ua-platform: "Android"
origin: https://enkiduglobal.org
sec-fetch-site: same-origin
sec-fetch-mode: cors
sec-fetch-dest: empty
referer: https://enkiduglobal.org/en/donations-with-stripe/
accept-encoding: gzip, deflate, br
accept-language: en-IQ,en;q=0.9,ar-IQ;q=0.8,ar;q=0.7,en-GB;q=0.6,en-US;q=0.5
cookie: pll_language=en
cookie: _ga_JDXXTSQSG8=GS1.1.1667930481.1.0.1667930481.0.0.0
cookie: _ga=GA1.1.1394144969.1667930482
cookie: __stripe_mid=56f4b1fa-c7cc-456b-8951-89833932487a3a245a
cookie: __stripe_sid=1a09fd5b-b848-440e-81ac-8e7a49327814652248'));
curl_setopt($search,CURLOPT_POST, 1);
$fields = 'action=wpsd_donation&name=Mohammed+Ali&email=mmaa58027%40gmail.com&amount=20&donation_for=Donate&currency=GBP&idempotency=cGpIdEsu&security=1b0fd5c8e6';
curl_setopt($search,CURLOPT_POSTFIELDS, $fields);
$search = curl_exec($search);
echo $search;
$search = json_decode($search);
