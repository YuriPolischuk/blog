<?php

use yii\helpers\Html;
use common\models\Post;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $category yii\db\ActiveRecord[] */


$this->title = 'Create Post';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'category' => $category
    ]) ?>

</div>
