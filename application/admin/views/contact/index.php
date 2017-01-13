<title>新闻动态</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 客户留言 <span class="c-gray en">&gt;</span> 客户留言 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<input type="text" name="" id="" placeholder=" 留言内容" style="width:250px" class="input-text">
		<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜留言</button>
	</div>

	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width='100'>手机号</th>
					<th width="80">邮箱</th>
					<th width='100'>留言内容</th>
					<th width="80">留言时间</th>
				</tr>
			</thead>
			<tbody>
				<?php if (!empty($list)) { ?>
				<?php foreach($list AS $val) { ?>
				<tr class="text-c">
					<td><?php echo $val['mobile']; ?></td>
					<td><?php echo $val['mail']; ?></td>
					<td><?php echo $val['content']; ?></td>
					<td><?php echo $val['create_time']; ?></td>
				</tr>
				<?php } ?>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">

/*资讯-添加*/
function article_add(title,url,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*资讯-编辑*/
function article_edit(title,url,id,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*资讯-删除*/
function article_del(url,id){
	layer.confirm('确认要删除吗？',function(index){
		window.location.href= url;
		// $(obj).parents("tr").remove();
		// layer.msg('已删除!',{icon:1,time:1000});
	});
}
/*资讯-审核*/
function article_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过','取消'],
		shade: false,
		closeBtn: 0
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});
}
</script>
