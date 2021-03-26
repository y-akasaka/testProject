<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>東京都の薬局・ドラッグストア</h2>
    
    <div class="l-wrapper_02 card-radius_02">
        <?php foreach($prefecturePharmacyShops as $prefecturePharmacyShop): ?>
            <?php foreach($prefecturePharmacyShop['pharmacy_shops'] as $shop): ?>
                <div class="card_02">
                    <div class="card__header_02">
                        <div class="card__title_02">
                            <?= $this->Html->link(
                                "${shop['shop_name']}", []);
                            ?>
                            <span class="pharmacy-type">
                                <?php if($shop['pharmacy_type'] === 1): ?>
                                    <span>調剤薬局</span>
                                <?php elseif($shop['pharmacy_type'] === 2): ?>
                                    <span>ドラッグストア</span>
                                <?php else: ?>
                                    <span>調剤併設型ドラッグストア</span>
                                <?php endif; ?> 
                            </span>
                            <span class="pharmacy-type">
                                <?php if($shop['shohobin_flag'] === 0): ?>
                                    <span>電話帳</span>
                                <?php else: ?>
                                    <span>導入店</span>
                                <?php endif; ?> 
                            </span>
                            
                        </div>
                        <div class="card__image_02">
                            <?php if($shop['pharmacy_type'] === 1): ?>
                                <?= $this->Html->image('building_medical_pharmacy.png'); ?>
                            <?php elseif($shop['pharmacy_type'] === 2): ?>
                                <?= $this->Html->image('yakkyoku.png'); ?>
                            <?php else: ?>
                                <?= $this->Html->image('youkai.kirin.png'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card__body_02">
                        <p class="card__text2_02">
                            <!-- <?php echo $shop['shop_name_kana'] ?> -->
                            <table>
                                <tbody>
                                    <tr>
                                        <th>月曜</th>
                                        <th>火曜</th>
                                        <th>水曜</th>
                                        <th>木曜</th>
                                        <th>金曜</th>
                                        <th>土曜</th>
                                        <th>日曜</th>
                                        <th>祝日</th>
                                    </tr>
                                    <td><span><?= $shop['mon'] ?></span></td>
                                    <td><span><?= $shop['tue'] ?></span></td>
                                    <td><span><?= $shop['wed'] ?></span></td>
                                    <td><span><?= $shop['thr'] ?></span></td>
                                    <td><span><?= $shop['fri'] ?></span></td>
                                    <td><span><?= $shop['sat'] ?></span></td>
                                    <td><span><?= $shop['sun'] ?></span></td>
                                    <td><span><?= $shop['holiday'] ?></span></td>
                                </tbody>
                            </table>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>

</body>
</html>

<style>
.l-wrapper_02 {
  margin: 1rem auto;
  width: 380px;
}

.card_02 {
  box-sizing: border-box;
  margin: 0 auto;
  color: #333;
  border: 0.5px solid #e9eaea;
  border-radius: 3px;

}

.card__title_02 {
  padding-top: 1rem;
  order: 1;
  display: inline-block;
  font-weight: bold;
  text-decoration: none;
  color: black;
  /*線の種類（実線） 太さ 色*/
  border-bottom: solid 1px grey;
}

.card__thumbnail_02 {
  margin: 0;
  order: 0;
}

.card__image_02 {
  width: 30%;
}

.card__body_02 {
  padding: 0 1.5rem;
}

.card__text_02 {
  font-size: .8rem;
  text-align:center;
  text-decoration: none;
}

.card__text2_02 {
  font-size: .8rem;
  margin-top: 0;
  margin-bottom: 1.5rem;
}

.pharmacy-type {
    background-color: #eee;
    border-radius: 11px;
    font-size: 0.8rem;
    font-weight: lighter;
    height: 22px;
    line-height: 22px;
    margin-left: 5px;
    padding: 0 10px;
    white-space: nowrap;
}
</style>