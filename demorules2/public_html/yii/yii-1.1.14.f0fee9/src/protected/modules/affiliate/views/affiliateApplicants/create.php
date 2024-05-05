<?php
/* @var $this AffiliateApplicantsController */
/* @var $model AffiliateApplicants */

$this->breadcrumbs=array(
	'Affiliate Applicants'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AffiliateApplicants', 'url'=>array('index')),
	array('label'=>'Manage AffiliateApplicants', 'url'=>array('admin')),
);
?>

<h1>Create AffiliateApplicants</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>