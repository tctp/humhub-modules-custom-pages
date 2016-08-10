<?php

use yii\helpers\Html;
use yii\helpers\Url;
use humhub\compat\CActiveForm;
?>
<div class="panel panel-default">
    <div class="panel-heading"><?php echo Yii::t('CustomPagesModule.base', '<strong>Custom</strong> Pages'); ?></div>
    <?= \humhub\modules\custom_pages\widgets\AdminMenu::widget([]); ?>
    <div class="panel-body">
        <div class="clearfix">
            <?php echo Html::a('<i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;' . Yii::t('base', 'Back to overview'), Url::to(['index']), ['data-ui-loader' => '','class' => 'btn btn-default pull-right']); ?>
            <h4><?= Yii::t('CustomPagesModule.views_admin_add', 'Type selection') ?></h4>
            <div class="help-block">
                <?= Yii::t('CustomPagesModule.views_admin_list', 'The type of your page defines how the content is embeded to your site.'); ?>
            </div>
        </div>
        <br />
        <?php $form = CActiveForm::begin(); ?>
        <?php echo $form->errorSummary($model); ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'type'); ?>
            <?php echo $form->dropdownList($model, 'type', $model->availableTypes, array('class' => 'form-control', 'rows' => '5', 'placeholder' => Yii::t('CustomPagesModule.views_admin_edit', 'Content'))); ?>
        </div>

        <?php echo Html::submitButton(Yii::t('CustomPagesModule.views_admin_edit', 'Next'), array('data-ui-loader' => '', 'class' => 'btn btn-primary')); ?>

        <?php CActiveForm::end(); ?>

    </div>
</div>