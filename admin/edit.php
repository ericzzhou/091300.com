<?php include "../header.php";  ?>

<div class="container projects" id="fruits-edit">
    <div class="projects-header page-header"></div>

    <div class="row">

        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label for="id" class="col-sm-2 control-label">编号：</label>
                <div class="col-sm-10">
                    <input type="text" id="id" name="id" class="form-control" v-model="fruits.id" disabled="disabled" placeholder="id">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">名称：</label>
                <div class="col-sm-10">
                    <input type="text" id="name" name="name" class="form-control" v-model="fruits.name" placeholder="水果名称">
                </div>
            </div>
            <div class="form-group">
                <label for="tag" class="col-sm-2 control-label">Tag：</label>
                <div class="col-sm-10">
                    <input type="text" id="tag" name="tag" class="form-control" v-model="fruits.tag" placeholder="tag,多个以英文半角逗号“,”分隔">
                </div>
            </div>
            <div class="form-group">
                <label for="meta_keywords" class="col-sm-2 control-label">meta keywords：</label>
                <div class="col-sm-10">
                    <input type="text" id="meta_keywords" name="meta_keywords" class="form-control" v-model="fruits.meta_keywords" placeholder="meta keywords">
                </div>
            </div>
            <div class="form-group">
                <label for="meta_description" class="col-sm-2 control-label">meta description：</label>
                <div class="col-sm-10">
                    <input type="text" id="meta_description" name="meta_description" class="form-control"  v-model="fruits.meta_description"  placeholder="meta description">
                </div>
            </div>
            <div class="form-group">
                <label for="summary" class="col-sm-2 control-label">总结描述：</label>
                <div class="col-sm-10">
                    <textarea id="summary" name="summary" class="form-control"  v-model="fruits.summary" placeholder="总结描述"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="icoPath" class="col-sm-2 control-label">图片路径：</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="icoPath" name="icoPath" v-model="fruits.icoPath" placeholder="图片路径 : 300x150">
                </div>
            </div>
            <div class="form-group">
                <label for="body" class="col-sm-2 control-label">正文：</label>
                <div class="col-sm-10">
<!--                    <div id="editor">-->
<!---->
<!--                    </div>-->
                    <textarea name="body" class="ckeditor" id="body" cols="30" rows="10"  v-model="fruits.body"></textarea>
                </div>

            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <?php if(isset($_GET['id'])){?>
                        <button type="button" class="btn btn-warning" v-on:click="edit">修改</button>
                    <?php }else{ ?>
                        <button type="button" class="btn btn-primary" v-on:click="add">添加</button>
                    <?php
                    }
                    ?>
                    <button type="button" id="cacel" class="btn btn-default">取消</button>
                </div>
            </div>
        </form>


    </div>
</div>

<!-- /.container -->
<script>
    $(function () {
//        $('#body').ckeditor();
        $("#cacel").click(function(){
            window.history.back();
        });
    })

    var vm = new Vue({
        el:'#fruits-edit',
        data:{
            fruits:{
                id:'',
                name:'',
                tag:'',
                meta_keywords:'',
                meta_description:'',
                summary:'',
                icoPath:'',
                body:''
            }
        },
        methods:{
            edit:function(){
                $.ajax({ url: "/admin/api/fruits.php?act=edit", json_encode(this.fruits), success: function(){
                    alert('修改成功');
                }});
            },
            add:function(){
                $.ajax({ url: "/admin/api/fruits.php?act=add", json_encode(this.fruits), success: function(){
                    alert('修改成功');
                }});
            }
        }
    })
</script>
<?php include "../footer.php";  ?>
	