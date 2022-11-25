<?php
/*
Template Name: Search Page
*/
?>
<?php
get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<?php get_search_form(); ?>
        <?php
		if ( have_posts() ) :
            while ( have_posts() ) :
				the_post(); 
                the_title('<h1>','</h1>');
                echo wp_trim_words(get_the_excerpt(),10," → "); 
            endwhile;
        endif;
    ?> 






		
            <a href="/wordpress/search-page/" title="Search Page">Search Page</a>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();