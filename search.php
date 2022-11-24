<?php

/**
 * The search template file
 *
 * This is the search template file in a WordPress theme
 * It is used to display the results of a search
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */
?>

<h1 class="trace">search-page.php<h1>

<?php

get_header();

?>
    <main class="site__main">
    <div class="search-info">
    <h2>Resultat de la recherche</h2>
    <?php
            global $wp_query;
            $total_results = $wp_query->found_posts;
    ?>
    <p>Le nombre d'artcles trouvé:<?php echo" ".$total_results; ?></p>
    <section class="liste">
    </div>

    <?php
		if ( have_posts() ) :
            while ( have_posts() ) :
				the_post();?>
        <article class="liste__search">
                <h2><a href="<?php the_permalink();?>">
                <?php the_title(); ?></a></h2>

 
                <!-- <h2>Couriel:<?php //the_field('couriel'); ?></h2>
                <h2>Date de debue:<?php //the_field('date'); ?></h2>
                <h2>Place pour trouve:<?php //the_field('carte'); ?></h2>  -->
               


                <?= wp_trim_words(get_the_excerpt(), 30, " ->"); ?>

                <?php
                $tableau = get_the_category();

                foreach($tableau as $cle){
                  if($cle->slug == "galerie"){
                    $boolGalerie = true;
                  };
       
                }
                if($boolGalerie == true){
                  //the_content();
                }else{
                  //echo wp_trim_words(get_the_excerpt(), 10, "...");
                }
                ?>

        </article>

            <?php endwhile; ?>
        <?php endif; ?>
        </section>



    </main>    
<?php 

get_footer();

?>
</html>





