<?php global $post; ?>
<div  class="container-fluid">
    <div class="my-5 row d-flex justify-content-center ">
        <div class="col-11 col-md-9 col-lg-7 shadow p-3 rounded">
            <div class="card-header mb-4">
                <a class="display-3 text-danger fw-bold"
                   href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
            </div>
            <div class="card-body">
                <?php echo get_the_excerpt(); ?>
                <div class="btn-group float-end mt-5">
                    <div class="btn btn-secondary btn-lg"><a class="h5"
                                                             href="<?php echo get_the_permalink(); ?>">VIEW</a></div>
                    <?php if (current_user_can('administrator')): ?>
                        <div class="btn btn-danger btn-lg"><a class="h5"
                                                              href="<?php echo get_edit_post_link(); ?>">EDIT</a></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>