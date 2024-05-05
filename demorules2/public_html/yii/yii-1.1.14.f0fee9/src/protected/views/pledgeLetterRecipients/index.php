<?php
/* @var $this PledgeLetterRecipientsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pledge Letter Recipients',
);

$this->menu=array(
	array('label'=>'Create PledgeLetterRecipients', 'url'=>array('create')),
	array('label'=>'Manage PledgeLetterRecipients', 'url'=>array('admin')),
);
?>

<h1>Pledge Letter Recipients</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
