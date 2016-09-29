<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\grid\GridView;

$this->title = 'Pojok Konseling';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <h3>Today On Call</h3>
	<div class="row">
		<?= GridView::widget([
            'dataProvider' => $dataProviderPerawat,
            //'filterModel' => $searchModelPerawat,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'pid',
                //'id_perawat',
                'nama_perawat',
                'nomor_hp',
                //'layanan',
                // 'agama',
                // 'jenis_kelamin',
                // 'penempatan',
                [
	              'class' => 'yii\grid\ActionColumn',
	              'template' => '{call}',
	              'buttons' => [
	                'call' => function ($url, $model) {
	                    return Html::a('<span class="glyphicon glyphicon-earphone"></span>', $url, [
	                                'title' => Yii::t('app', 'Call'),
	                                'data-toggle' => 'modal',
	                                'data-target' => '#myModal', 
	                    ]);
	                },
	              ],
	            ],
            ],
        ]); ?>
	</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">On Call</h4>
      </div>
      <div class="modal-body">
      		<div class="progress">
			  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
			    <span class="sr-only">Calling...</span>
			  </div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>
