<p id="back-to-top" class="hidden-phone"><a class="btn btn-primary btn-large" title="返回顶部!"><span></span><i class="icon-chevron-up icon-4x"></i><br><i class="icon-chevron-up icon-4x"></i><i class="icon-chevron-up icon-4x"></i></a></p>
<div class="footer">
	底部，<a href="" class="footer-links">底部</a>，底部，底部，底部，底部，底部，底部，底部，底部，底部，底部，底部，底部，底部，底部，底部，底部，底部，底部，底部，底部，底部，底部，底部，
</div>
		<!-- Modal -->
		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">搜索本站</h3>
		  </div>
		  <div class="modal-body">

				<form class="form-search"  method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
				  <input type="text" class="input-large search-query" placeholder="请输入搜索关键词！"  name="s" id="s" >
				  <button type="submit" class="btn pull-right" title="搜索本站"><i class="icon-search"></i></button>
				</form>
		  </div>
		  <div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
		  </div>
		</div>
<?php wp_footer();?>
					<script type="text/javascript">
							$(function () {$(".cover").mouseenter(function() {$(this).fadeTo(300, 1);}).mouseleave(function() {$(this).fadeTo(300, 0);});})
							<?php if(get_option('cwpsl_page_navi')=='off'):?>
							jQuery(function () {
							jQuery.ias({
							container : '.postlist',
							item: '.post',
							pagination: '.pagination',
							next: '.next',
							loader: '请稍等！正在努力加载更多文章...',
							trigger: '点我，可以载入更多文章哦！',
							});});
							<?php endif;?>

				$(function(){
					//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
					$(function () {
						$(window).scroll(function(){
							if ($(window).scrollTop()>100){
								$("#back-to-top").fadeIn(1000);
							}
							else
							{
								$("#back-to-top").fadeOut(1500);
							}
						});
//当点击跳转链接后，回到页面顶部位置

						$("#back-to-top").click(function(){
							$('body,html').animate({scrollTop:0},2000);
							return false;
						});
					});
				});
</script>

<?php if(get_option('cwpsl_lazyload')=='on'):?>
<script type="text/javascript" src="<?php echo THEME_URI; ?>/ui/js/lazyload.js"></script>
<script type="text/javascript">
	$(function() {$("body img").lazyload({effect:"fadeIn",failurelimit : 30,placeholder : "<?php echo THEME_URI; ?>/ui/img/bg.png"});});
</script>
<?php endif;?>
</body>
</html>
