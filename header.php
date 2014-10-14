<?php
/**
 * Header template.
 *
 * @package P2
 */

global $pagetitle;
$pagetitle = get_bloginfo( 'name', 'display' ) . wp_title( '&laquo;', false, 'left' );

$GLOBALS['wporg_global_header_options'] = array(
		'rosetta_site' => get_bloginfo( 'name', 'display' ),
		'search' => false,
		'menu' => wp_nav_menu( array( 'theme_location' => 'rosetta_main', 'container' => false, 'echo' => false ) ),
);


require WPORGPATH . 'header.php';

?>
<div class="outer" id="mid-wrapper">
	<div class="wrapper">
		<div class="section">
			<?php echo body_class(); ?>
		</div>
	</div>
</div>

<?php
	if ( is_home() ) {
?>

<div class="make-welcome">
	<div class="column welcome">
		<p>Welcome to the official blog of the translators team for the WordPress open source project.</p>
		<p>This is where we discuss all things related to translating WordPress. Follow our progress with general updates, status reports, and the occasional debate. We’d love for you to help out.</p>
	</div>
	<div class="column">
		<h4>Do you want to contribute?</h4>
		<p>You can help translating WordPress to your language at any time. Just <a href="https://translate.wordpress.org/login">log in to the translation platform with your WordPress.org account</a>,&nbsp;and suggest translations. If you want to help in managing and validating translations, please make sure to get in touch with the existing language team first.</p>
		<h4>Don’t see your language?</h4>
		<p>Request support for it by following <a href="https://make.wordpress.org/polyglots/handbook/translating/requesting-a-new-locale/">this guide</a>. We’ll have you up and running in no time.</p>
	</div>
	<div class="column">
		<h4>Posting here</h4>
		<p>In order to post to this site, you will need to <a href="https://make.wordpress.org/polyglots/wp-login.php?redirect_to=https://make.wordpress.org/polyglots/">log in with your wordpress.org account</a>. Note that your very first post may take a while to show up, as it is moderated; don’t create duplicates. Also, make sure to follow our <a href="https://make.wordpress.org/polyglots/tag-policy/">tag policy</a> when posting.</p>
		<h4>Archives</h4>
		<p>Looking for the archives of the old mailing list? They are <a href="http://lists.automattic.com/pipermail/wp-polyglots/">right here</a>. Use Google to search them, with the “site:” parameter.</p>
	</div>
</div>

<?php } ?>

<?php get_sidebar(); ?>

