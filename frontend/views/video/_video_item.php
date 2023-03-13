<?php

/** @var $model \common\models\Video */

use common\helpers\Html;
?>

<div class="card m-3" style="width: 14rem;">
    <a href="<?= \yii\helpers\Url::to(['/video/view', 'video_id' => $model->video_id]) ?>">
        <div class="ratio ratio-16x9">
            <video class="embed-responsive-item"
                   poster="<?php echo $model->getThumbnailLink() ?>"
                   src="<?= $model->getVideoLink() ?>"></video>
        </div>
    </a>

    <div class="card-body p-2">
        <h6 class="card-title"><?= $model->title ?></h6>
        <p class="text-muted card-text m-0">
            <?= Html::channelLink($model->createdBy) ?>
        </p>
        <p class="text-muted card-text m-0">
            <?= $model->getViews()->count() ?>
            views · <?= Yii::$app->formatter->asRelativeTime($model->created_at) ?>
        </p>
    </div>
</div>
