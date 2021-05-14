<div class="mt-3">
    <div>
        <h2>

            <?php
            if (!have_comments()) {
                echo "Deja un comentario";
            } else {
                echo get_comments_number() . " Comentarios";
            }
            ?>

        </h2>

    </div>

    <div>

        <?php
        wp_list_comments(
            array(
                'avatar_size' => 120,
                'style' => 'div'
            )
        )
        ?>

    </div>

</div>
<hr>

<?php
if (comments_open()) {
    comment_form(
        array(
            'class_form' => '',
            'title' => '<h2 id="reply-title" class="comment-reply-title>"',
            'title_reply_after' => '</h2>'
        )

    );
}
?>