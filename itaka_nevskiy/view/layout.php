<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
    <title>Итака Центральный</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="/js/slick.min.js" type="text/javascript"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="/js/jquery.mmenu.js" type="text/javascript"></script>
    <script src="/js/vendor/middle/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/js/groups.js" type="text/javascript"></script>
    <script src="/js/nevskiy.js?<?php echo $this->scriptsVersion ?>" type="text/javascript"></script>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/jquery.mmenu.css" rel="stylesheet">
    <link href="/css/hamburgers.min.css" rel="stylesheet">
    <link href="/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/css/slick.css" rel="stylesheet" />

		<?php if ((Yii::app()->request->url=='/nevskiy/')||(Yii::app()->request->url=='/nevskiy')):?>
    <link href="/css/nevskiy.css?<?php echo $this->scriptsVersion ?>" rel="stylesheet">
		<?php else :?>
		<link href="/css/nevskiy_regions.css?<?php echo $this->scriptsVersion ?>" rel="stylesheet">
		<?php endif ?>

</head>
<body>

<?php echo $content ?>
<?php echo $this->renderPartial('//_common/counters', null, true); ?>




</body>
</html>
