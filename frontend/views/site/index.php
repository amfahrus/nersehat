<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
           		
			<div class="col-md-4">
        		<div class="list-group">
        			<?php
        				if (Yii::$app->user->isGuest) {
					?>
					  <a href="perawat" class="list-group-item"><span class="glyphicon glyphicon-circle-arrow-right"></span> Data Perawat</a>
					  <a href="site/contact" class="list-group-item"><span class="glyphicon glyphicon-circle-arrow-right"></span> Pojok Konseling</a>
					  <a href="homecare" class="list-group-item"><span class="glyphicon glyphicon-circle-arrow-right"></span> Reservasi dan Janji</a>
					  <a href="site/about" class="list-group-item"><span class="glyphicon glyphicon-circle-arrow-right"></span> Tentang Kami</a>
					<?php        
					    } else {
					?>
					  <a href="perawat" class="list-group-item"><span class="glyphicon glyphicon-circle-arrow-right"></span> Data Perawat</a>
					  <a href="anggota-keluarga" class="list-group-item"><span class="glyphicon glyphicon-circle-arrow-right"></span> Data Kesehatan Keluarga</a>
					  <a href="site/contact" class="list-group-item"><span class="glyphicon glyphicon-circle-arrow-right"></span> Pojok Konseling</a>
					  <a href="homecare" class="list-group-item"><span class="glyphicon glyphicon-circle-arrow-right"></span> Reservasi dan Janji</a>
					  <a href="site/about" class="list-group-item"><span class="glyphicon glyphicon-circle-arrow-right"></span> Tentang Kami</a>
					<?php
					    }
        			?>	
				</div>
			</div>

			<div class="col-md-8">

				<div class="row">

				  <div class="col-sm-6 col-md-4">
				  	<div class="panel panel-info">
					  <div class="panel-heading">Keperawatan Keluarga</div>
					  <div class="panel-body">
						<?= Html::img('@web/uploads/family.png',['class' => 'img-responsive']) ?>
					  </div>
  						<div class="panel-footer">
  							<a href="keperawatan-keluarga" class="btn btn-primary" role="button">Detail</a>
  						</div>
					</div>
				  </div>

				  <div class="col-sm-6 col-md-4">
				  	<div class="panel panel-info">
					  <div class="panel-heading">Keperawatan Anak</div>
					  <div class="panel-body">
						<?= Html::img('@web/uploads/anak.png',['class' => 'img-responsive']) ?>
					  </div>
  						<div class="panel-footer">
  							<a href="keperawatan-anak" class="btn btn-primary" role="button">Detail</a>
  						</div>
					</div>
				  </div>

				  <div class="col-sm-6 col-md-4">
				  	<div class="panel panel-info">
					  <div class="panel-heading">Keperawatan Maternitas</div>
					  <div class="panel-body">
						<?= Html::img('@web/uploads/maternitas.jpg',['class' => 'img-responsive']) ?>
					  </div>
  						<div class="panel-footer">
  							<a href="keperawatan-maternitas" class="btn btn-primary" role="button">Detail</a>
  						</div>
					</div>
				  </div>

				</div>

				<div class="row">

				  <div class="col-sm-6 col-md-4">
				  	<div class="panel panel-info">
					  <div class="panel-heading">Keperawatan Lanjut Usia</div>
					  <div class="panel-body">
						<?= Html::img('@web/uploads/lansia.png',['class' => 'img-responsive']) ?>
					  </div>
  						<div class="panel-footer">
  							<a href="lanjut-usia" class="btn btn-primary" role="button">Detail</a>
  						</div>
					</div>
				  </div>

				  <div class="col-sm-6 col-md-4">
				  	<div class="panel panel-info">
					  <div class="panel-heading">Keperawatan Jiwa</div>
					  <div class="panel-body">
						<?= Html::img('@web/uploads/jiwa.png',['class' => 'img-responsive']) ?>
					  </div>
  						<div class="panel-footer">
  							<a href="keperawatan-jiwa" class="btn btn-primary" role="button">Detail</a>
  						</div>
					</div>
				  </div>

				</div>

			</div>

        </div>

    </div>
</div>
