<!-- start index.php file -->

<?php get_header() ?>

<!-- Start posts -->


<div class="container">
    <div class="row">

        

        <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>
                    
                        <div class="col-sm-6">
                            <div class="main-post">

                                <h3 class="post-title">
                                    <a href="<?php the_permalink() ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <span class="post-publish-date"><?php the_time( 'F j, Y' ); ?></span>

                                <?php the_post_thumbnail('medium_large', ['class' => 'img-responsive img-thumbnail responsive--full', 'title' => 'Feature image']);?>

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
            if(get_previous_posts_link()){
                previous_posts_link('prev');
            }else{
                echo 'No Post' ;
            }

            if(get_next_posts_link()){
                next_posts_link('next');
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