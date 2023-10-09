<?php get_header(); ?>
<?php global $post; ?>
<div class="container-fluid">
    <div class="my-5 row d-flex justify-content-center ">
        <div class="col-11 col-md-9 col-lg-7 shadow p-3 rounded">
            <div class="card-header mb-4">
                <p class="display-3 text-danger fw-bold"><?php echo get_the_title(); ?></p>
                <?php if (has_post_thumbnail()): ?>
                    <div class="d-flex justify-content-center mb-5"><?php the_post_thumbnail(); ?></div>
                <?php else: ?>
                    <hr class="my-5 mx-5">
                <?php endif; ?>
                <div class="my-5 text-center"><i><?php echo get_the_excerpt(); ?></i></div>
            </div>
            <div class="card-body">
                <?php echo get_the_content(); ?>
                <?php if (current_user_can('administrator')): ?>
                    <div class="btn-group float-end mt-5">
                        <div class="btn btn-danger btn-lg"><a class="h5" href="<?php echo get_edit_post_link(); ?>">EDIT</a></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
