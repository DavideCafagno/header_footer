<style>
    .softgray {
        background: rgba(124, 124, 124, 0.2);
    }
</style>
<div class="container-fluid">

<?php get_template_part('template/sponsor-bar'); ?>

    <div>
        <footer class="row row-cols-1 text-center row-cols-sm-2 row-cols-md-4 softgray py-5 px-3">
            <div class="col mb-3 ">
                <a href="<?php echo get_home_url(); ?>" class="mb-3 link-dark text-decoration-none h2">
                    <?php echo bloginfo('name'); ?>
                </a>
                <?php if(has_custom_logo()):?>
                    <br><a class="navbar-brand mt-2" href="<?php echo get_home_url();?>"><img class="rounded-pill mt-4 shadow" style="max-width: 70%;" src="<?php echo wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ))[0]; ?>"></a>
                <?php endif;?>
            </div>
            <div class="col mb-3 d-block d-sm-none">
                <hr class="d-block d-sm-none mx-5">
            </div>
            <div class="accordion accordion-flush d-block d-sm-none " id="accordionFlushExample">
                <div class="accordion-item col mb-3">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                            <h4 class="text-danger fw-bold">Section 1</h4>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse show"
                         aria-labelledby="flush-headingOne"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item col mb-3">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                            <h4 class="text-danger fw-bold">Section 2</h4>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item col mb-3">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                            <h4 class="text-danger fw-bold">Section 3</h4>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                         aria-labelledby="flush-headingThree"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col my-3 border-start  border-secondary d-none d-sm-block">
                <h4 class="text-danger fw-bold">Section 1</h4>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col my-3 border-start  border-secondary d-none d-sm-block">
                <h4 class="text-danger fw-bold">Section 2</h4>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col my-3 border-start  border-secondary d-none d-sm-block">
                <h4 class="text-danger fw-bold">Section 3</h4>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

        </footer>
        <div class="row py-2 softgray justify-content-center">
            <div class="col-7 col-sm-4 col-md-3 col-lg-3 col-xl-2 my-1 text-muted text-center text-muted"><?php echo bloginfo('name') ?> © 2023</div>
            <div class="col-7 col-sm-3 col-md-2 my-1 text-muted text-center text-muted">Privacy Policy</div>
            <div class="col-7 col-sm-3 col-md-2 my-1 text-muted text-center text-muted"><?php echo __('Maps','davidtheme'); ?></div>
        </div>
    </div>
</div>
