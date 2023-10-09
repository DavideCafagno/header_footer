<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<style>
    html {
        margin: 5px 0 !important;
    }

    .light-up {
        transition: 0.2s;
    }

    .light-up:hover {
        cursor: pointer;
        text-shadow: 0 0 10px 10px black;
        transform: scale(102%);
    }
    .bglightgray{
        background: rgb(215, 215, 215);
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bglightgray p-2 fw-bold border-bottom border-2 border-secondary d-flex flex-row-reverse mt-0" style="position: sticky; top:0; z-index:11;">
    <span class="light-up mx-1 mx-sm-5" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"><?php echo bloginfo('name') ?></span>
</nav>

<nav class="navbar navbar-expand-lg navbar-light py-3 mb-4" style="box-shadow: 0 -2px 13px 0 gray;">
    <div class="container-fluid">
        <a class="navbar-brand light-up me-5" href="<?php echo get_home_url();?>"><?php echo bloginfo('name') ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                $lang = [];
                foreach (wp_get_nav_menu_items('top-menu') as $item): ?>
                    <?php if ($item->object != 'language_switcher'): ?>
                        <li class="nav-item light-up mx-2">
                            <a class="nav-link active" aria-current="page"
                               href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
                        </li>
                    <?php else:
                        $lang[] = $item;
                    endif; ?>
                <?php endforeach; ?>

                <?php if (!empty($lang)): ?>
                    <li class="nav-item dropdown light-up">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Language
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($lang as $l): ?>
                                <li class="d-flex justify-content-between"><a class="dropdown-item col"
                                                                              href="<?php echo $l->url; ?>"><?php echo $l->title; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endif; ?>

            </ul>
            <form id="searchForm" class="d-flex my-1 ">
                <input id="search" class="form-control me-2" type="search" placeholder="Search"
                       aria-label="Search"
                       required>
                <button class="btn btn-success" onclick="search_fun(search.value)" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<script>
    function search_fun(val) {
        let event = this.event;
        let form = document.getElementById('searchForm');
        form.classList.add('was-validated');
        event.preventDefault();
        event.stopPropagation();
        if (form.checkValidity()) {
            location.href = "<?php echo get_home_url(); ?>/?s=" + val;
        }
    }
</script>
