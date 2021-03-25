<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php foreach($prefecturePharmacyShops as $prefecturePharmacyShop): ?>
      <?php foreach($prefecturePharmacyShop['pharmacy_shops'] as  $shop): ?>
        <!-- <?= $shop['shop_name'] ?> -->
        <?= $shop['shop_name_kana'] ?>
        <?= $shop['zip_code'] ?>
        <?= $shop['address1'] ?>
        <?= $shop['address2'] ?>
        <?= $shop['mon'] ?>
      <?php endforeach; ?>
    <?php endforeach; ?>
  </div>
</body>
</html>