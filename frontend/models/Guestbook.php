<?php 
namespace frontend\models;
use yii\base\Model;
class GuestBook extends Model
{
	public $name, $email, $comment;

	public function rules()
	{
		return [
	[['name', 'email', 'comment'],'required'],
	['email','email']
		];
	}
	}






 ?>
