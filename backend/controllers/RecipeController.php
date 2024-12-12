<?php

class RecipeController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				//'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Recipe;
			
			$criteria = new CDbCriteria;
			$criteria->select = 't.cat_name'; // select fields which you want in output
			$criteria->condition = 't.cat_type = "Recipe"';
			$categories = Category::model()->findAll($criteria);
			$category = array();
			foreach ($categories as $cat)
				array_push($category,$cat->cat_name);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Recipe']))
		{
		
			print_r($_POST); exit;
			$rnd = rand(0,9999);  // generate random number between 0-9999
			$model->attributes=$_POST['Recipe'];
            $uploadedFile=CUploadedFile::getInstance($model,'photo');
            $fileName = "{$rnd}-01-{$uploadedFile}";  // random number + file name
            $model->photo = $fileName;
            $model->created_by = Yii::app()->user->getId();
						
			if($model->save()){
				
				if(!empty($uploadedFile)) 
				$uploadedFile->saveAs(Yii::app()->basePath.'/www/images/'.$fileName);
				
				// get cat ids	and save multiple
				$cats = explode(",", $_POST['cat_names']);
				foreach($cats as $c_name){
					$criteria->select = 't.id'; // select fields which you want in output
					$criteria->condition = 't.cat_name = "'.$c_name.'"';
					$categories = Category::model()->findAll($criteria);
					$model_rc =new RecipeCategory;
					$model_rc->recipe_id = $model->id;
					$model_rc->cat_id = $categories[0]->id;
					if(!empty($model_rc->cat_id))
						$model_rc->save();
				}
			
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'category'=>$category,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Recipe']))
		{
			 $_POST['Recipe']['photo'] = $model->photo;
             $model->attributes=$_POST['Recipe'];
             $uploadedFile=CUploadedFile::getInstance($model,'photo');
             $model->modified_by = Yii::app()->user->getId();   
					  
			if($model->save()){
				
                            if(!empty($uploadedFile))  // check if uploaded file is set or not
                                $uploadedFile->saveAs(Yii::app()->basePath.'/www/images/'.$uploadedFile);
								
				$this->redirect(array('view','id'=>$model->id));
					
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Recipe');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Recipe('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Recipe']))
			$model->attributes=$_GET['Recipe'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Recipe::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='recipe-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
