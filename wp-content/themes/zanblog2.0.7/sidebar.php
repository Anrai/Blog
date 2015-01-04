<aside id="sidebar"  class="col-md-4">
	<?php if(dynamic_sidebar('侧边栏')) {?>
	<!-- 最热文章模块-->
	<div class="panel panel-zan weibo">
		<div class="panel-heading">
			<i class="fa fa-weibo"></i> Anrai的微博
			<i class="fa fa-times-circle panel-remove"></i>
			<i class="fa fa-chevron-circle-up panel-toggle"></i>
		</div>
		<div class="tab-content">
			<iframe width="100%" height="300" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=550&fansRow=2&ptype=1&speed=0&skin=1&isTitle=0&noborder=0&isWeibo=1&isFans=0&uid=1868264314&verifier=efc8c820&dpc=1"></iframe>
		</div>
	</div>
	<div class="panel panel-zan hot">
		<div class="panel-heading">
			<i class="fa fa-fire"></i> 最热文章
			<i class="fa fa-times-circle panel-remove"></i>
			<i class="fa fa-chevron-circle-up panel-toggle"></i>
		</div>
		<!-- 大屏PC端、手机端 -->
		<ul class="list-group list-group-flush visible-lg visible-xs"><?php echo zanblog_get_most_comments(8, 46, 180); ?></ul>
		<!-- 小屏PC端 -->
		<ul class="list-group list-group-flush visible-md"><?php echo zanblog_get_most_comments(8, 40, 180); ?></ul>
		<!-- 平板端 -->
		<ul class="list-group list-group-flush visible-sm"><?php echo zanblog_get_most_comments(8, 100, 180); ?></ul>
	</div>
	<!-- 最新评论模块 -->
	<div class="visible-md visible-lg">
		<div class="panel panel-zan">
			<div class="panel-heading">
				<i class="fa fa-comments"></i> 最新评论
				<i class="fa fa-times-circle panel-remove"></i>
				<i class="fa fa-chevron-circle-up panel-toggle"></i>
			</div>
			<!-- 大屏PC端 -->
			<ul class="list-group list-group-flush visible-lg"><?php echo zanblog_latest_comments_list(6, 40, 20);?></ul>
			<!-- 小屏PC端 -->
			<ul class="list-group list-group-flush visible-md"><?php echo zanblog_latest_comments_list(6, 40, 15);?></ul>
		</div>
	</div>
    <!-- 广告模块 -->
	<!-- <div class="visible-md visible-lg">
		<div class="panel panel-zan host">		
			<a href="http://www.yeahzan.net" target="_blank">
				<img src="<?php bloginfo('template_directory')?>/ui/images/zanblog_ad.png" />
			</a>
		</div>
	</div> -->
	<!-- 最新文章模块 -->
	<!-- <div class=" visible-md visible-lg">
		<div class="panel panel-zan recent">
			<div class="panel-heading">
				<i class="fa fa-refresh"></i> 最新文章
				<i class="fa fa-times-circle panel-remove"></i>
				<i class="fa fa-chevron-circle-up panel-toggle"></i>
			</div>
			<ul class="list-group list-group-flush">
				<?php $myposts = get_posts('numberposts=8 & offset=0');foreach($myposts as $post) :?>
				<li class="list-group-item">
					<a href="<?php the_permalink(); ?>" rel="bookmark" target="_blank">
						
						<div class="visible-lg"><?php echo zanblog_cut_string(strip_tags($post->post_title), 20); ?></div>
						
						<div class="visible-md"><?php echo zanblog_cut_string(strip_tags($post->post_title), 15); ?></div>
					</a>
					<span class="badge">
						<?php echo $post->comment_count; ?>
					</span>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div> -->
	<!-- 随机文章模块 -->
	<div class="visible-md visible-lg">
		<div class="panel panel-zan random">
			<div class="panel-heading">
				<i class="fa fa-random"></i> 随机文章
				<i class="fa fa-times-circle panel-remove"></i>
				<i class="fa fa-chevron-circle-up panel-toggle"></i>
			</div>
			<ul class="list-group list-group-flush">
				<?php $myposts = get_posts('numberposts=8 & orderby=rand');foreach($myposts as $post) :?>
				<li class="list-group-item">
					<a href="<?php the_permalink(); ?>" rel="bookmark" target="_blank">					
						<!-- 大屏PC端 -->
						<div class="visible-lg"><?php echo zanblog_cut_string(strip_tags($post->post_title), 20); ?></div>
						<!-- 小屏PC端 -->
						<div class="visible-md"><?php echo zanblog_cut_string(strip_tags($post->post_title), 15); ?></div>
					</a>
					<span class="badge">
						<?php echo $post->comment_count; ?>
					</span>
				</li>
				<?php endforeach; ?>
			</ul>
		</div> 
	</div>
	<div class="visible-md visible-lg">
		<div class="panel panel-zan tag">
			<div class="panel-heading">
				<i class="fa fa-tag"></i> 热门标签
				<i class="fa fa-times-circle panel-remove"></i>
				<i class="fa fa-chevron-circle-up panel-toggle"></i>
			</div>
			<div class="tab-content">
				<div class="tab-pane active fade in" id="sidebar-tags"><?php wp_tag_cloud('smallest=8&largest=24&number=50'); ?></div>
			</div>
		</div> 
	</div>
	<div class="visible-md visible-lg">
		<div class="panel panel-zan link">
			<div class="panel-heading">
				<i class="fa fa-link"></i> 友情链接
				<i class="fa fa-times-circle panel-remove"></i>
				<i class="fa fa-chevron-circle-up panel-toggle"></i>
			</div>
			<div class="tab-content">
				<div class="tab-pane nav bs-sidenav fade active in" id="sidebar-links"><?php wp_list_bookmarks('title_li=&categorize=0'); ?></div>
			</div>
		</div> 
	</div>
    <!-- 分类目录、热门标签、友情链接模块-->
	<!--<div class="panel hidden-xs">
		<ul class="nav nav-pills pills-zan">
			<li class="active"><a href="#sidebar-tags" data-toggle="tab">热门标签</a></li>
			<li><a href="#sidebar-categories" data-toggle="tab">分类目录</a></li>
			<li><a href="#sidebar-links" data-toggle="tab">友情链接</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active fade in" id="sidebar-tags"><?php wp_tag_cloud('smallest=8&largest=24&number=50'); ?></div>
			<div class="tab-pane nav bs-sidenav fade" id="sidebar-categories"><?php wp_list_categories('title_li='); ?></div>
			<div class="tab-pane nav bs-sidenav fade" id="sidebar-links"><?php wp_list_bookmarks('title_li=&categorize=0'); ?></div>
		</div>
	</div>-->
	<!-- 文章存档模块	 
	<div class="panel visible-md visible-lg archive">
		<a href="<?php bloginfo('url'); ?>/archive">
			<div class="panel-heading">			
				<i class="fa fa-folder-open"></i> <span>文章存档</span>			
			</div>
		</a>
	</div>-->
	<?php };?>
</aside>