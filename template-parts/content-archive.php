<div class="container">

    <div class="mb-5">

        <div>
            <!-- Muestra la imagen destacada del contenido a mostrar -->
            <?php the_post_thumbnail_url(); ?>
            <!-- Pasamos el string thumbnail, para reducir el tamaño de las imagenes destacadas al que este seleccionado en el panel de WP -->
            <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">

            <div>
                <h3 class="mb-1">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>

            </div>
            <div>
                <?php
                the_excerpt();
                ?>
            </div>
            <a href="<?php the_permalink(); ?>">Leer más &rarr;</a>
        </div>
    </div>
</div>