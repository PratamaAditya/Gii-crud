<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\barang */

$this->title = 'Update Barang: ' . $model->Id_barang;
$this->params['breadcrumbs'][] = ['label' => 'Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_barang, 'url' => ['view', 'id' => $model->Id_barang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
