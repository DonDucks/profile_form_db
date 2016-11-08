<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblInfo */

$this->title = 'Update Tbl Info: ' . $model->person_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->person_id, 'url' => ['view', 'id' => $model->person_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
