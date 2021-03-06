<?php 
include ("/data/config.php");
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">

	<meta charset="utf-8">
	<title><?php if(isset($website['title'])){echo $website['title'];}else{ echo $config['common']['website']['title'];}?> - <?php echo $config['common']['website']['title'] ?> - <?php if(isset($website['note'])){echo $website['note'];}else{echo $config['common']['website']['note'];}?> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php if(isset($website['meta_description'])){echo $website['meta_description'];}else{ echo $config['common']['website']['meta']['description'];} ?>">
	<meta name="keywords" content="<?php if(isset($website['meta_keywords'])) {echo $website['meta_keywords'];} else {echo $config['common']['website']['meta']['keywords'];} ?>">
	<meta name="author" content="木娃果园">
	<meta name="robots" content="index,follow">

	<!-- Site CSS -->
	<link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://cdn.bootcss.com/unslider/2.0.3/css/unslider-dots.css" rel="stylesheet">
	<link href="http://cdn.bootcss.com/unslider/2.0.3/css/unslider.css" rel="stylesheet">
	<link href="/css/messenger.css" rel="stylesheet">
	<link href="/css/messenger-spinner.css" rel="stylesheet">
	<link href="/css/messenger-theme-air.css" rel="stylesheet">
	<link href="/css/messenger-theme-block.css" rel="stylesheet">
	<link href="/css/messenger-theme-flat.css" rel="stylesheet">
	<link href="/css/messenger-theme-future.css" rel="stylesheet">
	<link href="/css/messenger-theme-ice.css" rel="stylesheet">
	<link href="/plugins/ckeditor/skins/moono/editor.css" rel="stylesheet">
	<link href="/css/site.min.css" rel="stylesheet">


	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Favicons -->
	<link rel="apple-touch-icon-precomposed" href="">
	<link rel="shortcut icon" href="favicon.png">

	<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="http://cdn.bootcss.com/vue/2.0.3/vue.min.js"></script>
	<script src="http://cdn.bootcss.com/unveil/1.3.0/jquery.unveil.min.js"></script>
	<script src="http://cdn.bootcss.com/scrollup/2.4.0/jquery.scrollUp.min.js"></script>
	<script src="http://cdn.bootcss.com/toc/0.3.2/toc.min.js"></script>
	<script src="http://cdn.bootcss.com/jquery.matchHeight/0.5.2/jquery.matchHeight-min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="http://unslider.com/unslider.js"></script>
	<script src="/plugins/ckeditor/ckeditor.js"></script>
<!--	<script src="//cdn.bootcss.com/unslider/2.0.3/js/unslider-min.js"></script>-->
	<script src="/js/messenger.min.js"></script>
	<script src="/js/messenger-theme-flat.js"></script>
	<script src="/js/messenger-theme-future.js"></script>
	<script src="/js/bootstrap-wysiwyg.js"></script>
	<script src="/js/site.min.js"></script>

	<script>
		var _hmt = _hmt || [];
		(function() {
		var hm = document.createElement("script");
		hm.src = "//hm.baidu.com/hm.js?3385d6c3b993fbb8705a788dd4a73ec6";
		var s = document.getElementsByTagName("script")[0]; 
		s.parentNode.insertBefore(hm, s);
		})();
	</script>
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
				<a class="navbar-brand hidden-sm" href="/">木娃果园</a>
			</div>
			<div class="navbar-collapse collapse" role="navigation">
				
				<ul class="nav navbar-nav navbar-right hidden-sm">
					<li><a href="/" >关于</a></li>
				</ul>
			</div>
		</div>
	</div>