<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */
?>

<h1 class="trace">front-page.php<h1>

<?php

get_header();

?>
    <main class="site__main">
        <section class="liste">
    <?php
		if ( have_posts() ) :
            while ( have_posts() ) :
				the_post();?>
                <article class="liste__cours">
                <span></span>
                <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                <h2>Durée de cours:<?php the_field('duree'); ?></h2>
                <h2>courriel:<?php the_field('email'); ?></h2>
                <h2>evaluation de prof: <?php the_field('radio'); ?></h2>
                <h2>moyenne:<?php the_field('valeurs'); ?></h2>
                <?php the_content(null,true); ?>
                </article>
                <?php endwhile; ?>
        <?php endif; ?>
        </section>
    </main>    
<?php 

get_footer();

?>
</html>

