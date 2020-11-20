<?php

header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Strict-Transport-Security: max-age=63072000');
header('Content-type:application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
header('X-Robots-Tag: noindex, nofollow', true);

include 'config.php';

if(isset($_GET['title']) && isset($_GET['html'])){
  if(!empty($_GET['title']) && !empty($_GET['html'])){

    $user_title = $_GET['title'];
    $user_message = nl2br($_GET['html']);

    $data = [ 
         "posts" => [
        [
          "title" => $user_title,
         "html" => $user_message,
         "status" => $status,
         "tags" => $tags
        ],
      ]
    ];

$data_post = json_encode($data);

$url = "$domain/ghost/api/v3/admin/posts/?source=html";
$headers = ['Content-Type: application/json'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'ghost-cookie.txt' );
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'ghost-cookie.txt' );
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_post);
    $result = curl_exec($ch);
    $err = curl_error($ch);
    curl_close($ch);

    echo json_encode($result);

  } else {
     $msg['message'] = 'Oops! empty field detected. Please fill all the fields';
     echo json_encode($msg);
  }
} else {
   $msg['message'] = 'Please fill all the fields';
   echo json_encode($msg);
}
