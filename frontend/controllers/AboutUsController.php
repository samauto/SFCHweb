<?php

namespace frontend\controllers;

use Yii;
use frontend\models\AboutUs;
use frontend\models\AboutUsSearch;
use frontend\models\AboutUsTypeSearch;
use frontend\models\WhatwebelieveSearch;
use frontend\models\HistorySearch;
use frontend\models\LeadersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AboutUsController implements the CRUD actions for AboutUs model.
 */
class AboutUsController extends Controller
{
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
     * Lists all AboutUs models.
     * @return mixed
     */
    public function actionIndex()
    {
    $searchModelType = new AboutUsTypeSearch();
    $dataProviderType = $searchModelType->search(Yii::$app->request->queryParams);
    $dataProviderType->sort->defaultOrder = ['orderoftype'=>SORT_ASC];


    $searchModel = new AboutUsSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    $dataProvider->sort->defaultOrder = ['suborder'=>SORT_ASC];


    $searchLeaders = new LeadersSearch();
    $dataProviderLeaders = $searchLeaders->search(['LeadersSearch'=>['lead_type'=>'leadership']]);
    $dataProviderLeaders->sort->defaultOrder = ['lead_order'=>SORT_ASC];
    

    $searchStaff = new LeadersSearch();
    $dataProviderStaff = $searchLeaders->search(['LeadersSearch'=>['lead_type'=>'staff']]);
    $dataProviderStaff->sort->defaultOrder = ['lead_order'=>SORT_ASC];


    $searchHistory = new HistorySearch();
    $dataProviderHistory = $searchHistory->search(Yii::$app->request->queryParams);
    $dataProviderHistory->sort->defaultOrder = ['order'=>SORT_ASC];


    $searchBelieve = new WhatwebelieveSearch();
    $dataProviderBelieve = $searchBelieve->search(Yii::$app->request->queryParams);
    $dataProviderBelieve->sort->defaultOrder = ['order'=>SORT_ASC];


        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'dataProviderT' => $dataProviderType,
            'dataProviderLeaders' => $dataProviderLeaders,
            'dataProviderStaff' => $dataProviderStaff,
            'dataProviderBelieve' => $dataProviderBelieve,
            'dataProviderHistory' => $dataProviderHistory,
        ]);

    }



    /**
     * Finds the AboutUs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AboutUs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AboutUs::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
