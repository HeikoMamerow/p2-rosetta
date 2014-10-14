
<?php
/**
 * Footer template.
 *
 * @package P2
 */
?>
<!--<div class="clear"></div>-->

<!--</div> <!-- // wrapper -->-->

<div class="wrapper">
	<div id="footer">
		<p><?php _e('Code is Poetry.', 'p2'); ?></p>
	</div>
</div>

<div id="notify"></div>

<div id="help">
	<dl class="directions">
		<dt>c</dt><dd><?php _e( 'Compose new post', 'p2' ); ?></dd>
		<dt>j</dt><dd><?php _e( 'Next post/Next comment', 'p2' ); ?></dd>
		<dt>k</dt> <dd><?php _e( 'Previous post/Previous comment', 'p2' ); ?></dd>
		<dt>r</dt> <dd><?php _e( 'Reply', 'p2' ); ?></dd>
		<dt>e</dt> <dd><?php _e( 'Edit', 'p2' ); ?></dd>
		<dt>o</dt> <dd><?php _e( 'Show/Hide comments', 'p2' ); ?></dd>
		<dt>t</dt> <dd><?php _e( 'Go to top', 'p2' ); ?></dd>
		<dt>l</dt> <dd><?php _e( 'Go to login', 'p2' ); ?></dd>
		<dt>h</dt> <dd><?php _e( 'Show/Hide help', 'p2' ); ?></dd>
		<dt><?php _e( 'shift + esc', 'p2' ); ?></dt> <dd><?php _e( 'Cancel', 'p2' ); ?></dd>
	</dl>
</div>

<?php wp_footer(); ?>

</body>
</html>