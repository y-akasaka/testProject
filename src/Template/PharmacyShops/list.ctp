<h2><?= $title['name'] ?>の薬局・ドラッグストア</h2>
<div>
    <?php foreach($prefecturePharmacyShops as $prefecturePharmacyShop): ?>
        <?php foreach($prefecturePharmacyShop['pharmacy_shops'] as $shop): ?>
            <div class="card_02">
                <div class="card__title_02">
                    <?= $this->Html->link(
                        "${shop['shop_name']}", [ 
                        'controller' => 'PharmacyShops',
                        'action' => 'detail',
                        "${shop['shop_id']}"]); 
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
                <div>
                    <?= $this->Html->link(
                        '店舗詳細ページへ', [
                        'controller' => 'PharmacyShops',
                        'action' => 'detail',
                        "${shop['shop_id']}"]); 
                    ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>

<style>
.card_02 {
  box-sizing: border-box;
  margin: 0 auto;
  color: #333;
  border: 0.5px solid #E9EAEA;
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
