<?php

/**
 * This is the model class for table "measurements".
 *
 * The followings are the available columns in table 'measurements':
 * @property integer $id
 * @property string $measurement
 * @property double $weight
 * @property string $unit
 *
 * The followings are the available model relations:
 * @property Memberingredients[] $memberingredients
 * @property Recipeingredients[] $recipeingredients
 */
class Measurement extends CActiveRecord
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
	 * @return Measurement the static model class
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
		return 'measurements';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('measurement,weight,unit', 'required'),
			array('weight', 'numerical'),
			array('measurement', 'length', 'max'=>100),
			array('unit', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, measurement, weight, unit', 'safe', 'on'=>'search'),
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
			'memberingredients' => array(self::HAS_MANY, 'Memberingredients', 'measurement_id'),
			'recipeingredients' => array(self::HAS_MANY, 'Recipeingredients', 'measure_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'measurement' => 'Measurement',
			'weight' => 'Weight',
			'unit' => 'Unit',
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
		$criteria->compare('measurement',$this->measurement,true);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('unit',$this->unit,true);

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