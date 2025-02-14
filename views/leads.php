<?php
$domain = "www.StorylinePublisher.com";
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$brief = $_REQUEST['brief'];
$genre = $_REQUEST['genre'];
$title = $_REQUEST['title'];
$check1 = $_REQUEST['check1'];
$check2 = $_REQUEST['check2'];
$check3 = $_REQUEST['check3'];
$check4 = $_REQUEST['check4'];
$check5 = $_REQUEST['check5'];
$check6 = $_REQUEST['check6'];
$check7 = $_REQUEST['check7'];
$check8 = $_REQUEST['check8'];
$check9 = $_REQUEST['check9'];
$check10 = $_REQUEST['check10'];
$check11 = $_REQUEST['check11'];
$check12 = $_REQUEST['check12'];
$news = $_REQUEST['news'];
$route = $_REQUEST['route'];
$brand = $_REQUEST['brand'];
$tag = $_REQUEST['tag'];
$price = $_REQUEST['price'];
$countrycode = isset($_REQUEST['countrycode']) ? $_REQUEST['countrycode'] : '';

$data=array(
    'name' => $name,
        'email' => $email,
        'phone' => ($countrycode != '') ? $countrycode . ' ' . $phone : $phone,
        'brief' => 'Lead Type : ' . $_SESSION['lead_type'] . ' | ' . $brief . ' | ' . $genre . ' | ' . $title . ' | ' 
                  . $check1 . ' | ' . $check2 . ' | ' . $check3 . ' | ' . $check4 . ' | ' . $check5 . ' | ' 
                  . $check6 . ' | ' . $check7 . ' | ' . $check8 . ' | ' . $check9 . ' | ' . $check10 . ' | ' 
                  . $check11 . ' | ' . $check12,
        'news' => 1,
        'route' => $route,
        'brand' => $brand,
        'tag' => $tag,
        'price' => $price,
    'domain' => $domain
);
if($_REQUEST['phone'] == '5556660606' || $_REQUEST['phone'] == '555-666-0606'){
    exit(header("location:/"));
}
if($_REQUEST["gender"] != ""){
    header("location: /");
    exit();
}
if ($_POST['token'] == $_SESSION['token']) {
$payload=json_encode($data);
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://crm.tealslab.com/api/customer",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
    ),
));

$response = curl_exec($curl);
// var_dump($response);
// die;

$decodeResponse = json_decode($response);

$msg = $decodeResponse[1];

// $_SESSION['thanksMsg'] = $msg;

header("location:/thank-you/?successMsg=$msg");
}
else{
    exit(header("location:/"));
}
