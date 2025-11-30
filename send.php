<?php
$token = "8520848412:AAG8X4JqFff3MNTsKuJ7_r1SgyJvUUxK56M";
$chat_id = "-3339645726";

// Получаем данные из формы
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$city = $_POST['city'] ?? '';
$variant = $_POST['variant'] ?? '';
$comment = $_POST['comment'] ?? '';

$message = "Новий замовлення:\n";
$message .= "Ім'я: $name\n";
$message .= "Телефон: $phone\n";
$message .= "Місто: $city\n";
$message .= "Варіант: $variant\n";
$message .= "Коментар: $comment";

$url = "https://api.telegram.org/bot$token/sendMessage";
$data = [
    'chat_id' => $chat_id,
    'text' => $message
];

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ],
];

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

// Перенаправляем на страницу благодарности
header('Location: thankyou.html');
exit;
?>
