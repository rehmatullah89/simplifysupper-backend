<?php

/**
 * This is the model class for table "categories".
 *
 * The followings are the available columns in table 'categories':
 * @property integer $id
 * @property string $cat_name
 * @property string $cat_desc
 * @property string $cat_type
 * @property integer $parent
 * @property string $photo
 * @property string $video
 * @property string $status
 * @property string $seo_url
 * @property string $meta_keyword
 * @property string $meta_title
 * @property string $meta_desc
 * @property double $rating
 * @property string $rater
 * @property string $viewed
 * @property string $created_by
 * @property string $created_at
 * @property string $modified_at
 * @property string $modified_by
 *
 * The followings are the available model relations:
 * @property AdsCategories[] $adsCategories
 * @property CouponsCategories[] $couponsCategories
 * @property Ingredients[] $ingredients
 * @property Memberingredients[] $memberingredients
 * @property RecipeCategories[] $recipeCategories
 * @property Recipeingredients[] $recipeingredients
 */
class Category extends CActiveRecord
{
	
	/* 
	Constants
	*/
		const CAT_TYPE_GROCERY = 'Grocery';
		const CAT_TYPE_ARTICLES = 'Articles';
		const CAT_TYPE_RECIPE = 'Recipe';
		const CAT_TYPE_BLOG = 'Blog';
		const CAT_TYPE_INGREDIENT = 'Ingredient';
                const CAT_STATUS_ACTIVE = 'Active';
		const CAT_STATUS_INACTIVE = 'Inactive';
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Category the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'categories';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		//, video, seo_url, meta_keyword, meta_title, meta_desc, rating, rater, viewed, created_by, created_at, modified_at ,parent,photo
			array('cat_name,cat_desc, cat_type', 'required'),
			array('parent', 'numerical', 'integerOnly'=>true),
			array('rating', 'numerical'),
                        array('seo_url,meta_keyword,meta_title,meta_desc,video', 'length', 'max'=>1000),
			array('cat_name', 'length', 'max'=>255),
			array('cat_type', 'length', 'max'=>10),
			array('photo', 'length', 'max'=>100),
			array('status', 'length', 'max'=>8),
			array('rater, viewed, created_by, modified_by', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cat_name, cat_desc, cat_type, parent, photo, video, status, seo_url, meta_keyword, meta_title, meta_desc, rating, rater, viewed, created_by, created_at, modified_at, modified_by', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'adsCategories' => array(self::HAS_MANY, 'AdsCategories', 'cat_id'),
			'couponsCategories' => array(self::HAS_MANY, 'CouponsCategories', 'cat_id'),
			'ingredients' => array(self::HAS_MANY, 'Ingredients', 'catid'),
			'memberingredients' => array(self::HAS_MANY, 'Memberingredients', 'cat_id'),
			'recipeCategories' => array(self::HAS_MANY, 'RecipeCategories', 'cat_id'),
			'recipeingredients' => array(self::HAS_MANY, 'Recipeingredients', 'ingcat'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cat_name' => 'Name',
			'cat_desc' => 'Description',
			'cat_type' => 'Category For',
			'parent' => 'Parent',
			'photo' => 'Photo',
			'video' => 'Video (Embed Code)',
			'status' => 'Status',
			'seo_url' => 'Seo Url',
			'meta_keyword' => 'Meta Keyword',
			'meta_title' => 'Meta Title',
			'meta_desc' => 'Meta Description',
			'rating' => 'Rating',
			'rater' => 'Rater',
			'viewed' => 'Viewed',
			'created_by' => 'Created By',
			'created_at' => 'Created At',
			'modified_at' => 'Modified At',
			'modified_by' => 'Modified By',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('cat_name',$this->cat_name,true);
		$criteria->compare('cat_desc',$this->cat_desc,true);
		$criteria->compare('cat_type',$this->cat_type,true);
		$criteria->compare('parent',$this->parent);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('video',$this->video,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('seo_url',$this->seo_url,true);
		$criteria->compare('meta_keyword',$this->meta_keyword,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_desc',$this->meta_desc,true);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('rater',$this->rater,true);
		$criteria->compare('viewed',$this->viewed,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('modified_at',$this->modified_at,true);
		$criteria->compare('modified_by',$this->modified_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	/**  
	*Method to return an array based on the defined constants.
	*/
	public function getCatTypeOptions()
	{
		return array(
		self::CAT_TYPE_GROCERY=> 'Grocery',
		self::CAT_TYPE_ARTICLES=> 'Articles',
		self::CAT_TYPE_RECIPE=> 'Recipe',
		self::CAT_TYPE_BLOG=> 'Blog',
		self::CAT_TYPE_INGREDIENT=> 'Ingredient',
		);
	}
	/**
	* @return string the type text display for the current issue
	*/
	public function getCatTypeText()
	{
	$catTypeOptions=$this->catTypeOptions;
	return isset($catTypeOptions[$this->type_id]) ? $catTypeOptions[$this->type_id] : "unknown type ({$this->type_id})";
	}
        
        /**  
	*Method to return an array based on the defined constants.
	*/
	public function getCatStatusOptions()
	{
		return array(
		self::CAT_STATUS_ACTIVE=> 'Active',
		self::CAT_STATUS_INACTIVE=> 'Inactive',

		);
	}
	/**
	* @return string the type text display for the current issue
	*/
	public function getCatStatusText()
	{
	$catStatusOptions=$this->catStatusOptions;
	return isset($catStatusOptions[$this->type_id]) ? $catStatusOptions[$this->type_id] : "unknown type ({$this->type_id})";
	}
        
        /**
	* @return string the type text display for the current issue
	*/
	public function getCatName($id)
	{
            $command = Yii::app()->db->createCommand('SELECT cat_name,cat_type FROM categories');
            $command->where('id=:id', array(':id'=>$id));
            $data = $command->queryRow();
            return $data;
        }
        
}