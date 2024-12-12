<?php

/**
 * This is the model class for table "ingredients".
 *
 * The followings are the available columns in table 'ingredients':
 * @property string $id
 * @property string $barcode
 * @property string $ingredient
 * @property string $pantry
 * @property integer $catid
 * @property string $measure_unit
 * @property double $ingweight
 * @property double $weight
 * @property double $water
 * @property double $kcal
 * @property double $protein
 * @property double $fat
 * @property double $sat_fat
 * @property double $mono_unsat_fat
 * @property double $poly_unsat_fat
 * @property double $cholesterol
 * @property double $carbohydrate
 * @property double $dietry_fiber
 * @property double $calcium
 * @property double $iron
 * @property string $potassium
 * @property string $sodium
 * @property double $suger
 * @property double $vit_a_iu
 * @property double $vit_a_re
 * @property double $thiamin
 * @property double $flavin
 * @property double $niacin
 * @property double $vit_c
 * @property double $vit_e
 * @property double $refuse_pct
 * @property integer $updated_by
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Categories $cat
 * @property Memberingredients[] $memberingredients
 * @property Recipeingredients[] $recipeingredients
 */
class Ingredient extends CActiveRecord
{
	/* 
	Constants
	*/
		const WEIGHT_IN_GRAM = 'g';
		const WEIGHT_IN_MILLIGRAM = 'mg';
		const WEIGHT_IN_MICROGRAM = 'ug';
		const WEIGHT_IN_OUNCE = 'oz';
		
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ingredient the static model class
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
		return 'ingredients';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//	barcode,   water, kcal, protein, fat, sat_fat, mono_unsat_fat, poly_unsat_fat, cholesterol, carbohydrate, dietry_fiber, calcium, iron, potassium, sodium, suger, vit_a_iu, vit_a_re, thiamin, flavin, niacin, vit_c, vit_e, refuse_pct
			array('ingredient, ingweight, pantry, weight,catid,measure_unit', 'required'),
			array('catid, updated_by, created_by', 'numerical', 'integerOnly'=>true),
			array('ingweight, weight, water, kcal, protein, fat, sat_fat, mono_unsat_fat, poly_unsat_fat, cholesterol, carbohydrate, dietry_fiber, calcium, iron, suger, vit_a_iu, vit_a_re, thiamin, flavin, niacin, vit_c, vit_e, refuse_pct', 'numerical'),
			array('barcode', 'length', 'max'=>50),
			array('ingredient', 'length', 'max'=>255),
			array('pantry, potassium, sodium', 'length', 'max'=>20),
			array('measure_unit', 'length', 'max'=>2),
			array('created_at, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, barcode, ingredient, pantry, catid, measure_unit, ingweight, weight, water, kcal, protein, fat, sat_fat, mono_unsat_fat, poly_unsat_fat, cholesterol, carbohydrate, dietry_fiber, calcium, iron, potassium, sodium, suger, vit_a_iu, vit_a_re, thiamin, flavin, niacin, vit_c, vit_e, refuse_pct, updated_by, created_at, created_by, updated_at', 'safe', 'on'=>'search'),
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
			'cat' => array(self::BELONGS_TO, 'Categories', 'catid'),
			'memberingredients' => array(self::HAS_MANY, 'Memberingredients', 'ingredient_id'),
			'recipeingredients' => array(self::HAS_MANY, 'Recipeingredients', 'ingredient_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'barcode' => 'Barcode',
			'ingredient' => 'Ingredient Name',
			'pantry' => 'Pantry',
			'catid' => 'Category',
			'measure_unit' => 'Measure Unit',
			'ingweight' => 'Ingredient weight',
			'weight' => 'Nutrition Weight',
			'water' => 'Water (gm)',
			'kcal' => 'Calories (Kcal)',
			'protein' => 'Protein (gm)',
			'fat' => 'Fat (gm)',
			'sat_fat' => 'Saturated Fat (gm)',
			'mono_unsat_fat' => 'Mono Unsaturated Fat (gm)',
			'poly_unsat_fat' => 'Poly Unsaturated Fat (gm)',
			'cholesterol' => 'Cholesterol (mg)',
			'carbohydrate' => 'Carbohydrate  (gm)',
			'dietry_fiber' => 'Dietry Fiber (gm)',
			'calcium' => 'Calcium (mg)',
			'iron' => 'Iron (mg)',
			'potassium' => 'Potassium (mg)',
			'sodium' => 'Sodium (mg)',
			'suger' => 'Suger (gm)',
			'vit_a_iu' => 'Vitamin A Iu (mcg)',
			'vit_a_re' => 'Vitamin A Re (mcg)',
			'thiamin' => 'Thiamin (mcg)',
			'flavin' => 'Flavin (mg)',
			'niacin' => 'Niacin (mg)',
			'vit_c' => 'Vitamin C (mcg)',
			'vit_e' => 'Vitamin E (mcg)',
			'refuse_pct' => 'In Edible (gm)',
			'updated_by' => 'Updated By',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
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
		$criteria->compare('barcode',$this->barcode,true);
		$criteria->compare('ingredient',$this->ingredient,true);
		$criteria->compare('pantry',$this->pantry,true);
		$criteria->compare('catid',$this->catid);
		$criteria->compare('measure_unit',$this->measure_unit,true);
		$criteria->compare('ingweight',$this->ingweight);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('water',$this->water);
		$criteria->compare('kcal',$this->kcal);
		$criteria->compare('protein',$this->protein);
		$criteria->compare('fat',$this->fat);
		$criteria->compare('sat_fat',$this->sat_fat);
		$criteria->compare('mono_unsat_fat',$this->mono_unsat_fat);
		$criteria->compare('poly_unsat_fat',$this->poly_unsat_fat);
		$criteria->compare('cholesterol',$this->cholesterol);
		$criteria->compare('carbohydrate',$this->carbohydrate);
		$criteria->compare('dietry_fiber',$this->dietry_fiber);
		$criteria->compare('calcium',$this->calcium);
		$criteria->compare('iron',$this->iron);
		$criteria->compare('potassium',$this->potassium,true);
		$criteria->compare('sodium',$this->sodium,true);
		$criteria->compare('suger',$this->suger);
		$criteria->compare('vit_a_iu',$this->vit_a_iu);
		$criteria->compare('vit_a_re',$this->vit_a_re);
		$criteria->compare('thiamin',$this->thiamin);
		$criteria->compare('flavin',$this->flavin);
		$criteria->compare('niacin',$this->niacin);
		$criteria->compare('vit_c',$this->vit_c);
		$criteria->compare('vit_e',$this->vit_e);
		$criteria->compare('refuse_pct',$this->refuse_pct);
		$criteria->compare('updated_by',$this->updated_by);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
		/**  
	*Method to return an array based on the defined constants.
	*/
	public function getWeightTypeOptions()
	{
		return array(
		self::WEIGHT_IN_GRAM=> 'Gram',
		self::WEIGHT_IN_MILLIGRAM=> 'Milli Gram',
		self::WEIGHT_IN_MICROGRAM=> 'Micro Gram',
		self::WEIGHT_IN_OUNCE=> 'Ounce',
		);
	}
	/**
	* @return string the type text display for the current issue
	*/
	public function getWeightTypeText()
	{
	$weightTypeOptions=$this->weightTypeOptions;
	return isset($weightTypeOptions[$this->type_id]) ? $weightTypeOptions[$this->type_id] : "unknown type ({$this->type_id})";
	}
}