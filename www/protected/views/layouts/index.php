<!DOCTYPE html>
<html lang="<?= Yii::app()->language ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="<?= Yii::app()->language ?>" />

        <?php Yii::app()->clientScript->registerScriptFile('http://code.jquery.com/jquery-1.9.1.min.js'); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/lib/bootstrap.min.js'); ?>

        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/css/lib/bootstrap.min.css'); ?>        
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/css/lib/bootstrap.extend.css'); ?> 

        
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <body>
        <div class="row-fluid">
            <div class="span3"></div>
            <div class="span6">
                <?php echo $content; ?>
            </div>
            <div class="span3"></div>
        </div>
    </body>
</html>