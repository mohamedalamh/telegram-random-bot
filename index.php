<?php
$token = "7858818024:AAERzD-_V5ceBtUOfIHO25wq_OPSdER7IKQ";
$update = json_decode(file_get_contents("php://input"), true);

// لتسجيل الطلبات للتصحيح
file_put_contents("log.txt", file_get_contents("php://input") . PHP_EOL, FILE_APPEND);

if (isset($update["message"])) {
    $chat_id = $update["message"]["chat"]["id"];
    $text = $update["message"]["text"];
    
    $reply = "✅ تم استلام رسالتك: $text";
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($reply));
}

http_response_code(200); // مهم جداً لنجاح Webhook
?>
