<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		This post is password protected. Enter the password to view comments.
	<?php
		return;
	}
?>

<div class="main">

	<?php if ( have_comments() ) : ?>
		
		<h2 class="bar" id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?></h2>

		<div class="navigation">
			<div class="next-posts"><?php previous_comments_link() ?></div>
			<div class="prev-posts"><?php next_comments_link() ?></div>
		</div>

		<ol class="commentlist">
			<?php wp_list_comments('avatar_size=100&type=comment'); ?>
		</ol>

		<div class="navigation">
			<div class="next-posts"><?php previous_comments_link() ?></div>
			<div class="prev-posts"><?php next_comments_link() ?></div>
		</div>
		
	 <?php else : // this is displayed if there are no comments so far ?>

		<?php if ( comments_open() ) : ?>
			<!-- If comments are open, but there are no comments. -->
			<h2>Be the first to comment!</h2>

		 <?php else : // comments are closed ?>
			<h2>Comments are closed.</h2>

		<?php endif; ?>
		
	<?php endif; ?>

</div>

<?php if ( comments_open() ) : ?>

<div id="respond" class="main">

	<h2 class="bar"><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h2>

	<div class="cancel-comment-reply">
		<?php cancel_comment_reply_link(); ?>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

		<?php if ( is_user_logged_in() ) : ?>

			<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

		<?php else : ?>

			<div>
				<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" placeholder="Name <?php if ($req) echo "(required)"; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
			</div>

			<div class="comment-spacer">
				<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="Email <?php if ($req) echo "(required)"; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
			</div>

			<div>
				<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" placeholder="Website" size="22" tabindex="3" />
			</div>

			<div class="clear"></div>

		<?php endif; ?>

			<textarea name="comment" id="comment" placeholder="Enter Your Comment" cols="58" rows="10" tabindex="4"></textarea>

			<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
			<?php comment_id_fields(); ?>
		
		<?php do_action('comment_form', $post->ID); ?>

	</form>

	<?php endif; // If registration required and not logged in ?>
	
</div>

<?php endif; ?>