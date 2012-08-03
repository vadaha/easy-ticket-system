<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class OpenTicketForm extends CFormModel {
    public $subject;
    public $user_name;
    public $user_email;
    public $msg_content;
    public $isNewRecord;
    public $help_topic;
    
    public function rules() {
       return array(
           array('user_name,subject, help_topic,user_email, msg_content', 'required'),
           array('user_email', 'email')
       );
    }
    
    public function attributeLabels() {
        return array(
            'user_name' => '姓名',
            'help_topic' => '主题',
            'user_email' => '邮箱',
            'subject' => '描述',
            'msg_content' => '内容'
        );
    }
       
}


?>
