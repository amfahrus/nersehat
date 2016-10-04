<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Keluarga;
use frontend\models\KeluargaSearch;
use frontend\models\AnggotaKeluarga;
use frontend\models\AnggotaKeluargaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KeluargaController implements the CRUD actions for Keluarga model.
 */
class KeluargaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Keluarga models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KeluargaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Keluarga model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $searchModel = new AnggotaKeluargaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$id);

        return $this->render('view', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Keluarga model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Keluarga();
        $user = Yii::$app->user->identity->id;

        if ($model->load(Yii::$app->request->post())) {
            $model->uid = $user;
            $model->nama = $_POST['Keluarga']['nama'];
            $model->save();
            return $this->redirect(['view', 'id' => $model->kid]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Keluarga model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $user = Yii::$app->user->identity->id;

        if ($model->load(Yii::$app->request->post())) {
            $model->uid = $user;
            $model->nama = $_POST['Keluarga']['nama'];
            $model->update();

            return $this->redirect(['view', 'id' => $model->kid]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Keluarga model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Keluarga model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Keluarga the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Keluarga::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Displays a single AnggotaKeluarga model.
     * @param integer $id
     * @return mixed
     */
    public function actionViewAnggota($id,$kid)
    {
        return $this->render('view-anggota', [
            'model' => $this->findModel($kid),
            'modelAnggota' => $this->findModelAnggota($id),
        ]);
    }

    /**
     * Creates a new AnggotaKeluarga model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateAnggota($kid)
    {
        $model = new AnggotaKeluarga();
        $user = Yii::$app->user->identity->id;

        if ($model->load(Yii::$app->request->post())) {
            $model->uid = $user;
            $model->kid = $kid;
            $model->nama_lengkap = $_POST['AnggotaKeluarga']['nama_lengkap'];
            $model->tempat_lahir = $_POST['AnggotaKeluarga']['tempat_lahir'];
            $model->tanggal_lahir = $_POST['AnggotaKeluarga']['tanggal_lahir'];
            $model->save();
    
            return $this->redirect(['view-anggota', 'id' => $model->aid, 'kid' => $kid]);
        } else {
            return $this->render('create-anggota', [
                'model' => $this->findModel($kid),
                'modelAnggota' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AnggotaKeluarga model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdateAnggota($id,$kid)
    {
        $model = $this->findModelAnggota($id);
        $user = Yii::$app->user->identity->id;

        if ($model->load(Yii::$app->request->post())) {
            $model->uid = $user;
            $model->kid = $kid;
            $model->nama_lengkap = $_POST['AnggotaKeluarga']['nama_lengkap'];
            $model->tempat_lahir = $_POST['AnggotaKeluarga']['tempat_lahir'];
            $model->tanggal_lahir = $_POST['AnggotaKeluarga']['tanggal_lahir'];
            $model->update();

            return $this->redirect(['view-anggota', 'id' => $id, 'kid' => $kid]);
        } else {
            return $this->render('update-anggota', [
                'model' => $this->findModel($kid),
                'modelAnggota' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AnggotaKeluarga model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDeleteAnggota($id,$kid)
    {
        $this->findModelAnggota($id)->delete();

        return $this->redirect(['view', 'id' => $kid]);
    }

    /**
     * Finds the AnggotaKeluarga model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AnggotaKeluarga the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModelAnggota($id)
    {
        if (($model = AnggotaKeluarga::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
