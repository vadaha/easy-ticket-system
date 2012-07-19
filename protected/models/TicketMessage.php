<?php

/**
 * This is the model class for table "ticket_message".
 *
 * The followings are the available columns in table 'ticket_message':
 * @property integer $msg_id
 * @property integer $ticket_id
 * @property integer $staff_id
 * @property string $msg_content
 * @property string $ip_address
 * @property string $create_time
 * @property string $update_time
 */
class TicketMessage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TicketMessage the static model class
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
		return 'ticket_message';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ticket_id, staff_id, msg_content, ip_address, create_time, update_time', 'required'),
			array('ticket_id, staff_id', 'numerical', 'integerOnly'=>true),
			array('ip_address', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('msg_id, ticket_id, staff_id, msg_content, ip_address, create_time, update_time', 'safe', 'on'=>'search'),
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
                    'ticket'=>array(self::BELONGS_TO, 'Ticket', 'ticket_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'msg_id' => 'Msg',
			'ticket_id' => 'Ticket',
			'staff_id' => 'Staff',
			'msg_content' => 'Msg Content',
			'ip_address' => 'Ip Address',
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

		$criteria->compare('msg_id',$this->msg_id);
		$criteria->compare('ticket_id',$this->ticket_id);
		$criteria->compare('staff_id',$this->staff_id);
		$criteria->compare('msg_content',$this->msg_content,true);
		$criteria->compare('ip_address',$this->ip_address,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}