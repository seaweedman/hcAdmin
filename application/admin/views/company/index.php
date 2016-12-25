<link href="<?php echo base_url('static/hui/lib/webuploader/0.1.5/webuploader.css'); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="page-container">
	<form action="<?php echo site_url('Company/data_save'); ?>" method="post" class="form form-horizontal" id="form-article-add" enctype="multipart/form-data">
		<?php echo $error ?>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">公司简介：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="summary" cols="" rows="" class="textarea"  placeholder="写点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="简介不能为空！" onKeyUp="textarealength(this,200)"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">展示图：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="btn-upload form-group">
				<input class="input-text upload-url" type="text" name="uploadfile-2" id="uploadfile-2" readonly  datatype="*" nullmsg="请添加附件！" style="width:200px">
				<a href="javascript:void();" class="btn btn-primary upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
				<input type="file" name="img" class="input-file" multiple>
				</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">详细内容：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<script id="editor" name='content' type="text/plain" style="width:100%;height:400px;"></script>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
				<!-- <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button> -->
			</div>
		</div>
	</form>
</div>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="<?php echo base_url('static/hui/lib/webuploader/0.1.5/webuploader.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/hui/lib/ueditor/1.4.3/ueditor.config.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/hui/lib/ueditor/1.4.3/ueditor.all.min.js'); ?>"> </script>
<script type="text/javascript" src="<?php echo base_url('static/hui/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js'); ?>"></script>
<script type="text/javascript">

$(function(){
	var ue = UE.getEditor('editor');
});
</script>
</body>
</html>
