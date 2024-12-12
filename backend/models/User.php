<?php

/**
 * This is the model class for table "members".
 *
 * The followings are the available columns in table 'members':
 * @property integer $memberid
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $about
 * @property string $photo
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $country
 * @property string $phone
 * @property string $dob
 * @property integer $age
 * @property string $gender
 * @property string $status
 * @property string $signed_up
 * @property string $usertype
 * @property string $recipes
 * @property string $articles
 * @property string $photos
 * @property string $videos
 * @property string $testimonials
 * @property integer $friends
 * @property string $viewed
 * @property string $spclicks
 * @property string $spviews
 * @property string $howto
 * @property string $meta_keywords
 * @property string $meta_title
 * @property string $meta_desc
 *
 * The followings are the available model relations:
 * @property Ads[] $ads
 * @property Articles[] $articles0
 * @property Banners[] $banners
 * @property Comments[] $comments
 * @property Comments[] $comments1
 * @property Coupons[] $coupons
 * @property Friends[] $friends0
 * @property MemberCalendar[] $memberCalendars
 * @property Memberingredients[] $memberingredients
 * @property Myfavorites[] $myfavorites
 * @property Recipes[] $recipes0
 * @property Recipiedates[] $recipiedates
 * @property Testimonials[] $testimonials0
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'members';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//about, photo, address, city, state, zip, phone, dob, age, recipes, articles, photos, videos, testimonials, friends, viewed, spclicks, spviews, meta_keywords, meta_title, meta_desc'
			array('firstname,lastname, password,about,usertype,email', 'required'),
			array('email', 'email','message'=>'Email format is not correct.'),
			array('photo', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'insert,update'),
			array('email', 'unique', 'className' => 'User','attributeName' => 'email','message'=>'This Email Address is already in use.'),
			array('password', 'length', 'min'=>6, 'max'=>40),
            // array('password', 'compare', 'compareAttribute'=>'repeat_password'),
			array('age, friends', 'numerical', 'integerOnly'=>true),
			array('firstname, lastname', 'length', 'max'=>250),
			array('email, city, state, country', 'length', 'max'=>100),
			array('username, phone', 'length', 'max'=>30),
			//array('password', 'length', 'min'=>6, 'max'=>40),
			array('photo, address', 'length', 'max'=>255),
			array('zip', 'length', 'max'=>10),
			array('gender', 'length', 'max'=>21),
			array('status', 'length', 'max'=>8),
			array('recipes, articles, photos, videos, testimonials, viewed, spclicks, spviews', 'length', 'max'=>20),
			array('howto', 'length', 'max'=>3),
			array('signed_up', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('memberid, firstname, lastname, email, username, password, about, photo, address, city, state, zip, country, phone, dob, age, gender, status, signed_up, usertype, recipes, articles, photos, videos, testimonials, friends, viewed, spclicks, spviews, howto, meta_keywords, meta_title, meta_desc', 'safe', 'on'=>'search'),
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
			'ads' => array(self::HAS_MANY, 'Ads', 'created_by'),
			'articles0' => array(self::HAS_MANY, 'Articles', 'created_by'),
			'banners' => array(self::HAS_MANY, 'Banners', 'created_by'),
			'comments' => array(self::HAS_MANY, 'Comments', 'refid'),
			'comments1' => array(self::HAS_MANY, 'Comments', 'created_by'),
			'coupons' => array(self::HAS_MANY, 'Coupons', 'created_by'),
			'friends0' => array(self::HAS_MANY, 'Friends', 'requested_by'),
			'memberCalendars' => array(self::HAS_MANY, 'MemberCalendar', 'memberid'),
			'memberingredients' => array(self::HAS_MANY, 'Memberingredients', 'memberid'),
			'myfavorites' => array(self::HAS_MANY, 'Myfavorites', 'memberid'),
			'recipes0' => array(self::HAS_MANY, 'Recipes', 'created_by'),
			'recipiedates' => array(self::HAS_MANY, 'Recipiedates', 'created_by'),
			'testimonials0' => array(self::HAS_MANY, 'Testimonials', 'created_by'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'memberid' => 'User ID',
			'firstname' => 'First Name',
			'lastname' => 'Last Name',
			'email' => 'Email',
			'username' => 'Username',
			'usertype' => 'User Role',
			'password' => 'Password',
			'about' => 'About',
			'photo' => 'Photo',
			'address' => 'Address',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'country' => 'Country',
			'phone' => 'Phone',
			'dob' => 'Date of Birth',
			'age' => 'Age',
			'gender' => 'Gender',
			'status' => 'Status',
			'signed_up' => 'Signed Up',
			'recipes' => 'Recipes',
			'articles' => 'Articles',
			'photos' => 'Photos',
			'videos' => 'Videos',
			'testimonials' => 'Testimonials',
			'friends' => 'Friends',
			'viewed' => 'Viewed',
			'spclicks' => 'Spclicks',
			'spviews' => 'Spviews',
			'howto' => 'Howto',
			'meta_keywords' => 'Meta Keywords',
			'meta_title' => 'Meta Title',
			'meta_desc' => 'Meta Desc',
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

		$criteria->compare('memberid',$this->memberid);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('usertype',$this->usertype,true);
		//$criteria->compare('repeat_password',$this->repeat_password,true);
		$criteria->compare('about',$this->about,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('signed_up',$this->signed_up,true);
		$criteria->compare('recipes',$this->recipes,true);
		$criteria->compare('articles',$this->articles,true);
		$criteria->compare('photos',$this->photos,true);
		$criteria->compare('videos',$this->videos,true);
		$criteria->compare('testimonials',$this->testimonials,true);
		$criteria->compare('friends',$this->friends);
		$criteria->compare('viewed',$this->viewed,true);
		$criteria->compare('spclicks',$this->spclicks,true);
		$criteria->compare('spviews',$this->spviews,true);
		$criteria->compare('howto',$this->howto,true);
		$criteria->compare('meta_keywords',$this->meta_keywords,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_desc',$this->meta_desc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function hashPassword($password)
		{
			return md5($password);
		}
		
		/**
	* Checks if the given password is correct.
	* @param string the password to be validated
	* @return boolean whether the password is valid
	*/
	public function validatePassword($password)
	{
	return $this->hashPassword($password)===$this->password;
	}
}