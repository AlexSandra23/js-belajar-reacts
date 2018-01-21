<?php 

namespace frontend\controllers;

use Yii;
use yii\web\controller;
use frontend\models\Comment;

class CommentController extends Controller{
	public function actionIndex(){
		//SELECT * FROM tbl_comment;
		$model = Comment::find()->all();
		return $this->render('index',['model'=>$model
			]);
	}
	public function actionUpdate($id){
		$model = Comment::findOne($id);
		if(Yii::$app->request->post()){
			$model->load(Yii::$app->request->post());
			if($model->save()){
				Yii::$app->session->setFlash('success','BERHASIL UPDATE DATA');
				return $this->redirect(['index']);
			}
		}
		return  $this->render('update',['model'=>$model]);
	}
	public function actionCreate(){
		$model = new Comment();
		//process form submit
		if (Yii::$app->request->post()){
			$model->load(Yii::$app->request->post());
			if ($model->save()){
				Yii::$app->session->setFlash('success','BERHASIL SIMPAN DATA');
				return $this->redirect(['index']);
			}else{
				Yii::$app->session->setFlash('error','GAGAL SIMPAN DATA');
			}
		}
		return $this->render('create',['model'=>$model]);


	}
	public function actionDelete($id){
		$model = Comment::findOne($id);
		$model->delete();
		Yii::$app->session->setFlash('success','berhasil hapus data');
		return $this->redirect(['index']);
	}
}



 ?>