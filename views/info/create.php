<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblInfo */

$this->title = 'Create Profile';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
