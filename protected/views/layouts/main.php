<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Добавить сайт в визуальные закладки, визуалльные закладки, сохранить сайт, сохранить ссылку">
    <meta name="author" content="lexxsumy@gmail.com">

    <script src="js/jquery.js"></script>
    <link rel='icon' href='css/img/favicon.ico' type='image/ico' />

    <!--[if lt IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/ie.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/grid.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/nivo.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom_colors.css" rel="stylesheet">

<!--	<title>--><?php //echo CHtml::encode($this->pageTitle); ?><!--</title>-->
</head>

<body>

<div id="page_wrap">

    <?php echo $content; ?>

</div><!-- Page Wrap ENDS -->

<div id="toTop"></div>

<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/isotope.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/caroufredsel.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/nivo.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mousewheel.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/tinyscrollbar.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
<!--[if lte IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->

</body>
</html>
