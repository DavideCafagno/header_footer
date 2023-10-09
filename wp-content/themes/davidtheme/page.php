<?php get_header(); ?>
    <div style="min-height: 75%" class="mx-1 mx-sm-5 d-flex justify-content-center">
        <?php if (have_posts()):
            while (have_posts()): the_post(); ?>
                <?php get_template_part('template/post-page') ?>
            <?php endwhile;
        else:?>
            <div class="display-2 p-5 m-y-5 text-lg-left text-center"><?php echo "No content to display.."; ?></div>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>