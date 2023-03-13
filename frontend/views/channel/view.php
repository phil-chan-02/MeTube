<?php
/** @var $channel \common\models\User */
/** @var $this \yii\web\View */
/** @var $dataProvider \yii\debug\models\timeline\DataProvider */

use yii\helpers\Url;
use yii\widgets\ListView;

?>

<div class="p-5 bg-light border rounded-3">
    <h2 class="display-4"><?= $channel->username ?></h2>
    <hr class="my-4">

    <?php \yii\widgets\Pjax::begin() ?>
        <?= $this->render('_subscribe', [
                'channel' => $channel
        ]) ?>
    <?php \yii\widgets\Pjax::end() ?>

</div>

<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '@frontend/views/video/_video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
    ]
]) ?>

