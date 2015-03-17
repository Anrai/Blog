<?php
	/*
	Template Name:关于博主
	*/
?>
<?php get_header(); ?>
<div id="zan-bodyer" style="padding-top: 30px;">
	<div class="container">
		<section class="row">
			<div class="col-md-8">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="article well clearfix">
					<!-- 面包屑 -->
					<div class="breadcrumb">
					    <?php 
					    	if(function_exists('bcn_display')) {
					        	echo '<i class="fa fa-home"></i> ';
					        	bcn_display();
					    	}
					    ?>
					</div>	
					<!-- 面包屑 -->
					<div style="color: #666; font-size;14px;">
						<?php the_content(); ?>
					</div>
					<pre><code class=" language-css">
{
    "nickname": "Anrai", 
    "contact": {
        "email": "anrai@huanglei.me",
        "weibo": "@Anrai-Huang",
        "github": "https://github.com/Anrai", // →_→!!!没开源什么东西，丢人了
    },
    "locality": "Ningbo",
    "skills": ["PHP", "MySQL", "Linux", "HTML", "CSS", "jQuery"],
    "tags": ["摩羯男", "跑步", "读书", "旅游", "摄影"]
}
				</code></pre>
				</article>
				<?php endwhile; else: ?>
				<p>
					<?php _e('抱歉，该页面不存在！'); ?>
				</p>
				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</section>
	</div>
</div>
<?php get_footer(); ?>
</body>
</html>