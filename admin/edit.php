<?php
include "../header.php";
?>

	<div class="container projects">
		<div class="projects-header page-header"></div>

		<div class="row">

			<form class="form-horizontal" role="form">
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" disabled="disabled" id="inputEmail3" placeholder="ID">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">名称</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">一句话描述</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">描述</label>
                    <div class="col-sm-10">
                    <textarea class="form-control"></textarea>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">图片路径</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">正文</label>
                    <div class="col-sm-10">
                    <div id="editor" style="overflow:scroll; max-height:300px">
                     Go ahead&hellip;
                    </div>
                    </div>
                   
                </div>
               
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">保存</button>
                    </div>
                </div>
            </form>


		</div>
	</div>
    
	<!-- /.container -->
<script>
    $(function(){
        $('#editor').wysiwyg();
    })
</script>
<?php 
include "../footer.php";
?>
	