<div>
    <?php foreach($pharmacyShop as $shop): ?>
        <div class="title"> <?= $shop['shop_name'] ?></div>
        <div class="image">
            <?= $this->Html->image("${shop['img1']}"); ?>
        </div>
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
    <?php endforeach; ?>
</div>

<style>
.image {
    width: 30%;
}
.title {
    padding-top: 1rem;
    order: 1;
    display: inline-block;
    font-weight: bold;
    text-decoration: none;
    color: black;
    /*線の種類（実線） 太さ 色*/
    border-bottom: solid 1px grey;
}

</style>