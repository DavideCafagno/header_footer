<style>
    .softgray {
        background: rgba(124, 124, 124, 0.2);
    }
</style>
<div class="container-fluid">
    <div class="row bg-secondary py-3 border-top border-5 border-light" style="box-shadow: 0px 6px 13px 0 gray">
        <div id="carouselExampleControlsNoTouching" class="carousel slide text-center" data-bs-touch="false">
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-around mx-5">
                        <div class="btn btn-danger py-2 py-sm-4 px-1 px-sm-2 px-md-3 px-lg-5 rounded">Sponsor A</div>
                        <div class="btn btn-danger py-2 py-sm-4 px-1 px-sm-2 px-md-3 px-lg-5 rounded">Sponsor B</div>
                        <div class="btn btn-danger py-2 py-sm-4 px-1 px-sm-2 px-md-3 px-lg-5 rounded">Sponsor C</div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around mx-5">
                        <div class="btn btn-danger py-2 py-sm-4 px-1 px-sm-2 px-md-3 px-lg-5 rounded">Sponsor D</div>
                        <div class="btn btn-danger py-2 py-sm-4 px-1 px-sm-2 px-md-3 px-lg-5 rounded">Sponsor E</div>
                        <div class="btn btn-danger py-2 py-sm-4 px-1 px-sm-2 px-md-3 px-lg-5 rounded">Sponsor F</div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around mx-5">
                        <div class="btn btn-danger py-2 py-sm-4 px-1 px-sm-2 px-md-3 px-lg-5 rounded">Sponsor G</div>
                        <div class="btn btn-danger py-2 py-sm-4 px-1 px-sm-2 px-md-3 px-lg-5 rounded">Sponsor H</div>
                        <div class="btn btn-danger py-2 py-sm-4 px-1 px-sm-2 px-md-3 px-lg-5 rounded">Sponsor I</div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    <div >
        <footer class="row row-cols-1 text-center row-cols-sm-2 row-cols-md-4 softgray py-5 px-3">
            <div class="col mb-3 ">
                <a href="<?php echo get_home_url(); ?>" class="mb-3 link-dark text-decoration-none h2">
                    <?php echo bloginfo('name'); ?>
                </a>
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
        <div class="row py-2 softgray">
            <div class="text-muted text-center text-muted">Theme Creation © 2023</div>
        </div>
    </div>
</div>
