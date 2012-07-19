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
    
    public function rules() {
       return array(
           array('user_name,subject, user_email, msg_content', 'required'),
           array('user_email', 'email')
       );
    }
    
    public function attributeLabels() {
        return array(
            'user_name' => 'Full Name',
        );
    }
       
}


?>
