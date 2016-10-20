<?php
include("header.php");
?>

<div class="jumbotron masthead">
    <div class="container">
        <h1>木娃果园</h1>
        <h2>送给木娃的陕西水果餐单。</h2>
        <p class="masthead-button-links">
            <a class="btn btn-lg btn-primary btn-shadow" href="javascript:;" onclick="compliment()"><span class="glyphicon glyphicon-thumbs-up"></span> 赞木娃幸福</a>
        </p>
        <ul class="masthead-links">
            <li>
                <a href="/">致我爱吃水果的木娃宝宝</a>
            </li>
        </ul>
    </div>
</div>
<!--<div class="bc-social">
    <div class="container">
        <ul class="bc-social-buttons">
            <li class="social-qq">
                <i class="fa fa-qq"></i> Bootstrap技术交流群：<span id="qqgroup">318630708</span>
            </li>
            <li class="social-forum">
                <a class="" href="http://wenda.bootcss.com/" title="Bootstrap问答社区" target="_blank" onclick="_hmt.push(['_trackEvent', 'masthead', 'click', 'masthead-Bootstrap问答社区'])">
                    <i class="fa fa-comments"></i> Bootstrap问答社区
                </a>
            </li>
            <li class="social-weibo">
                <a href="http://weibo.com/bootcss" title="Bootstrap中文网官方微博" target="_blank" onclick="_hmt.push(['_trackEvent', 'masthead', 'click', 'masthead-新浪微博'])"><i class="fa fa-weibo"></i> 新浪微博：@Bootstrap中文网</a>
            </li>
        </ul>
    </div>
</div>-->
<div class="container projects">

    <div class="projects-header page-header">
        <h2>陕西省特色水果介绍</h2>
        <!--<p>这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>-->
    </div>

    <div class="row">

        <?php foreach ($config["fruits"] as $key => $value) { ?>
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <div class="thumbnail" style="height: 336px;">
                    <a href="/fruits/<?php echo $key ?>" title="<?php echo  $value["name"]?> <?php echo  $value["description"]?>" target="_blank">
                        <img class="lazy" src="<?php echo  $value["ico"]?>" alt="<?php echo  $value["name"]?>" width="300" height="150"></a>
                    <div class="caption">
                        <h3>
                            <a href="/fruits/<?php echo $key ?>" title="<?php echo  $value["name"]?> <?php echo  $value["description"]?>" target="_blank">
                                <?php echo  $value["name"]?><br>
                                <small><?php echo  $value["description"]?></small>
                            </a>
                        </h3>
                        <p>
                            <?php echo  $value["memo"]?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
        


    </div>
</div>
<!-- /.container -->
<script>
    function compliment(){
        Messenger.options = {
            extraClasses: 'messenger-fixed messenger-on-top',
            theme: 'ice'
        }
        $.globalMessenger().post("^_^ 感谢点赞，木娃幸福感 +1");
    }
</script>
<?php include("footer.php") ?>
	