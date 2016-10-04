<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\AnggotaKeluarga */

$this->title = 'Keluarga '.$model->nama;
$this->params['breadcrumbs'][] = ['label' => ' Keluarga', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anggota-keluarga-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update-anggota', 'id' => $modelAnggota->aid, 'kid' => $modelAnggota->kid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete-anggota', 'id' => $modelAnggota->aid, 'kid' => $modelAnggota->kid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $modelAnggota,
        'attributes' => [
            'nama_lengkap',
            'tempat_lahir',
            'tanggal_lahir',
            'keluhan_sekarang:ntext',
            'catatan_perkembangan:ntext',
        ],
    ]) ?>

</div>
