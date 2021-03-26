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
        <h2></h2>
        <?php foreach($pharmacyShop as $shop): ?>
            <!-- <?= $shop['shop_id'] ?> -->
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
</body>
</html>

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