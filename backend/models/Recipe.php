<?php

/**
 * This is the model class for table "recipes".
 *
 * The followings are the available columns in table 'recipes':
 * @property string $id
 * @property string $title
 * @property integer $meal_for_breakfast
 * @property integer $meal_for_lunch
 * @property integer $meal_for_dinner
 * @property string $photo
 * @property string $description
 * @property string $directions
 * @property string $nutritions
 * @property string $recipe_type
 * @property string $meta_keywords
 * @property string $meta_title
 * @property string $meta_desc
 * @property integer $sidedish
 * @property integer $serving_size
 * @property string $video
 * @property string $videourl
 * @property string $status
 * @property string $featured
 * @property double $rating
 * @property string $viewed
 * @property string $owner_type
 * @property integer $created_by
 * @property string $created_at
 * @property string $modified_at
 * @property integer $modified_by
 * @property string $approved_by
 * @property string $approved_on
 *
 * The followings are the available model relations:
 * @property MemberCalendar[] $memberCalendars
 * @property Myfavorites[] $myfavorites
 * @property RecipeCategories[] $recipeCategories
 * @property RecipeNutritions[] $recipeNutritions
 * @property Members $createdBy
 * @property RecipesOfDay[] $recipesOfDays
 * @property Recipiedates[] $recipiedates
 */
class Recipe extends CActiveRecord
{

	/* 
	Constants
	*/
		const RECIPE_TYPE_MAIN = 'Main';
		const RECIPE_TYPE_SUB = 'Sub';
		
		const RECIPE_STATUS_NEW = 'New';
		const RECIPE_STATUS_APPROVED = 'Approved';
		const RECIPE_STATUS_DECLINED = 'Declined';
		
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Recipe the static model class
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
		return 'recipes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, photo, description, directions, nutritions, serving_size, ', 'required'),
			//, meta_keywords, meta_title, meta_desc, video, videourl, photos, rating, viewed, created_by, created_at, modified_at, modified_by, approved_by, approved_on
			array('meal_for_breakfast, meal_for_lunch, meal_for_dinner, sidedish, serving_size, created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('rating', 'numerical'),
			array('title', 'length', 'max'=>255),
			array('photo', 'length', 'max'=>150),
			array('recipe_type', 'length', 'max'=>4),
			array('meta_keywords', 'length', 'max'=>250),
			array('meta_title', 'length', 'max'=>100),
			array('meta_desc, videourl', 'length', 'max'=>500),
			array('description, directions,nutritions', 'length', 'max'=>2000),
			array('status', 'length', 'max'=>8),
			array('featured', 'length', 'max'=>3),
			array('viewed, approved_by', 'length', 'max'=>20),
			array('owner_type', 'length', 'max'=>6),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, meal_for_breakfast, meal_for_lunch, meal_for_dinner, photo, description, directions, nutritions, recipe_type, meta_keywords, meta_title, meta_desc, sidedish, serving_size, video, videourl, status, featured, rating, viewed, owner_type, created_by, created_at, modified_at, modified_by, approved_by, approved_on', 'safe', 'on'=>'search'),
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
			'memberCalendars' => array(self::HAS_MANY, 'MemberCalendar', 'recipeid'),
			'myfavorites' => array(self::HAS_MANY, 'Myfavorites', 'recipeid'),
			'recipeCategories' => array(self::HAS_MANY, 'RecipeCategories', 'recipe_id'),
			'recipeNutritions' => array(self::HAS_MANY, 'RecipeNutritions', 'recipeid'),
			'createdBy' => array(self::BELONGS_TO, 'Members', 'created_by'),
			'recipesOfDays' => array(self::HAS_MANY, 'RecipesOfDay', 'recipeid'),
			'recipiedates' => array(self::HAS_MANY, 'Recipiedates', 'recipe_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'meal_for_breakfast' => 'Breakfast',
			'meal_for_lunch' => 'Lunch',
			'meal_for_dinner' => 'Dinner',
			'photo' => 'Recipe Photo',
			'description' => 'Description',
			'directions' => 'Directions',
			'nutritions' => 'Nutritions',
			'recipe_type' => 'Recipe Type',
			'meta_keywords' => 'Meta Keywords',
			'meta_title' => 'Meta Title',
			'meta_desc' => 'Meta Desc',
			'sidedish' => 'Side Dish',
			'serving_size' => 'Serving Size',
			'video' => 'Video (Embed Code)',
			'videourl' => 'Video URL',
			'status' => 'Status',
			'featured' => 'Featured',
			'rating' => 'Rating',
			'viewed' => 'Viewed',
			'owner_type' => 'Owner Type',
			'created_by' => 'Created By',
			'created_at' => 'Created At',
			'modified_at' => 'Modified At',
			'modified_by' => 'Modified By',
			'approved_by' => 'Approved By',
			'approved_on' => 'Approved On',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('meal_for_breakfast',$this->meal_for_breakfast);
		$criteria->compare('meal_for_lunch',$this->meal_for_lunch);
		$criteria->compare('meal_for_dinner',$this->meal_for_dinner);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('directions',$this->directions,true);
		$criteria->compare('nutritions',$this->nutritions,true);
		$criteria->compare('recipe_type',$this->recipe_type,true);
		$criteria->compare('meta_keywords',$this->meta_keywords,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_desc',$this->meta_desc,true);
		$criteria->compare('sidedish',$this->sidedish);
		$criteria->compare('serving_size',$this->serving_size);
		$criteria->compare('video',$this->video,true);
		$criteria->compare('videourl',$this->videourl,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('featured',$this->featured,true);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('viewed',$this->viewed,true);
		$criteria->compare('owner_type',$this->owner_type,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('modified_at',$this->modified_at,true);
		$criteria->compare('modified_by',$this->modified_by);
		$criteria->compare('approved_by',$this->approved_by,true);
		$criteria->compare('approved_on',$this->approved_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	        /**  
	*Method to return an array based on the defined constants.
	*/
	public function getRecipeTypeOptions()
	{
		return array(
		self::RECIPE_TYPE_MAIN=> 'Main',
		self::RECIPE_TYPE_SUB=> 'Sub',

		);
	}
	/**
	* @return string the type text display for the current issue
	*/
	public function getRecipeTypeText()
	{
	$recipeTypeOptions=$this->recipeTypeOptions;
	return isset($recipeTypeOptions[$this->type_id]) ? $recipeTypeOptions[$this->type_id] : "unknown type ({$this->type_id})";
	}        
	
	/**  
	*Method to return an array based on the defined constants.
	*/
	public function getRecipeStatusOptions()
	{
		return array(
		self::RECIPE_STATUS_NEW => 'New',
		self::RECIPE_STATUS_APPROVED => 'Approved',
		self::RECIPE_STATUS_DECLINED => 'Declined',

		);
	}
	/**
	* @return string the type text display for the current issue
	*/
	public function getRecipeStatusText()
	{
	$recipeStatusOptions=$this->recipeStatusOptions;
	return isset($recipeStatusOptions[$this->type_id]) ? $recipeStatusOptions[$this->type_id] : "unknown type ({$this->type_id})";
	}
	
}