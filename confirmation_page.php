<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesss.conf.css" type="text/css">
    <title>Підтвердження замовлення</title>
<!-- Event snippet for Покупка (1) conversion page --> <script> gtag('event', 'conversion', { 'send_to': 'AW-16562378542/UhqkCNXa1sIZEK6ux9k9', 'transaction_id': '' }); </script>

</head>
<style>
.thank-you1 {
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    color: #919191;
    margin-bottom: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>
<body>
    <?php
    include('config.php');
    ?>
    <div class="container">
    <p1 style="font-size: 24px; font-weight: bold; color: rgb(0, 0, 0); display: flex; justify-content: center; align-items: center;">Ваше замовлення сформоване</p1><br>

        <div class="details">
            <h2>Деталі замовлення</h2>
            <p><strong>Дата замовлення:</strong> <?=$currentDate; ?></p>
            <p><strong>Номер замовлення:</strong> <?=$orderNumber; ?></p>
            <p><strong>Назва товару:</strong> <?=$product_name; ?></p>
            <p><strong>Ціна за 1:</strong> <?=$new_price; ?> грн.</p>
        </div>
        <p class="thank-you">Ми вже почали обробку вашого замовлення. Наш менеджер зв'яжеться з вами для уточнення деталей замовлення та доставки.<br></p>
        <p22 class="thank-you1">Якщо ви зробили помилку, поверніться назад та створіть заявку знову.</p22>
        <!-- Кнопка "Назад" -->
        <button onclick="goBack()" class="back-button">Повернутись назад</button>
        <br><br><br><br>
        <div class="contact-info">
            <p class="contact-heading">Для зв'язку з нами:</p>
            <p><span style="color: #666;">Telegram: <a href="https://t.me/my_space_21">My Space Help</a></span></p>
            <p><span style="color: #666;">Телефон: <a href="tel:+380965504634">+38(096)550-46-34</a></span></p>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>
