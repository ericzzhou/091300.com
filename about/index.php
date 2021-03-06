<?php 
include ("../data/config.php");
$website['title']       = "关于 - ".$config['common']['website']['title'];
include("../header.php");
 ?>


	<!-- Subhead
================================================== -->
	<header class="jumbotron subhead">
		<div class="container">
			<h1>关于 Bootstrap 中文网</h1>
			<p class="lead">Bootstrap中文网致力于前端开发推广，坚持分享、开放的互联网精神</p>
		</div>
	</header>


	<div class="container">

		<!-- Docs nav
  ================================================== -->
		<div class="row">
			<div class="col-md-3 ">
				<div id="toc" class="bc-sidebar">
					<ul class="nav">
						<li class="toc-h2"><a href="#toc0">关于我们</a></li>
						<li class="toc-h2 toc-active"><a href="#toc1">展示你的Bootstrap作品</a></li>
						<li class="toc-h2"><a href="#toc2">加入我们</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-9">
				<article class="post page">
					<section class="post-content">
						<span id="toc0"></span>
						<h2 id="-">关于我们</h2>
						<p>Bootstrap中文网 -- www.bootcss.com 创建于2012年。起因是国内没有较好的关于Bootstrap的中文教程和交流渠道，因此，我们对Bootstrap的文档进行了翻译整理，并且建立了QQ群和微博（<a href="http://weibo.com/bootcss">@bootcss</a>），方便更多热爱这个CSS框架的攻城师们分享、交流自己在前端设计、开发方面的心得。</p>
						<span id="toc1"></span>
						<h2 id="-bootstrap-">展示你的Bootstrap作品</h2>
						<p>你是Bootstrap粉丝吗？你正在用Bootstrap做开发吗？你开发的网站是 Powered By Bootstrap 的吗？那就把你的网站show出来吧！</p>
						<p>凡是经过确认采用Bootstrap CSS框架的网站，我们会将你所提交网站的截图及介绍展示到“Bootstrap优站精选”列表中，并有机会在 Bootstrap中文网 的首页进行推荐。</p>
						<blockquote>
							<p>请发邮件到下面的邮箱，并在邮件标题上注明（Bootstrap网站作品提交 -- 网站名称或网址）。<br>Mail： admin@bootcss.com</p>
						</blockquote>
						<span id="toc2"></span>
						<h2 id="-">加入我们</h2>
						<p>Bootstrap中文网致力于前端开发推广，坚持分享、开放的互联网精神，旨在为广大前端攻城师、设计师提供交流的平台，如果你和我们有相同的目标，我们乐意一起携手前行。</p>
						<p>如果你也热爱前端开发、热爱 Bootstrap，有一颗创业的心，欢迎和我们联系，更欢迎你加入我们的团队！</p>
						<p>QQ: 124369963 Mail: admin@bootcss.com</p>

					</section>
				</article>
			</div>
		</div>

	</div>


	<?php include("../footer.php") ?>