<?php
/**
 *  @name index.php
 *  @author Vaelia
 * @version 1.0.0
 * @abstract Main file for cpam-one theme
 */
//insert wordpress headers
get_header();
?>
<main>
    <section class="row">
        <?php
            if(have_posts()) {
                $posts=get_posts();
                foreach($posts as $post) {
                    setup_postdata($post);
                    ?>
                    <article class="col-md-6 col-12">
                        <header>
                            <h2><?php echo the_title();?><h2>
                        </header>
                        <?php echo the_content(); ?>
                    </article>

                    <?php    } // fin foreach 
            }      
            else
            { ?>
                <div class="alert alert-warning">
                    Désolé aucun post à afficher
                </div>
          <?php  } // fin if ?>
    </section>
</main>
<?php 
get_footer();
 ?>