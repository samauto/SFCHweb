<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\FaqForm;
use frontend\models\FooterMenuSearch;

use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use yii\helpers\ArrayHelper;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                //'level' => 1, // avaliable level are 1,2,3 :D
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'offset' => 2, // space between characters 
                'testLimit' => 1, // how many times should the same CAPTCHA be displayed 
                //'padding' => 10 // padding around the text  
            ],

            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'oAuthSuccess'],
            ],
        ];
    }

    /**
    * This function will be triggered when user is successfuly authenticated using some oAuth client.
    *
    * @param yii\authclient\ClientInterface $client
    * @return boolean|yii\web\Response
    */
    public function oAuthSuccess($client) {
    // get user data from client
    $userAttributes = $client->getUserAttributes();

    // do some thing with user data. for example cubrid_connect_with_url(conn_url) $userAttributes['email']
    }


    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
       $searchModelFooter = new FooterMenuSearch();
       $dataProviderFooter1 = $searchModelFooter->search(['FooterMenuSearch'=>['foot_visible'=>'1']]);
       $dataProviderFooter2 = $searchModelFooter->search(['FooterMenuSearch'=>['foot_visible'=>'2']]);
       $dataProviderFooter3 = $searchModelFooter->search(['FooterMenuSearch'=>['foot_visible'=>'3']]);
       
            return $this->render('index', [
                'dataProviderFooter1' => $dataProviderFooter1,
                'dataProviderFooter2' => $dataProviderFooter2,
                'dataProviderFooter3' => $dataProviderFooter3,]);
    }


    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionEmsearch()
    {
        if ($model->load(Yii::$app->request->post()) && $model->validate()) 
        {
            return $this->goHome();
        }
        else 
        {
            return $this->render('emsearch', ['model' => $model]);
        }
    }


    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }


        /**
     * Displays factual page.
     *
     * @return mixed
     */
    public function actionDocsearch()
    {
        return $this->render('docsearch');
    }


        /**
     * Displays factual page.
     *
     * @return mixed
     */
    public function actionTest()
    {
        return $this->render('test');
    }
         /**
     * Displays factual page.
     *
     * @return mixed
     */
    public function actionIndexs()
    {
        return $this->render('indexs');
    }

    /**
     * Displays factual page.
     *
     * @return mixed
     */
    public function actionFacsearch()
    {
        return $this->render('facsearch');
    }


    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

}
