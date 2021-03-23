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
    <?php foreach($pharmacyShops as $shop): ?>
      <?= $this->Html->link(
          "${shop}", [
          'action'=> 'detail',
          // $contact['PharmacyShops']['area_l']
          ]); 
      ?>
    <?php endforeach; ?>
  </div>
    
</body>
</html>