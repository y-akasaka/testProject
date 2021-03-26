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
            <?php foreach($prefecturePharmacyShop['pharmacy_shops'] as $shop): ?>
                <!-- <?php echo $shop['shop_name_kana'] ?> -->
                <?php echo $shop['mon'] ?>
                <?php echo $shop['zip_code'] ?>
                <?php echo $shop['shop_name'] ?>
                <?php echo $shop['shop_name_kana'] ?>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>