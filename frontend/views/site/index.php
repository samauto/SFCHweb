<?php

use yii\helpers\Url;
use kartik\widgets\ActiveForm;
use kartik\icons\Icon;
use kartik\helpers\Html;
//use yii\helpers\Html;
use yii\bootstrap\Button;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use frontend\models\MedSpec;
use frontend\models\Procedures;
use frontend\models\CashPricing;


Icon::map($this);
Icon::map($this, Icon::FA);

$this->title = 'Sharon Fellowship Church Houston';
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=112351875551965";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id = "top_menu">
  <div id = "top_back">
    <div id="top_back_tint">

      <div id = "doc_search">
        <div id = "doc_welcome">
            <div id="doc_welcome_back">
                <div id="doc_begin">WELCOME TO</div>
                <div id="doc_middle">Sharon Fellowship Church</div>
                <div id="doc_end">Sunday Services at 10:15AM & 11:15AM</div>
            </div>
        </diV>
        <div id = "doc_back"></div>  
      </div><!-- End of Doc Search -->
    
    </div><!-- End of Top Back Tint -->
  </div><!-- End of Top Back -->
</div><!-- End of Top Menu -->


<div class="submenu_table">
    <div class="submenu_table_row">
        <div class="submenu_table_cell">
            <div class="service_text">Quick Info</div>
            <div class="service_text"><HR></div>
            <div class="service_text">Weekend</div>
            <div class="service_text">FRI 7:30PM</div>
            <div class="service_text">SAT 7:30PM</div>
            <div class="service_text">SUN 10:00AM 11:15AM</div>
            <div class="service_text"><HR></div>
            <div class="service_text">MidWeek</div>
            <div class="service_text">WED 7:30PM</div>
            <div class="service_text"><HR></div>
            <div class="service_text">5114 Gasmer Rd</div>
            <div class="service_text">Houston, TX 77035</div>
            <div class="service_text">832-475-9942</div>
            <div class="service_text">info@sharonhouston.com</div>
        </div>
        <div class="submenu_table_cell">
            <div class="service_text">Other Info</div>
        </div>
    </div>
</div><!-- End of Mid Menu -->


<div>
    <div>
        <div class="fb-page" 
             data-href="https://www.facebook.com/SharonFellowshipChurchHouston/" 
             data-tabs="timeline" 
             data-width="340" 
             data-height="380" 
             data-small-header="true" 
             data-adapt-container-width="true" 
             data-hide-cover="true" 
             data-show-facepile="false">
             <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.facebook.com/SharonFellowshipChurchHouston/">
                    <a href="https://www.facebook.com/SharonFellowshipChurchHouston/">
                        Sharon Fellowship Church Houston</a></blockquote></div></div>

    </div>
    <div>
        <a class="twitter-timeline" 
        href="https://twitter.com/SharonChHouston" 
        data-widget-id="709189142345682944"
        height="100"
        data-chrome="nofooter nofooter transparent noscrollbar"
        data-tweet-limit="1"
        data-link-color="#820bbb"></a>
        <script>
        !function(d,s,id){
            var js,fjs=d.getElementsByTagName(s)[0],
            p=/^http:/.test(d.location)?'http':'https';
            if(!d.getElementById(id)){js=d.createElement(s);
                js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
        </script>
    </div>
</div>


<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3467.346239224536!2d-95.47068838596012!3d29.651725582026867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640ea22e9baf469%3A0x3ca40610c474df6a!2sSharon+Fellowship+Church+of+Houston!5e0!3m2!1sen!2sus!4v1457926445845" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


<!-- Footer Menu -->
<div id="foot_menu" class="row">
  <div id="foot_submenu" class="row">
    <div id="foot_back" class="row">


<div class="col-sm-1 foot_format"></div>
<div class="col-sm-3 foot_format">
<?php
    $cnt = 0;
    echo '<p>'.$dataProviderFooter1->models[$cnt]->foot_head.'</p>';
    foreach ($dataProviderFooter1->models as $model_head) 
    {
    echo '<p>'. Html::a($dataProviderFooter1->models[$cnt]->foot_link, 
                    $url = Url::to([$dataProviderFooter1->models[$cnt]->foot_linkname])
                    , ['class'=>'foot_link']).'</p>';
        $cnt++;
    }    
?>
</div>  

<div class="col-sm-4 foot_format">
<?php
    $cnt = 0;
    echo '<p>'.$dataProviderFooter2->models[$cnt]->foot_head."</p>";
    foreach ($dataProviderFooter2->models as $model_head) 
    {
    echo '<p>'. Html::a($dataProviderFooter2->models[$cnt]->foot_link, 
                    $url = Url::to([$dataProviderFooter2->models[$cnt]->foot_linkname])
                    , ['class'=>'foot_link'])."</p>";
        $cnt++;
    }    
?>
</div>  

<div class="col-sm-3 foot_format">
<?php
    $cnt = 0;

    echo '<p>'.$dataProviderFooter3->models[$cnt]->foot_head.'</p>';
    foreach ($dataProviderFooter3->models as $model_head) 
    {
    echo '<p>'. Html::a($dataProviderFooter3->models[$cnt]->foot_link, 
                    $url = Url::to([$dataProviderFooter3->models[$cnt]->foot_linkname])
                    , ['class'=>'foot_link']).'</p>';
        $cnt++;
    }    
?>
</div> 

<div class="col-sm-1 foot_format"></div> 

    </div>
  </div>
</div><!-- End of Footer Menu -->  

<div id="footer">
        <p class="pull-left text-center" style="display:inline;">&copy; Sharon Fellowship Church Houston <?= date('Y') ?> </p>
        <p class="pull-right text-center" style="display:inline;">All Rights Reserved</p>
</div>
