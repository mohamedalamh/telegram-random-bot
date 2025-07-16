<?php
$token = "7858818024:AAERzD-_V5ceBtUOfIHO25wq_OPSdER7IKQ";
$update = json_decode(file_get_contents("php://input"), true);

if (isset($update["message"])) {
    $chat_id = $update["message"]["chat"]["id"];
    $text = $update["message"]["text"];

    $reply = "✅ تم استلام رسالتك: $text";

    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($reply));
}

http_response_code(200); // ضروري لإبلاغ Telegram أن كل شيء تمام
?>
