<? php
$id = $_GET['id'];
 $search = curl_init();
curl_setopt($search, CURLOPT_URL, "https://www.idcardcentre.co.uk/index.php?route=extension/payment/stripe/createPaymentIntent"); 
curl_setopt($search, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($search, CURLOPT_ENCODING , "");
curl_setopt($search, CURLOPT_HTTPHEADER, explode("\n", 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36
Pragma: no-cache
Accept: */*
accept: application/json, text/javascript, */*; q=0.01
accept-encoding: gzip, deflate, br
accept-language: en-US,en;q=0.9
content-length: 59
content-type: application/x-www-form-urlencoded; charset=UTF-8
cookie: _gcl_au=1.1.1934081715.1667640717; language=en-gb; currency=GBP; nitropack_disabled=0; PHPSESSID=tm1fk42ce15p9f8s3i0398vtq7; default=310g9kqqgd6app0aebi4a6gpra; _gid=GA1.3.1987421797.1667640718; _clck=h68z4r|1|f6b|0; _fbp=fb.2.1667640718299.1591271998; _hjFirstSeen=1; _hjIncludedInSessionSample=1; _hjSession_2588514=eyJpZCI6IjE5YWYyNjA3LWJiNTItNDIxMi1iMTkxLWVkMzYzNWI4YTMwYyIsImNyZWF0ZWQiOjE2Njc2NDA3MjA1NTEsImluU2FtcGxlIjp0cnVlfQ==; _hjIncludedInPageviewSample=1; _hjAbsoluteSessionInProgress=0; _hjShownFeedbackMessage=true; pc_cookie=310g9kqqgd6app0aebi4a6gpra; stripe_payment_type=new-card; _hjSessionUser_2588514=eyJpZCI6ImY1Nzk5Y2UyLTRmNzgtNTAzMC1hYTI1LWI5NzIwNWI0ZGVhNiIsImNyZWF0ZWQiOjE2Njc2NDA3MTgwMzIsImV4aXN0aW5nIjp0cnVlfQ==; __stripe_mid=56181d08-8c8e-4988-bc50-f424304cd5c40ef1c2; __stripe_sid=b925e4dc-ad8b-4a55-b175-701ef1b4bcef8992f5; _ga=GA1.1.1062015708.1667640717; _ga_5YZCXP59SM=GS1.1.1667640717.1.1.1667641024.0.0.0; _ga_JCR5KGQW3T=GS1.1.1667640717.1.1.1667641024.0.0.0; _clsk=bjzsw5|1667641026722|6|1|f.clarity.ms/collect
origin: https://www.idcardcentre.co.uk
referer: https://www.idcardcentre.co.uk/checkout
sec-ch-ua: \Google Chrome\;v=\107\, \Chromium\;v=\107\, \Not=A?Brand\;v=\24\
sec-ch-ua-mobile: ?0
sec-ch-ua-platform: \Windows\
sec-fetch-dest: empty
sec-fetch-mode: cors
sec-fetch-site: same-origin
user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36
x-requested-with: XMLHttpRequest'));
curl_setopt($search,CURLOPT_POST, 1);
$fields = 'payment_method=".trim($id)."&store_card=false';
curl_setopt($search,CURLOPT_POSTFIELDS, $fields);
$search = curl_exec($search);
echo $search;
$search = json_decode($search);
