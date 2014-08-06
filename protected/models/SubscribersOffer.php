<?php

/**
 * This is the model class for table "subscribers_offer".
 *
 * The followings are the available columns in table 'subscribers_offer':
 * @property integer $offer_id
 * @property string $offer_time_frame
 * @property string $offers
 * @property string $offer_is_active
 * @property string $offers_created_on
 */
class SubscribersOffer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SubscribersOffer the static model class
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
		return 'subscribers_offer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('offer_time_frame, offers, offers_created_on', 'required'),
			array('offer_time_frame, offers', 'length', 'max'=>50),
			array('offer_is_active', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('offer_id, offer_time_frame, offers, offer_is_active, offers_created_on', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'offer_id' => 'Offer',
			'offer_time_frame' => 'Offer Time Frame',
			'offers' => 'Offers',
			'offer_is_active' => 'Offer Is Active',
			'offers_created_on' => 'Offers Created On',
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

		$criteria->compare('offer_id',$this->offer_id);
		$criteria->compare('offer_time_frame',$this->offer_time_frame,true);
		$criteria->compare('offers',$this->offers,true);
		$criteria->compare('offer_is_active',$this->offer_is_active,true);
		$criteria->compare('offers_created_on',$this->offers_created_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}