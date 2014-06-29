<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/AdminLTE.css" rel="stylesheet" type="text/css" />

	<!-- blueprint CSS framework -->
<!-- 	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/<?php echo Yii::app()->request->baseUrl; ?>/files/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/<?php echo Yii::app()->request->baseUrl; ?>/files/css/print.css" media="print" />
 -->	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/<?php echo Yii::app()->request->baseUrl; ?>/files/css/ie.css" media="screen, projection" />
	<![endif]-->

<!-- 	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/<?php echo Yii::app()->request->baseUrl; ?>/files/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/<?php echo Yii::app()->request->baseUrl; ?>/files/css/form.css" />
 -->


        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/files/css/AdminLTE.css" rel="stylesheet" type="text/css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
	<footer style='text-align:center;'>
		Copyright &copy; <?php echo date('Y'); ?> by <?php echo  Yii::app()->params['project'];; ?><br/>
		All Rights Reserved.<br/>
		Powered By <a href=" <?php echo Yii::app()->params['powered_by']; ?>"><?php echo Yii::app()->params['powered_by'];?></a>
	</footer><!-- footer -->


</body>

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/files/js/AdminLTE/dashboard.js" type="text/javascript"></script>        


</html>

