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
				    <div class="thumbnail">
				      <div class="caption">
				        <h3>Keperawatan Keluarga</h3>
				        <p><a href="keperawatan-keluarga" class="btn btn-primary" role="button">Detail</a></p>
				      </div>
				    </div>
				  </div>

				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <div class="caption">
				        <h3>Keperawatan Anak</h3>
				        <p><a href="keperawatan-anak" class="btn btn-primary" role="button">Detail</a></p>
				      </div>
				    </div>
				  </div>

				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <div class="caption">
				        <h3>Keperawatan Maternitas</h3>
				        <p><a href="keperawatan-maternitas" class="btn btn-primary" role="button">Detail</a></p>
				      </div>
				    </div>
				  </div>

				</div>

				<div class="row">

				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <div class="caption">
				        <h3>Ibu Hamil dan Menyusui</h3>
				        <p><a href="ibu-hamil-menyusui" class="btn btn-primary" role="button">Detail</a></p>
				      </div>
				    </div>
				  </div>

				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <div class="caption">
				        <h3>Lanjut <br>Usia</h3>
				        <p><a href="lanjut-usia" class="btn btn-primary" role="button">Detail</a></p>
				      </div>
				    </div>
				  </div>

				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <div class="caption">
				        <h3>Keperawatan <br>Jiwa</h3>
				        <p><a href="keperawatan-jiwa" class="btn btn-primary" role="button">Detail</a></p>
				      </div>
				    </div>
				  </div>

				</div>

				<div class="row">

				  <div class="col-sm-6 col-md-4 center-block">
				    <div class="thumbnail">
				      <div class="caption">
				        <h3>Penyakit <br>Kronis</h3>
				        <p><a href="penyakit-kronis" class="btn btn-primary" role="button">Detail</a></p>
				      </div>
				    </div>
				  </div>

				</div>

			</div>

        </div>

    </div>
</div>
