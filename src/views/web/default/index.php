<?php

use yii\helpers\Url;
use yii\helpers\Html;
use portalium\content\Module;
use portalium\theme\widgets\Panel;
use portalium\theme\widgets\GridView;
use portalium\theme\widgets\ActionColumn;
/* @var $this yii\web\View */
/* @var $searchModel portalium\content\models\ContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Module::t('Contents');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-index">

    <?php Panel::begin([
        'title' => Module::t('Contents'),
        'actions' => [
            Html::a(Module::t(''), ['create'], ['class' => 'btn btn-success fa fa-plus'])
        ]
    ]) ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_content',
            'name',
            'title:ntext',
            //'id_user',
            //'id_category',
            //'status',
            //'date_create',
            //'date_update',
            ['class' => ActionColumn::class],
        ],
    ]); Panel::end()?>

</div>
