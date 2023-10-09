<?php get_header(); ?>
<div style="min-height: 75%" class="mx-1 mx-sm-5 d-flex justify-content-center">
    <div style="width: fit-content" class="text-center text-sm-start px-1 px-sm-4 p-1 border border-2 rounded">
        <span class="px-4" ><?php global $post_type;  echo "Archive : '" . $post_type . "'"; ?></span>
    </div>
    <?php if (have_posts()):
        while (have_posts()): the_post(); ?>
            <?php get_template_part('template/post-card') ?>
        <?php endwhile;
    else:?>
        <div class="display-2 p-5 m-y-5 text-lg-left text-center"><?php echo "No content to display.."; ?></div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
