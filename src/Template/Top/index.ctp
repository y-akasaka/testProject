<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header id="nav">
    <div class="logo">
      <a href="">
        <img src="//s.kusurinomadoguchi.com/20210318080325/img/pref/pref_top_logo.png" alt="EPARK くすりの窓口">
      </a>
      <div class="subtitle"><?= $testData ?></div>
    </div>
    <ul>
      <li><a href="">クーポン</a></li>
      <li><a href="">初めての方</a></li>
      <li><a href="">会員登録</a></li>
      <li><a href="">ログイン</a></li>
    </ul>
  </header>

  <div>
    <?= 
      $this->Form->create(null, [
        'url' => ['action' => 'execute'],
        'type' => 'get',
      ]);

      echo $this->Form->input('area', [
        'type' => 'input',
        'label' => "エリア"
        ]);
      echo $this->Form->button('検索');

      echo $this->Form->end();
    ?>
    <p>
      <ul>
      <li><a href="">ネット受付OK</a></li>
      <li><a href="">カードOK</a></li>
      <li><a href="">深夜営業</a></li>
      <li><a href="">日祝営業</a></li>
      <li><a href="">近くの薬局</a></li>
      </ul>
    </p>
  </div>

</body>

</html>

<style>
  li {
    list-style: none;
  }
</style>
