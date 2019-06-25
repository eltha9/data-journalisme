<?php
/**
 * Template à utiliser pour afficher les commentaires
 */
?>

<section id="comments" class="row">
    <div class="columns medium-12">
        <div class="comments-container">
            <div class="row">
                <div class="columns medium-8 medium-centered">
                    <?php
                    // S'il y a des commentaires
                    if ( have_comments() ) :
                    ?>
                    <ul class="comments-list">
                        <?php
                            // affichage de la liste des commentaires
                            wp_list_comments( array(
                                'style'       => 'ul',
                                'avatar_size' => 0,
                                'type'=> 'comment',
                            ) );
                        ?>
                    </ul><!-- .comment-list -->
                    <?php endif; // have_comments() ?>
                    <?php
                        // Information à afficher si les commentaires sont fermés
                        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
                    ?>
                        <p class="no-comments">Les commentaires sont fermés</p>

                    <?php endif; ?>

                    <?php
                        // création du formulaire de commentaire.
                        // Adaptation du texte à afficher en fonction de la création d'un commentaire
                        // ou la réponse à un autre commentaire
                        if(isset($_GET['replytocom']))
                        {
                            $args=array(
                            'logged_in_as'=>'<p class="logged-in-as">' . sprintf( __( 'Répondre au commentaire en tant que :  %1$s' ), $user_identity ) . '</p>',
                                'title_reply' => '',
                                'comment_notes_before'=>'',
                                'label_submit'=>'Publier',
                                'title_reply_to'    => '',

                            );
                        }
                        else{
                            $args=array(
                                'logged_in_as' =>'<p class="logged-in-as">' . sprintf( __( 'Publier en tant que :  %1$s' ), $user_identity ) . '</p>',
                                'title_reply'  => '',
                                'comment_notes_before'=>'',
                                'label_submit' =>'Publier',
                                'title_reply_to' => '',
                            );
                        }
                        comment_form($args);
                    ?>
                    <div class="clear clearboth"></div>
                </div>
            </div>
        </div>
    </div>
</section>


