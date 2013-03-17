<?php
/**
 * Template Name: Left Sub Nav Page Template
 * Description: A Page Template with a subnavigation on the left side
 * @package required+ Foundation
 * @since required+ Foundation 0.5.0
 */

get_header(); ?>

    <!-- Row for main content area -->
    <div id="content" class="row full">

        <div id="main" class="ten columns push-two" role="main">
            <div class="post-box">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'page' ); ?>

                    <?php
                        /**
                         * Seriously I never used comments on a page, what for?
                         */
                        //comments_template( '', true );
                    ?>

                <?php endwhile; // end of the loop. ?>

            </div>
        </div><!-- /#main -->

        <aside id="side-nav" class="two columns pull-ten" role="complementary">
            <?php
                if ( function_exists( 'required_side_nav' ) )
                    required_side_nav();
            ?>
        </aside><!-- /#sidebar -->

    </div><!-- End Content row -->

<?php get_footer(); ?>