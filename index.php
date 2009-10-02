<?php	get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<div class="info">
			<span class="date"><?php the_time(__('F jS, Y')) ?></span>
			<?php if ($options['author']) : ?><span class="author"><?php the_author_posts_link(); ?></span><?php endif; ?>

			<span class="comments"><?php comments_popup_link('No comments', '1 comment', '% comments', '', 'Comments off'); ?></span>
		</div>
		<?php the_content('<br /><br />Continue Reading &raquo;'); ?>

<?php endwhile; ?>

<?php else : ?>
	<h2>Not Found</h2>
	<p>Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>


<?php	get_footer(); ?>
