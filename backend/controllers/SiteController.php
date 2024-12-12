<?php
/**
 * SiteController.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/24/12
 * Time: 1:21 AM
 */

class SiteController extends Controller
{
	public $loginForm;
	public $layout = 'main';
	// $this->layout = 'main';
    public $defaultAction = 'login';

	/**
	 * @return array list of action filters (See CController::filter)
	 */
	public function filters()
	{
		return array('accessControl');
	}

	/**
	 * @return array rules for the "accessControl" filter.
	 */
	public function accessRules()
	{
		return array(
			array('allow', // Allow registration form for anyone
				// 'actions' => array('index', 'login', 'logout', 'contact', 'captcha', 'error', 'test'),
				'actions' => array('index', 'login'),
			),
			array('allow', // Allow all actions for logged in users ("@")
				'users' => array('@'),
			),
			array('deny'), // Deny anything else
		);
	}

	/**
	 *
	 * @return array actions
	 */
	public function actions()
	{
		return array(
			'captcha' => array(
				'class' => 'CCaptchaAction',
				'backColor' => 0xFFFFFF,
				'foreColor' => 0x0099CC,
			),
			'page' => array(
				'class' => 'CViewAction',
			),
		);
	}

	/**
	 * Renders index page
	 */
	public function actionIndex()
	{
		
		$model=new LoginForm;
		$this->render('index', array('model'=>$model));

		// $this->render('index');
	}

	/**
	 * Renders contact page
	 * todo: does nothing but rendering, proper functionality to be created
	 */
	public function actionContact()
	{
		$model = new ContactForm;
		if (isset($_POST['ContactForm']))
		{
			$model->attributes = $_POST['ContactForm'];
			if ($model->validate())
			{
				/** example code */
//				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
//				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
//				$headers="From: $name <{$model->email}>\r\n".
//					"Reply-To: {$model->email}\r\n".
//					"MIME-Version: 1.0\r\n".
//					"Content-type: text/plain; charset=UTF-8";
//
//				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
//				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
//				$this->refresh();
			}
		}
		$this->render('contact', array('model' => $model));

	}

	/**
	 * Action to render the error
	 * todo: design proper error page
	 */
	public function actionError()
	{
		if ($error = app()->errorHandler->error)
		{
			if (app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Action to render login form or handle user's login
	 * and redirection
	 */
	public function actionLogin()
	{
		//redirect user if already logged-in
		if (Yii::app()->user->getId() !== null)
		$this->redirect(array('site/index'));
		
		if(Yii::app()->user->isGuest){
                 $this->layout = 'main1';
		}
		$model=new LoginForm;
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// print_r($_POST['LoginForm']);die();
			 $user=User::model()->findByAttributes(array('email'=>$_POST['LoginForm']['email']));
			 
			// validate user input and redirect to the previous page if valid
			if($user != '' && $user->usertype != 'admin'){
			Yii::app()->user->setFlash('error','Your are not authenticated User/Admin!');
            $this->redirect(Yii::app()->user->returnUrl);
			}
			
			if($user != '' && $user->status != 'Active'){
			Yii::app()->user->setFlash('error','Your account need to be activated yet by Administrator!');
            $this->redirect(Yii::app()->user->returnUrl);
			}
			
			if( $model->validate() &&  $model->login())
			$this->redirect(array('site/index'));
				// $this->redirect(Yii::app()->user->returnUrl); ,'user'=>$model->email
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * This is the action that handles user's logout
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

}