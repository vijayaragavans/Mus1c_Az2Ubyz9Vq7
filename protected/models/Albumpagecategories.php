<?php

/**
 * This is the model class for table "album_page_categories".
 *
 * The followings are the available columns in table 'album_page_categories':
 * @property integer $album_page_category_id
 * @property string $album_page_category
 * @property string $album_page_category_is_active
 * @property string $album_page_category_created_on
 */
class AlbumPageCategories extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AlbumPageCategories the static model class
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
		return 'album_page_categories';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('album_page_category, album_page_category_created_on', 'required'),
			array('album_page_category', 'length', 'max'=>50),
			array('album_page_category_is_active', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('album_page_category_id, album_page_category, album_page_category_is_active, album_page_category_created_on', 'safe', 'on'=>'search'),
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
			'album_page_category_id' => 'Album Page Category',
			'album_page_category' => 'Album Page Category',
			'album_page_category_is_active' => 'Album Page Category Is Active',
			'album_page_category_created_on' => 'Album Page Category Created On',
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

		$criteria->compare('album_page_category_id',$this->album_page_category_id);
		$criteria->compare('album_page_category',$this->album_page_category,true);
		$criteria->compare('album_page_category_is_active',$this->album_page_category_is_active,true);
		$criteria->compare('album_page_category_created_on',$this->album_page_category_created_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}