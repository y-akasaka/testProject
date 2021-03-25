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
    <?php foreach($prefectures as $prefecture): ?>
      <?= $this->Html->link(
            "${prefecture['name']}", [
            'controller' => 'PharmacyShops',
            'action' => 'detail',
            "${prefecture['id']}"
          ]); 
      ?>
    <?php endforeach; ?>
  </div>
    
</body>
</html>