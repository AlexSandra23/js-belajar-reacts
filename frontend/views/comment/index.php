<?php
use yii\helpers\Html;
?>
<table class="table table-striped"	>
<tr>
	<th>No</th>
	<th>Name</th>
	<th>Message</th>
	<th>Action</th>
</tr>
<?php foreach($model as $row){
	?>
	<tr>
		<td><?=$row->id;?></td>
		<td><?=$row->name;?></td>
		<td><?=$row->message;?></td>
		<td><?= Html::a('edit',['update','id'=>$row->id])?></td>
		<td><?= Html::a('delete',['delete','id'=>$row->id],['data-confirm'=>'delete data?'])?></td>
	
	</tr>
	<?php
}
?>
</table>