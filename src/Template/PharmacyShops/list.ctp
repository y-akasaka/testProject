<div>
    <?php foreach($prefecturePharmacyShops as $prefecturePharmacyShop): ?>
        <?php foreach($prefecturePharmacyShop['pharmacy_shops'] as $shop): ?>
            <?= $shop['shop_name'] ?>
            <?= $this->Html->link(
                '店舗詳細ページへ', [
                'controller' => 'PharmacyShops',
                'action' => 'detail',
                "${shop['shop_id']}"]); 
            ?>
            <br/>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>
