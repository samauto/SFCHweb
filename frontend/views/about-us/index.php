<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;
use yii\widgets\Breadcrumbs;
//use yii\grid\GridView;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model backend\models\AboutUs */



$this->title = "ABOUT";
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="abcontainer">

<div id="abheader">
    <div id="abtitle"><?= Html::encode($this->title) ?></div>
</div>

<div id="abbody">
    
<?php
    $cnt = 0;
    foreach ($dataProviderT->models as $model_subTitle) {
        
        echo "<div><p class='subtitle-about'>".$dataProviderT->models[$cnt]->type."</p>";
        $subcnt = 1;

        foreach ($dataProvider->models as $model_subSection) {

            if ($model_subTitle->aboutustype_id == $model_subSection->aboutustype_id)
            { 
                if ($model_subTitle->type == "Leadership") 
                { 
                    foreach ($dataProviderLeaders->models as $model_leadership) {
                       echo "<span class='sub-about'>
                            <div class='docTable leader-format'>
                                <div class='docTR'>
                                    <div class='docTD'>
                                        <img class='leader-pic' src='images/profile.png'>
                                    </div>
                                </div>
                                <div class='docTR'>
                                    <div class='docTD leader-text'>"
                                        .$model_leadership->lead_name.
                                    "</div>
                                </div>
                            </div></span>";
                    } 
                }
                elseif ($model_subTitle->type == "Staff")
                {
                    foreach ($dataProviderStaff->models as $model_staff) {    
                        echo "<span class='sub-about'>
                            <div class='docTable staff-format'>
                                <div class='docTR'>
                                    <div class='docTD'>
                                        <img class='staff-pic' src='images/profile.png'>
                                    </div>
                                </div>
                                <div class='docTR'>
                                    <div class='docTD staff-text'>"
                                        .$model_staff->lead_name.
                                    "</div>
                                </div>
                            </div></span>";
                    }
                }   
                elseif ($model_subTitle->type == "History")
                {
                    foreach ($dataProviderHistory->models as $model_history) {    
                        echo "<p class='sub-about'>
                                <div class='history-format'>
                                    <p class='subtitle-about'>".$model_history->type."</p>
                                    <div>
                                        <p class='sub-about'>".$model_history->body."</p>
                                    </div>
                                </div>
                            </p>";
                    }
                }   

                elseif ($model_subTitle->type == "What We Believe")
                {
                    foreach ($dataProviderBelieve->models as $model_believe) {    
                        echo "<p class='sub-about'>
                                <div class='believe-format'>
                                    <p class='subtitle-about'>".$model_believe->type."</p>
                                    <div>
                                        <p class='sub-about'>".$model_believe->body."</p>
                                    </div>
                                </div>
                            </p>";
                    }
                }   

                else 
                {
                    echo "<p class='sub-about'>".$model_subSection->subsection."</p>";
                }
            }
        $subcnt++;
        }
        $cnt++;
    }
    
?>

</div>

<div id="abfooter"><p>footer</p></div>
</div>
