<?php get_header();


//get_template_part('content', 'slide');

?>

<article class="content px-3 py-5 p-md-5">

    <?php

    if (have_posts()) {

        while (have_posts()) {
            the_post();
            echo get_the_content();
        }
    }


    ?>





</article>


<?php get_footer(); ?>