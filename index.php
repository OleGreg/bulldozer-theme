
<?php get_header(); ?>

    <div class="row">

        <div class="col-sm-8 blog-main">

            <?php if(have_posts()) : ?>

                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('content', get_post_format()); ?>
                <?php endwhile; ?>

            <?php else : ?>
                <p> <?php __('There are no blog posts to display'); ?> </p>
            <?php endif; ?>

            <?php
            if (function_exists("wp_bs_pagination"))
                {
//                    wp_bs_pagination($the_query->max_num_pages);
                    wp_bs_pagination();
                }
            ?>

        </div><!-- /.blog-main -->

<?php get_footer(); ?>
