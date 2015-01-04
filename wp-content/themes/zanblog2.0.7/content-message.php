<?php
	/*
	Template Name: Bug提交与意见反馈
	*/
?>

<?php get_header(); ?>
<div id="zan-bodyer">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="alert alert-info fade in">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<?php 
				    	if(function_exists('bcn_display')) {
				        	echo '<i class="fa fa-home"></i> ';
				        	bcn_display();
				    	}
				    ?>
					<h3 class="gbook-title">欢迎在这里提交你所发现的Bug或者对本博客的意见反馈。</h3>
					<br/>
					<p>非常感谢您对本人博客的支持，如果您在浏览博客过程中发现Bug，请以留言的形式在下方提出。</p>
					<br/>
					<p>另外也欢迎在这里提出您的宝贵意见与建议，我们会根据反馈情况决定是否采纳。</p>
					<br/>
					<p>也可以和博主本人交流关于互联网相关的各种信息，互相学习，共同成长。</p>
					<br/>
					<p><span style="color:#D56765">灌水及无意义留言将被删除，谢谢合作。</span></p>
				</div>
				<?php comments_template(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
</body>
</html>