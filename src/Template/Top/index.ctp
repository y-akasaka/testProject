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
      <div>薬局&ドラッグストア検索・予約サイト</div>
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
        'type' => 'get',
        'url' => ''
      ]);

      echo $this->Form->input('エリア・駅名', [
        'placeholder' => 'エリア・駅名',
        'name' => 'area',
      ]);
      echo $this->Form->input('キーワード', [
        'placeholder' => 'キーワード',
        'name' => 'keyword',
      ]);
      echo $this->Form->button('検索');

      echo $this->Form->end();
    ?>
    <div>人気条件</div>
    <ul>
      <li><a href="">ネット受付OK</a></li>
      <li><a href="">カードOK</a></li>
      <li><a href="">深夜営業</a></li>
      <li><a href="">日祝営業</a></li>
      <li><a href="">近くの薬局</a></li>
    </ul>
  </div>

  <div>
    <?= 
      $this->Form->create(null, [
        'type' => 'get',
        'url' => ''
      ]);

      echo $this->Form->button('EPARK会員でログイン');

      echo $this->Form->end();
    ?>
    <p><a href="">▶会員登録がお済みでない方はこちら</a></p>
  </div>

  <div>
    <?php foreach($users as $user): ?>
      <div><?= $user->last_name; ?></div>
      <div><?= $user->first_name; ?></div>
      <div><?= $user->email; ?></div>
      <div><?= $user->phone_number; ?></div>
      <div>
        <?php
          if ($user->sex == 0) {
            echo '男';
          }
          echo '女';
        ?>
      </div>
    <?php endforeach; ?>
  </div>
</body>

</html>

<style>
  li {
    list-style: none;
    display: inline;
    padding-left: 5px;
  }
  li + li {
    border-left: 0.5px solid #333;
  }
</style>
