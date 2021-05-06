<?php

    /* Template Name: No Header & Footer */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="main">

        <div class="voss-page-content">
    		<div class="container">
    			<?php
    				while ( have_posts() ) : the_post();

    					the_content();

    				endwhile;
    			?>
    		</div>
    	</div>

</div><!-- #main -->

<?php wp_footer(); ?>

</body>
</html>
