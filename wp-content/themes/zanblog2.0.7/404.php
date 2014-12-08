<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Yeahzan
 * @subpackage Zanblog
 * @since Zanblog 2.0.0
 */

get_header(); ?>
<div id="content" class="site-content" role="main">
	<div class="alert alert-danger text-center">
		<h1 class="page-title"><i class="fa fa-frown-o"></i> 无法找到该页面（404）</h1>
	</div>
	<iframe scrolling='no' frameborder='0' src='http://yibo.iyiyun.com/js/yibo404/key/1' width='640' height='462' style='display:block;margin:0 auto;'></iframe>
</div>
<?php get_footer(); ?>