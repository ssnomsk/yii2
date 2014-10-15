<?php

namespace frontend\controllers;

use Yii;
use frontend\models\AccountUser;
use yii\web\Controller;

class PrivateAccountController extends Controller
{
    /**
     * Updates an existing AccountUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionIndex($id)
    {
        $model = $this->findModel($id);

        $user = Yii::$app->user->getIdentity();


        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect(['site/index']);
        }
        else
            return $this->render('index', [
                'model' => $model,
                'user' => $user,
            ]);
    }

    /**
     * Finds the AccountUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return AccountUser the loaded model
     *
     */
    protected function findModel($id)
    {
        if (($model = AccountUser::findOne($id)) !== null) {
            return $model;
        } else {
            return 'no';
            //throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionActivation($key)
    {
        $query =AccountUser::find($key);
        $post = $query
            ->where(array('key' => $key))
            ->one();
        $post['key'] = '';
        $post->save();
        return $this->render('activation');
    }
}