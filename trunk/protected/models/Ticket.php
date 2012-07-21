<?php

/**
 * This is the model class for table "ticket".
 *
 * The followings are the available columns in table 'ticket':
 * @property integer $ticket_id
 * @property integer $dept_id
 * @property integer $topic_id
 * @property integer $user_id
 * @property string $user_email
 * @property integer $status
 * @property string $create_time
 * @property string $update_time
 */
class Ticket extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ticket the static model class
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
		return 'ticket';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dept_id, topic_id, user_id, user_email, status, create_time, update_time', 'required'),
			array('dept_id, topic_id, user_id', 'numerical', 'integerOnly'=>true),
			array('user_email', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ticket_id, dept_id, topic_id, user_id, user_email, status, create_time, update_time', 'safe', 'on'=>'search'),
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
                    'message'=>array(self::HAS_MANY, 'TicketMessage', 'ticket_id'),
                    'help_topic'=>array(self::HAS_MANY, 'HelpTopic', 'topic_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ticket_id' => 'Ticket',
			'dept_id' => 'Dept',
			'topic_id' => 'Topic',
			'user_id' => 'Guest',
			'user_email' => 'Gust Email',
			'status' => 'Status',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
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

		$criteria->compare('ticket_id',$this->ticket_id);
		$criteria->compare('dept_id',$this->dept_id);
		$criteria->compare('topic_id',$this->topic_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}