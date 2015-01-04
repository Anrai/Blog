<footer id="zan-footer">	      	
	Copyright © 2014-2015 <a target="_blank" title="Anrai" href="http://www.huanglei.me/">Anrai's Blog</a> HUANGLEI.ME All Rights Reserved.
	<!--统计代码开始-->
    <?php $analytics = get_option('zanblog_analytics');if ($analytics != "") : ?>
    	<?php echo stripslashes($analytics); ?>
    <?php endif ?>
    <!--统计代码结束-->
	<script type="text/javascript">
	var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
	document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fc0dc93280276cf8fa984d62bbe9204d5' type='text/javascript'%3E%3C/script%3E"));
	</script>
</footer>

<div style="display: none;" class="fa fa-angle-up" id="gotop"></div>
<script type='text/javascript'>
	backTop=function (btnId){
		var btn=document.getElementById(btnId);
		var d=document.documentElement;
		var b=document.body;
		window.onscroll=set;
		btn.onclick=function (){
			btn.style.display="none";
			window.onscroll=null;
			this.timer=setInterval(function(){
				d.scrollTop-=Math.ceil((d.scrollTop+b.scrollTop)*0.1);
				b.scrollTop-=Math.ceil((d.scrollTop+b.scrollTop)*0.1);
				if((d.scrollTop+b.scrollTop)==0) clearInterval(btn.timer,window.onscroll=set);
			},10);
		};
		function set(){btn.style.display=(d.scrollTop+b.scrollTop>100)?'block':"none"}
	};
	backTop('gotop');
</script>

<?php wp_footer(); ?>