<?php
/** @var $model \common\models\Video */

use yii\helpers\StringHelper;
use yii\helpers\Url;

?>
<div class="d-flex align-items-center">
    <a href="<?= Url::to(['/video/update', 'video_id' => $model->video_id]) ?>">
        <div class="ratio ratio-16x9 flex-shrink-0 mr-2"
             style="width: 120px">
            <img class="embed-responsive-item"
                 src="<?= $model->getThumbnailLink() ?>">
        </div>
    </a>

    <div class="flex-grow-1 ms-3">
        <h6 class="mt-0"><?= $model->title ?></h6>
        <?= StringHelper::truncateWords($model->description, 10) ?>
    </div>
</div>

