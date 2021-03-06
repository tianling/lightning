<?php

/**
 * This is the model class for table "{{bid_meta}}".
 *
 * The followings are the available columns in table '{{bid_meta}}':
 * @property string $id
 * @property string $user_id
 * @property string $bid_id
 * @property string $sum
 * @property integer $refund
 * @property string $buy_time
 * @property string $pay_time
 * @property string $repay_time
 * @property string $finish_time
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Bid $bid
 * @property FrontUser $user
 */
class BidMeta extends CmsActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{bid_meta}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, bid_id, sum, refund', 'required'),
			array('refund, status', 'numerical', 'integerOnly'=>true),
			array('user_id, bid_id, sum, buy_time, pay_time, repay_time, finish_time', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, bid_id, sum, refund, buy_time, pay_time, repay_time, finish_time, status', 'safe', 'on'=>'search'),
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
			'bid' => array(self::BELONGS_TO, 'BidInfo', 'bid_id'),
			'user' => array(self::BELONGS_TO, 'FrontUser', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'bid_id' => 'Bid',
			'sum' => 'Sum',
			'refund' => 'Refund',
			'buy_time' => 'Buy Time',
			'pay_time' => 'Pay Time',
			'repay_time' => 'Repay Time',
			'finish_time' => 'Finish Time',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('bid_id',$this->bid_id,true);
		$criteria->compare('sum',$this->sum,true);
		$criteria->compare('refund',$this->refund);
		$criteria->compare('buy_time',$this->buy_time,true);
		$criteria->compare('pay_time',$this->pay_time,true);
		$criteria->compare('repay_time',$this->repay_time,true);
		$criteria->compare('finish_time',$this->finish_time,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BidMeta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function beforeSave(){
		if ( parent::beforeSave() ){
			$purifier = new CHtmlPurifier();
			$this->attributes = $purifier->purify($this->attributes);
			return true;
		}else {
			return false;
		}
	}
}
