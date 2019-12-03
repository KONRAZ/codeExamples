<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
    <title>Итака Приморский</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="/js/slick.min.js" type="text/javascript"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="/js/jquery.mmenu.js" type="text/javascript"></script>
    <script src="/js/vendor/middle/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/js/groups.js" type="text/javascript"></script>
    <script src="/js/primorskiy.js?<?php echo $this->scriptsVersion ?>" type="text/javascript"></script>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/jquery.mmenu.css" rel="stylesheet">
    <link href="/css/hamburgers.min.css" rel="stylesheet">
    <link href="/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/css/slick.css" rel="stylesheet" />
    <link href="/css/primorskiy.css?<?php echo $this->scriptsVersion ?>" rel="stylesheet">

</head>
<body>

<?php echo $content ?>
<?php echo $this->renderPartial('//_common/counters', null, true); ?>


<!-- BEGIN JIVOSITE CODE {literal} -->

<script type='text/javascript'>

    (function(){ var widget_id = 'C6HLp7YM13';var d=document;var w=window;function l(){

        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>

<!-- {/literal} END JIVOSITE CODE -->

</body>
</html>
