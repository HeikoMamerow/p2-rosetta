<?php
	$latest_release = $rosetta->rosetta->get_latest_release();
	if (false !== $latest_release):
?>

					<a class="download-button" href="<?php echo $latest_release['zip_url']; ?>">
						<strong><?php echo apply_filters( 'no_orphans', sprintf(__('Download WordPress %s', 'rosetta'), $latest_release['version']) ); ?></strong>
						<br />
						<span><?php printf(__('.zip &mdash; %s MB', 'rosetta'), $latest_release['zip_size_mb']); ?></span>
					</a>
					<p class="download-tar"><a href="<?php echo $latest_release['targz_url']; ?>"><?php printf(__('Download .tar.gz &mdash; %s MB', 'rosetta'), $latest_release['tar_size_mb']);?></a></p>

					<h5><?php _e("More download options", 'rosetta'); ?></h5>
					<ul>
						<li><a href="/releases/#latest"><?php _e('Other file formats', 'rosetta'); ?></a></li>
						<li><a href="/releases/#older"><?php _e('Older versions', 'rosetta'); ?></a></li>
						<li><a href="/releases/#beta"><?php _e('Beta &amp; RC versions', 'rosetta'); ?></a></li>
					</ul>
<?php
	endif;
?>
					<h5><?php _e('Resources', 'rosetta'); ?></h5>

					<p><?php _e('For help with installing or using WordPress, consult our documentation in your language.', 'rosetta'); ?></p>

					<ul>
					<?php wp_list_bookmarks('categorize=0&category_before=&category_after=&title_li=&'); ?>
					</ul>

