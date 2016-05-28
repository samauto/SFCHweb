<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LocationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Locations');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="location-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <div id="loc_container" class="col-lg-12">
        <div id="church" class="col-lg-12">
        <?php
        $cnt = 0;
        echo '<p><img src="'.$data_Loc->models[$cnt]->loc_back.'" class="img-responsive" alt="Responsive image"></p>';
        ?>
        </div>    

        
        <div id="map" class="col-lg-6"></div>
        <script> 
            function initMap() {
                var myLatLng = {lat: 29.651649, lng: -95.468687};

                var map = new google.maps.Map(document.getElementById('map'), {
                        center: myLatLng,
                        zoom: 16
                        });
            
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: 'Welcome'
                    });
            } 
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
            async defer></script>

        <div id="loc_info" class="col-lg-6">Location Details
        <?php
            $cnt = 0;
            echo '<p>'.$data_Loc->models[$cnt]->loc_street.'</p>';
            echo '<p>'.$data_Loc->models[$cnt]->loc_city.'</p>';
            echo '<p>'.$data_Loc->models[$cnt]->loc_state.'</p>';
            echo '<p>'.$data_Loc->models[$cnt]->loc_zip.'</p>';
        ?>
        </div>

    </div>












    <?= GridView::widget([
        'dataProvider' => $data_Loc,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'loc_id',
            'loc_street',
            'loc_city',
            'loc_state',
            'loc_zip',
            // 'loc_back',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
