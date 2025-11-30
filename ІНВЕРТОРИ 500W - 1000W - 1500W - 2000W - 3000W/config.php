<script>
  window.product_name = "ІНВЕРТОРИ 500W - 1000W - 1500W - 2000W - 3000W"; // Название товара ДУБЛИРОВАТЬ
  window.new_price = "Від 899 До 3999 ГРН"; // Новая цена ДУБЛИРОВАТЬ
</script>
<?php
$new_price = 'Від 899 До 3999 ГРН'; // Новая цена ДУБЛИРОВАТЬ
$old_price = '1799'; // Старая цена 
$product_name = "ІНВЕРТОРИ 500W - 1000W - 1500W - 2000W - 3000W"; // Название товара ДУБЛИРОВАТЬ

$skidka = (($old_price - $new_price) / $old_price) * 100;
$rounded_skidka = round($skidka);
$currentDate = date('|| Y-m-d ||');
$orderNumber = date('YHimd'); 
$currentTime = date('H:i:s');

?>
<!-- <?=$old_price;?> -->
<!-- <?=$new_price;?> -->
<!-- <?=$skidka;?> -->

