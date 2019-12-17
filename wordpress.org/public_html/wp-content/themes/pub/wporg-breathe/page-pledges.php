<?php

/*
 * Template Name: Pledges
 *
 * Note: Pledges is a simulated page, rather than actually existing in the database; see `mu-plugins/make-network/team-pledges.php`.
 */

namespace WordPressdotorg\Make\Breathe;
use WordPressdotorg\Make\Pledges;

defined( 'WPINC' ) || die();

get_header();

$current_team = Pledges\get_current_team();
$contributors = Pledges\get_team_contributors(
	$current_team->post_name,
	$current_team->post_title
);

?>

<div id="primary" class="content-area">
	<?php // Note: if this has `id="content"` then Breathe will overwrite anything inside it. ?>
	<div class="site-content template-pledges" role="main">

		<header class="page-header">
			<h1 class="page-title">
				<?php
					esc_html_e( 'Pledged Contributors', 'wporg-5ftf' );
				?>
			</h1>
		</header>

		<article id="post-pledges" class="page type-page status-publish hentry">
			<div class="entry-content">
				<p>
					These people have pledged to the contribute to the <?php echo esc_html( $current_team->post_title ); ?> team every week. When you need help with a task or project, reach out to them!
				</p>

				<p>
					If you'd like to add yourself to this list, you can <a href="https://wordpress.org/five-for-the-future/">sign up on the Five for the Future site</a>.
				</p>

				<?php

				if ( $contributors ) {
					foreach( $contributors as $contributor ) {
						// Not using get_template_part() because the included file needs access to `$contributor`.
						require __DIR__ . '/content-pledge.php';
					}

				} else {
					echo wp_kses_post( sprintf(
						__( 'Nobody has indicated that they\'re sponsored to contribute to this team. If you are, please <a href="%s">update your profile</a> to indicate that.', 'wporg-5ftf' ),
						'https://profiles.wordpress.org/me/profile/edit/group/5/'
					) );
				}

				?>
			</div>
		</article>

	</div>
</div>

<?php

get_sidebar();
get_footer();
