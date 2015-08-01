<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\ResrveCustomer;
use app\models\ResrveCustomerSearch;
use app\models\ResrveClasslevel;
use app\models\ResrveMajormst;
use app\models\ResrveSchool;
use app\models\RefNoStat;
use app\models\Statemst;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Utf8ToHtml;
use yii\helpers\Convert;

/**
 * RegisterController implements the CRUD actions for ResrveCustomer model.
 */
class RegisterController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            // 'access' => [
            //     'class' => AccessControl::className(),
            //     'only' => ['logout', 'update'],
            //     'rules' => [
            //         [
            //             'actions' => ['update'],
            //             'allow' => true,
            //             'roles' => ['?', '@'],
            //         ],
            //         [
            //             'actions' => ['create'],
            //             'allow' => true,
            //             'roles' => ['?']
            //         ]
            //     ],
            // ],
        ];
    }

    /**
     * Lists all ResrveCustomer models.
     * @return mixed
     */
    /*public function actionIndex()
    {
        $searchModel = new ResrveCustomerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }*/

    /**
     * Displays a single ResrveCustomer model.
     * @param string $id
     * @return mixed
     */
    /*public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }*/

    /**
     * Creates a new ResrveCustomer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ResrveCustomer();
        $data = array();

        $data['model'] = $model;

        $data['birthdate_d'] = array();
        for ($d = 1; $d <= 31; $d++) {
            $data['birthdate_d'][$d] = $d;
        }

        $data['birthdate_y'] = array();
        for ($y = date('Y'); $y >= (date('Y') - 60); $y--) {
            $data['birthdate_y'][$y] = $y;
        }

        $data['birthdate_m'] = array(1 => 'มกราคม', 2 => 'กุมภาพันธ์', 3 => 'มีนาคม', 4 => 'เมษายน', 5 => 'พฤษภาคม', 6 => 'มิถุนายน', 7 => 'กรกฎาคม', 8 => 'สิงหาคม', 9 => 'กันยายน', 10 => 'ตุลาคม', 11 => 'พฤศจิกายน', 12 => 'ธันวาคม');

        $data['classLevels'] = ResrveClasslevel::ddlClassLevel();
        $data['majormsts'] = ResrveMajormst::ddlMajormst();
        $data['schools'] = ResrveSchool::ddlSchool();
        $data['statemsts'] = Statemst::ddlStatemst();
        

        if ($model->load(Yii::$app->request->post())) {
            //$post = Yii::$app->request->post();

            $RefNo = RefNoStat::getCustomerCode();
            $customer_code = "1000" . $RefNo->SREF_CUR + 1;
            $ref_code = $RefNo->SREF_CUR + 1;
            $paswd = Convert::student_password($customer_code);

            $RefNoStat = RefNoStat::findOne(['SREF_TYPE1' => 'RES', 'SREF_TYPE2' => 'CUS', 'SREF_REFERER' => 'resrve_customer']);
            $RefNoStat->SREF_CUR = $ref_code;
            if ($RefNoStat->save()) {
                $model->customer_code = (string)$customer_code;
                $model->customer_id01 = (string)$customer_code;
                $model->customer_id02 = (string)$customer_code;
                $model->customer_password = $paswd;
                $model->customer_flag = '1';
                $model->customer_status = '0';
                $model->customer_dbtr_link = '83';
                $model->customer_branch = '37';
                $model->customer_userdefine4 = '0';
                $model->customer_query_promo = '1';
                $model->customer_last_name = Utf8ToHtml::encrypt($model->customer_last_name, '');
                $model->customer_first_name = Utf8ToHtml::encrypt($model->customer_first_name, '');
                $model->customer_nickname = Utf8ToHtml::encrypt($model->customer_nickname, '');
                $model->customer_parent_name = Utf8ToHtml::encrypt($model->customer_parent_name, '');
                $model->customer_parent_last_name = Utf8ToHtml::encrypt($model->customer_parent_last_name, '');
                $model->customer_address1 = Utf8ToHtml::encrypt($model->customer_address1, '');
                $model->customer_birthdate = $_POST['birthdate_y'].'-'.$_POST['birthdate_m'].'-'.$_POST['birthdate_d'];
                
                if ($model->save()) {
                    return $this->redirect(['site/login']);
                } else {
                    echo '<pre>';
                    print_r($model->getErrors());
                    echo '</pre>';
                }
            } else {
                echo '<pre>';
                print_r($RefNoStat->getErrors());
                echo '</pre>';
            }
        } else {
            return $this->render('create', $data);
        }
    }

    /**
     * Updates an existing ResrveCustomer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $data['model'] = $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post())) {

            $model->customer_last_name = Utf8ToHtml::encrypt($model->customer_last_name, '');
            $model->customer_first_name = Utf8ToHtml::encrypt($model->customer_first_name, '');
            $model->customer_nickname = Utf8ToHtml::encrypt($model->customer_nickname, '');
            $model->customer_parent_name = Utf8ToHtml::encrypt($model->customer_parent_name, '');
            $model->customer_parent_last_name = Utf8ToHtml::encrypt($model->customer_parent_last_name, '');
            $model->customer_address1 = Utf8ToHtml::encrypt($model->customer_address1, '');
            $model->customer_birthdate = $_POST['birthdate_y'].'-'.$_POST['birthdate_m'].'-'.$_POST['birthdate_d'];

            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'แก้ไขข้อมสมัครเรียบร้อยแล้ว');
            } else {
                echo '<pre>';
                print_r($model->getErrors());
                echo '</pre>';
            }
        }

        //Decode UTF-8
        $model->customer_last_name = Utf8ToHtml::decrypt($model->customer_last_name, 'UTF-8');
        $model->customer_first_name = Utf8ToHtml::decrypt($model->customer_first_name, 'UTF-8');
        $model->customer_nickname = Utf8ToHtml::decrypt($model->customer_nickname, 'UTF-8');
        $model->customer_parent_name = Utf8ToHtml::decrypt($model->customer_parent_name, 'UTF-8');
        $model->customer_parent_last_name = Utf8ToHtml::decrypt($model->customer_parent_last_name, 'UTF-8');
        $model->customer_address1 = Utf8ToHtml::decrypt($model->customer_address1, 'UTF-8');
        $data['birthdate_cur_d'] = date("d", strtotime($model->customer_birthdate));
        $data['birthdate_cur_m'] = date("n", strtotime($model->customer_birthdate));
        $data['birthdate_cur_y'] = date("Y", strtotime($model->customer_birthdate));

        $data['model'] = $model;

        $data['birthdate_d'] = array();
        for ($d = 1; $d <= 31; $d++) {
            $data['birthdate_d'][$d] = $d;
        }

        $data['birthdate_y'] = array();
        for ($y = date('Y'); $y >= (date('Y') - 60); $y--) {
            $data['birthdate_y'][$y] = $y;
        }

        $data['birthdate_m'] = array(1 => 'มกราคม', 2 => 'กุมภาพันธ์', 3 => 'มีนาคม', 4 => 'เมษายน', 5 => 'พฤษภาคม', 6 => 'มิถุนายน', 7 => 'กรกฎาคม', 8 => 'สิงหาคม', 9 => 'กันยายน', 10 => 'ตุลาคม', 11 => 'พฤศจิกายน', 12 => 'ธันวาคม');

        $data['classLevels'] = ResrveClasslevel::ddlClassLevel();
        $data['majormsts'] = ResrveMajormst::ddlMajormst();
        $data['schools'] = ResrveSchool::ddlSchool();
        $data['statemsts'] = Statemst::ddlStatemst();

        return $this->render('update', $data);
        
    }

    /**
     * Deletes an existing ResrveCustomer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    /*public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }*/

    /**
     * Finds the ResrveCustomer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return ResrveCustomer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ResrveCustomer::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
