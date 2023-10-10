<?php
get_header(); ?>
    <div style="min-height: 75%" class="mx-1 mx-sm-5 justify-content-center justify-content-sm-start">
        <div style="width: fit-content" class="text-center text-sm-start px-1 px-sm-4 p-1 border border-2 rounded mx-3 mx-sm-5">
            <span class="px-4 text-success fw-bold"><?php echo sprintf(__("Search result for: '<i>%s</i>'", "davidtheme"),$_REQUEST['s']); ?></span>
        </div>
        <?php if (have_posts()):
            while (have_posts()): the_post(); ?>
                <?php get_template_part('template/post-card') ?>
            <?php endwhile;
        else:?>
            <div class="display-2 p-5 m-y-5 text-lg-left text-center"><?php echo __("No content for searched criteria..",'davidtheme');  ?></div>
        <?php endif; ?>
    </div>
<?php get_footer();