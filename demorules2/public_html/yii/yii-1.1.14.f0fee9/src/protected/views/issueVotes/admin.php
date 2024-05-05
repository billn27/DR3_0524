<?php
/* @var $this IssueVotesController */
/* @var $model IssueVotes */

$this->breadcrumbs=array(
	'Issue Votes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List IssueVotes', 'url'=>array('index')),
	array('label'=>'Create IssueVotes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#issue-votes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Issue Votes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'issue-votes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'item',
		'time_stamp',
		'member_id',
		'issue_id',
		'option_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
