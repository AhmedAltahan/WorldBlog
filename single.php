<!-- start index.php file -->

<?php get_header() ?>

<!-- Start posts -->


<div class="container">
    <div class="row">

        

        <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>
                        
                        <div class="col">
                            <div class="main-post single-post">
                            <?php edit_post_link('Edit') ?>
                                <h3 class="post-title">
                                    <a href="<?php the_permalink() ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <span class="post-publish-date"><?php the_time( 'F j, Y' ); ?></span>

                                <?php the_post_thumbnail('large', ['class' => 'img-responsive  ', 'title' => 'Feature image']);?>

                                <p class="post-paragraph">
                                    <?php the_content('Read More ..') ?>
                                </p>
                                <span class="post-comment"><?php comments_popup_link('No Comments','1 Comment','% Comments' , '' , 'Comments Blocked') ?></span>
                                <span class="post-author"><?php the_author_posts_link(); ?></span>
                                <span class="post-tags"><i class="fa fa-tags" aria-hidden="true"></i> <?php the_category(' | ') ?></span>
                            </div>
                        </div>
                        
                    <?php
                endwhile; 
            endif;
            

            echo '<div class="post-pagination">' ;
            if(get_previous_post_link()){
                previous_post_link('prev');
            }else{
                echo 'No Post' ;
            }

            if(get_next_post_link()){
                next_post_link('next');
            }else{
                echo 'No Post' ;
            }
            echo '</div>' ;
            
        
        ?>

        
    </div>

</div>

<!-- End posts -->

<?php get_footer() ?>

<!-- End index.php file -->