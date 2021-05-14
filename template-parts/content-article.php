<div class="container">
    <header class="content-header">
        <div class="mb-3">
            <span class="mb-3"><?php the_date(); ?></span>

            <?php
            the_tags('<span class="mb-3"><i class="fa fa-tag"></i>', '</span><span class="mb-3"><i class="fa fa-tag"></i>', '</span>')
            ?>
            
            <span class="mb-3"><i class="fa fa-coment"></i><?php comments_number(); ?></span>
        </div>


    </header>



</div>

<?php

the_content();

?>
<?php
comments_template();

?>