<?php
get_header();
?>
<section class="">
<?php
while(have_posts()):
    the_post();
?>
<h1><?php the_title();?> </h1>
<?php endwhile;?>
</section>
