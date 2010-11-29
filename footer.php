<?php global $titan; ?>
</div><!--end wrapper-->
</div><!--end content-background-->
<div id="footer">
	<div class="wrapper clear">
		<div id="copyright">
			<p class="copyright-notice"><?php _e('Copyright', 'titan'); ?> &copy; <?php echo date('Y'); ?> <?php echo $titan->copyrightName(); ?>. </p>
		</div><!--end copyright-->
	</div><!--end wrapper-->
</div><!--end footer-->
<?php wp_footer(); ?>
<?php
	if ($titan->statsCode() != '') {
		echo $titan->statsCode();
	}
?>
</body>
</html>