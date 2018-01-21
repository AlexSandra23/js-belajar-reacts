<?php 

namespace frontend\models;
use yii\db\ActiveRecord;

class Comment extends ActiveRecord{

	public static function tableName(){
		return 'tbl_comment';
	}
	public function rules(){
		return[
		[['name','message'],'required'],
		];
	}
}


 ?>