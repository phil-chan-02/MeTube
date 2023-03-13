<?php
/** @var $channel \common\models\User */
/** @var $user \common\models\User */
?>

<p>Hello <?= $channel->username ?></p>
<p>user <?= \common\helpers\Html::channelLink($user, true) ?>
    has subscribed to you</p>

<p>MeTube team</p>