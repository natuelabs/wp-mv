<?php
/**
 * Post Cat & Title
 */
?>

<?php if( has_category() ) : ?>
	<p class="post-cat text-light"><?php the_category( ', ' ); ?></p>
<?php endif; ?>

<?php if( is_single() ) : ?>
	<h1 class="post-title"><?php the_title(); ?></h1>
<?php else : ?>
	<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php endif; ?>
