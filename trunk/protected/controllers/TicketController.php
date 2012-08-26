<?php

class TicketController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view', 'close', 'list'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'create'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

   
    //客户开票
    public function actionCreate() {
        $model = new OpenTicketForm;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['OpenTicketForm'])) {
            $model->attributes = $_POST['OpenTicketForm'];            
            if ($model->validate()) {
                //开票操作一
                $ticket = new Ticket;
                $ticket->user_email = $model->user_email;
                $ticket->user_name = $model->user_name;
                $ticket->subject = $model->subject;
                $ticket->create_time = date('Y-m-d H:i:s');
                $ticket->update_time = date('Y-m-d H:i:s');
                $ticket->dept_id = 0;
                $ticket->topic_id = $model->help_topic;
                $ticket->user_id = Yii::app()->user->getState('user_id');
                $ticket->status = 'open';
                $ticket->is_answered = 0;
                if(!$ticket->save()) {
                    var_dump($ticket->errors);die();
                }
                //print_r($ticket->errors);exit;
                //开票操作二
                $message = new TicketMessage;
                $message->ticket_id = $ticket->ticket_id;
                $message->staff_id = 0;
                $message->msg_content = $model->msg_content;
                $message->create_time = date('Y-m-d H:i:s');
                $message->update_time = date('Y-m-d H:i:s');
                $message->ip_address = '127.0.0.1';
                $message->save();               
                //页面跳转
                Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
		        $this->refresh();
               
            }
        }

        //$this->redirect(array('view','id'=>1));

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Ticket'])) {
            $model->attributes = $_POST['Ticket'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->ticket_id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }
    
    /**
     * 客户关闭服务票 
     */
    public function actionClose($id) {
        $t = Ticket::model()->findByPk($id);
        $t->status = 'Closed';
        $t->is_answered = 0;
        if($t->save())
            Yii::app()->user->setFlash('view-ticket','This ticket has been closed,please open new ticket if need.');
            $this->redirect(array('view', 'id'=>$id) );
    }
    

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Ticket');
        $mst_info = '';
        if(!Yii::app()->user->isGuest) {
            $cnt_unread = Yii::app()->db->createCommand()
                ->select('COUNT(*) AS cnt')
                ->from('ticket')
                ->where('user_id=:user_id AND is_answered=1 AND status!=:closed', array(
                    'user_id'=>Yii::app()->user->getState('user_id'),
                    'closed'=>'Closed'))
                ->queryRow();
                
             $cnt_all = Yii::app()->db->createCommand()
                ->select('COUNT(*) AS cnt')
                ->from('ticket')
                ->where('user_id=:user_id', array('user_id'=>Yii::app()->user->getState('user_id')))
                ->queryRow();
                
             $mst_info = '('. $cnt_unread['cnt'] . '/' . $cnt_all['cnt'] .')';
        }
        
        $this->render('index', array(
            'dataProvider' => $dataProvider,
            'msg_info' => $mst_info
        ));
    }
    
    public function actionList() {
        $dataProvider = new CActiveDataProvider('Ticket', array(
            'criteria'=>array(
                'condition' => 'user_id=:user_id',
                'params'=>array('user_id'=>Yii::app()->user->getState('user_id')),
                'order' => 'is_answered DESC, create_time DESC'
            ),
            'sort'=>false
        ));
        $model = new Ticket;
        $this->render('list', array('model'=>$model, 'dataProvider'=>$dataProvider));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Ticket('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Ticket']))
            $model->attributes = $_GET['Ticket'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Ticket::model()->with('message')->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'ticket-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
