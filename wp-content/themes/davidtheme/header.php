<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<header>
    <style>
        html{
            margin:5px 0 !important;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo bloginfo('name') ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php
                    $lang = [];
                    foreach (wp_get_nav_menu_items('top-menu') as $item): ?>
                        <?php if ($item->object != 'language_switcher'): ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                   href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
                            </li>
                        <?php else:
                            $lang[] = $item;
                        endif; ?>
                    <?php endforeach; ?>

                    <?php if (!empty($lang)): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Language
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach ($lang as $l): ?>
                                    <li class="d-flex justify-content-between"><a class="dropdown-item col"
                                           href="<?php echo $l->url; ?>"><?php echo $l->title; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endif; ?>

                </ul>
                <form class="d-flex my-1">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn border-1" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
