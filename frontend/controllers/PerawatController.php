<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Perawat;
use frontend\models\PerawatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerawatController implements the CRUD actions for Perawat model.
 */
class PerawatController extends Controller
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
     * Lists all Perawat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PerawatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}
