<?php 
get_header();
$args=array(
    "post_type"=>"configurations",
    "posts_per_page"=>-1,
    "orderby"=>"date",
    "order"=>"DESC"
);
$wp_query=new WP_Query($args);?>
<section>
<header>
    <h1> Configurations </h1>
</header>
<table class="table table-stripped table-condensed table-responsive">
<thead>
<tr>
    <th>
        Libellé
    </th>
    <th>
        Année
    </th>
</tr>
</thead>
<tbody>
<?php while($wp_query->have_posts()):
    $wp_query->the_post();?>
    <tr>
    <td class="configuration-title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title();?>
        </a>
    </td>
    <?php $annees=wp_get_post_terms($post->ID,"annees",array("fields"=>"names"));?></td>
    <td> <?php echo implode("",$annees);?> </td>
    </tr>
    <?php
    endwhile;
    wp_reset_query(); ?>
    </tbody>
    </table>
    </section>
    <?php 
get_footer();