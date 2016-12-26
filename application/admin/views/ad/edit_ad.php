<link href="<?php echo base_url('static/hui/lib/webuploader/0.1.5/webuploader.css'); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="page-container">
	<form action="<?php echo site_url('ad/data_save'); ?>" method="post" class="form form-horizontal" id="form-article-add" >
        <input type='hidden' value="<?php echo empty($info['id']) ? 0 : $info['id']; ?>" name='id' />
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">标题：</label>
            <div class="formControls col-xs-8 col-sm-9">
    			<input type="text" class="input-text" placeholder="" name="title" value="<?php echo empty($info['title']) ? '' : $info['title']; ?>">
    		</div>
        </div>
        <div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">简介：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="summary" cols="" rows="" class="textarea"  placeholder="写点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="简介不能为空！" onKeyUp="textarealength(this,200)"><?php echo empty($info['summary']) ? '' : $info['summary']; ?></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>
</script>
</body>
</html>
