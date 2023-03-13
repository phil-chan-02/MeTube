<?php
/** @var $model \common\models\Video */

/** @var $similarVideos \common\models\Video[] */

use yii\helpers\Html;
use yii\widgets\Pjax;

?>

<div class="row">
    <div class="col-sm-8">
        <div class="ratio ratio-16x9">
            <video class="embed-responsive-item"
                   poster="<?php echo $model->getThumbnailLink() ?>"
                   src="<?= $model->getVideoLink() ?>"
                   controls></video>
        </div>
        <h6 class="mt-2"> <?= $model->title ?></h6>
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <?= $model->getViews()->count() ?> views ·
                <?= Yii::$app->formatter->asDate($model->created_at) ?>
            </div>
            <div>
                <?php Pjax::begin() ?>
                <?= $this->render('_buttons', [
                    'model' => $model
                ]) ?>
                <?php Pjax::end() ?>
            </div>
        </div>
        <div>
            <p>
                <?= common\helpers\Html::channelLink($model->createdBy) ?>
            </p>
            <?= Html::encode($model->description) ?>
        </div>
    </div>
    <div class="col-sm-4">
        <?php foreach ($similarVideos as $similarVideo): ?>
            <div class="d-flex">
                <a href="<?= \yii\helpers\Url::to(['/video/view', 'video_id' => $similarVideo->video_id]) ?>">
                    <div class="ratio ratio-16x9 mr-2"
                         style="width: 160px">
                        <video class="embed-responsive-item"
                               poster="<?php echo $similarVideo->getThumbnailLink() ?>"
                               src="<?= $similarVideo->getVideoLink() ?>"></video>
                    </div>
                </a>

                <div class="flex-grow-1 m-3">
                    <h6 class="m-0"><?= $similarVideo->title ?></h6>
                    <div class="text-muted">
                        <p class="m-0">
                            <?= \common\helpers\Html::channelLink($similarVideo->createdBy) ?>
                        </p>
                        <small>
                            <?= $similarVideo->getViews()->count() ?> views ·
                            <?= Yii::$app->formatter->asRelativeTime($similarVideo->created_at) ?>
                        </small>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


