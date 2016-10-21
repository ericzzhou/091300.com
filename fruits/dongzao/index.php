<?php
/**
 * Created by PhpStorm.
 * User: ericzhou
 * Date: 2016/10/20
 * Time: 19:38
 */
include ("../../data/config.php");
$website['title']       = "冬枣 - ".$config['common']['website']['title'];
$website['meta_keywords']       = "冬枣,大荔冬枣";
$website['meta_description']    = "享有“南荔枝，北冬枣，百果王”的盛名。平均单果重17.5g，最大单果重可达25g，状如苹果，有“小苹果”之称。果皮赭红光亮、皮薄肉脆、甘甜清香、营养丰富，可食率达95%。经科学分析，冬枣含有天门冬氨酸、苏氨酸等19种人体必需的氨基酸，与其它果品相比，维生素C的含量是苹果的70倍，梨的140倍，营养价值为“百果之冠”，被誉为“百果王”、“活维生素丸”。另外富含多种微量元素和矿物质，有防癌、防心脑血管疾病之功效，营养价值为百果之冠，倍受广大消费者青睐，被称为“天下奇果”";
include("../../header.php");


?>


	<!-- Subhead
================================================== -->
	<header class="jumbotron subhead">
		<div class="container">
			<h1>友情链接</h1>
			<p class="lead">送给木娃的陕西水果餐单。</p>
		</div>
	</header>


	<div class="container">

		<!-- Docs nav
  ================================================== -->
		<div class="row">
			<div class="col-md-3 ">
				<div id="toc" class="bc-sidebar">
					<ul class="nav">
						<li class="toc-h2"><a href="#toc0">开源技术</a></li>
						<li class="toc-h2"><a href="#toc1">设计</a></li>
						<li class="toc-h2"><a href="#toc2">前端技术</a></li>
						<li class="toc-h2"><a href="#toc3">创业/招聘/活动</a></li>
						<li class="toc-h2 toc-active"><a href="#toc4">云服务</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-9">
				<article class="post page">
					<section class="post-content">
						<span id="toc0"></span>
						<h2 id="-">开源技术</h2>
						<ul>
							<li><a href="http://www.golaravel.com/">Laravel中文网</a></li>
							<li><a href="http://pkg.phpcomposer.com/">Packagist中国全量镜像</a></li>
							<li><a href="http://www.phpcomposer.com/">Composer中文网</a></li>
							<li><a href="http://segmentfault.com/">技术问答SegmentFault</a></li>
							<li><a href="http://www.ghostchina.com/">Ghost中文网</a></li>
							<li><a href="http://www.jquery123.com/">jQuery中文网</a></li>
							<li><a href="http://www.expressjs.com.cn/">Expressjs开发框架</a></li>
							<li><a href="http://www.nodeapp.cn/">Nodejs中文文档</a></li>
							<li><a href="http://babeljs.cn/">Babel中文网</a></li>
							<li><a href="http://www.emberjs.com.cn/">Ember.js</a></li>
							<li><a href="http://lodashjs.com/">Lodash中文文档</a></li>
						</ul>
						<span id="toc1"></span>
						<h2 id="-">设计</h2>
						<ul>
							<li><a href="http://www.uisdc.com/">优秀网页设计联盟</a></li>
							<li><a href="http://ux.etao.com/">一淘UX</a></li>
						</ul>
						<span id="toc2"></span>
						<h2 id="-">前端技术</h2>
						<ul>
							<li><a href="http://www.gruntjs.net/">Grunt中文网</a></li>
							<li><a href="http://www.sasschina.com/">SASS中国</a></li>
							<li><a href="http://iconfont.cn/">Iconfont</a></li>
							<li><a href="http://www.gulpjs.com.cn/">Gulp中文网</a></li>
						</ul>
						<span id="toc3"></span>
						<h2 id="-">创业/招聘/活动</h2>
						<ul>
							<li><a href="http://www.nashangban.com/">哪上班</a></li>
							<li><a href="http://huodong.tuicool.com/">推酷活动</a></li>
						</ul>
						<span id="toc4"></span>
						<h2 id="-">云服务</h2>
						<ul>
							<li><a href="https://www.upyun.com/">又拍云</a></li>
							<li><a href="http://www.ucloud.cn/">UCloud云主机</a></li>
							<li><a href="https://mos.meituan.com/">美团云</a></li>
							<li><a href="http://www.qcloud.com/">腾讯云</a></li>
						</ul>
						<hr>
						<blockquote>
							<p>如果您想和我们互换友链，请把你的网站地址、名称发到我们的邮箱：287015545@qq.com，并注明“XX网站交换友链”。谢谢。<br>我们的文字链接： <?php echo $config['common']['website']['title'] ?><br>网站地址：
								<a
									href="http://www.091300.com/">http://www.091300.com</a>
							</p>
						</blockquote>

					</section>
				</article>
			</div>
		</div>

	</div>
