<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <title><?= (!empty($title)) ? $title : '' ?></title>
    <meta name="author" content="<?= (!empty($author)) ? $author : '' ?>" />
    <meta name="owner" content="<?= (!empty($author)) ? $author : '' ?>" />
    <meta name="description" lang="es-MX" content="<?= (!empty($descripcion)) ? $descripcion : '' ?>" />
    <meta name="keywords" content="<?= (!empty($keywords)) ? $keywords : '' ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="og:title" content="<?= (!empty($title)) ? $title : '' ?>" />
    <meta property="og:type" content="<?= (!empty($type)) ? $type : '' ?>" />
    <meta property="og:description" content="<?= (!empty($descripcion)) ? $descripcion : '' ?>" />
    <meta property="og:image" content="<?= (!empty($imagen)) ? $imagen : '' ?>" />
    <link rel="image_src" type="image/webp" href="<?= (!empty($imagen)) ? $imagen : '' ?>" title="<?= (!empty($author)) ? $author : '' ?>" />
    <meta property="og:url" content="<?= (!empty($canonical)) ? $canonical : '' ?>" />
    <meta name="robots" content="index,follow" />
    <link rel="canonical" href="<?= (!empty($canonical)) ? $canonical : '' ?>" />
    <link rel="shortcut icon" type="image/ico" href="<?= (!empty($icono)) ? $icono : '' ?>" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/ee84617fc7.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://getbootstrap.com/docs/5.3/examples/dashboard/" rel="canonical">
    <link href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link async rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>public/plugins/css/main.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link async rel="stylesheet" type="text/css" media="screen" href="//cdn.datatables.net/2.2.1/css/dataTables.dataTables.min.css" />
    <script src="//cdn.datatables.net/2.2.1/js/dataTables.min.js"></script>
    <?= (!empty($style_main)) ? $style_main : '' ?>
    <?= (!empty($css)) ? $css : '' ?>
    <?php $base_url = base_url();
    if ($base_url != "http://192.168.1.73/boutique-blue/") { ?>
        <!-- Google Tag Manager -->
        <?= (!empty($tag)) ? $tag : '' ?>
        <!-- End Google Tag Manager -->
    <?php } else {
    } ?>
</head>

<body>
    <?php if ($base_url != "http://192.168.1.73/boutique-blue/") { ?>
        <?= (!empty($tag_iframe)) ? $tag_iframe : '' ?>
    <?php } else {
    } ?>
    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="<?= base_url() ?>">
            Boutique | Blue
        </a>
        <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item text-nowrap">
                <button aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search" class="nav-link px-3 text-white" data-bs-target="#navbarSearch" data-bs-toggle="collapse" type="button">
                    <svg class="bi">
                        <use xlink:href="#search">
                        </use>
                    </svg>
                </button>
            </li>
            <li class="nav-item text-nowrap">
                <button aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation" class="nav-link px-3 text-white" data-bs-target="#sidebarMenu" data-bs-toggle="offcanvas" type="button">
                    <svg class="bi">
                        <use xlink:href="#list">
                        </use>
                    </svg>
                </button>
            </li>
        </ul>
        <div class="navbar-search w-100 collapse" id="navbarSearch">
            <input aria-label="Search" class="form-control w-100 rounded-0 border-0" placeholder="Search" type="text">
            </input>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                <div aria-labelledby="sidebarMenuLabel" class="offcanvas-md offcanvas-end bg-body-tertiary" id="sidebarMenu" tabindex="-1">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="sidebarMenuLabel">
                            Boutique | Blue
                        </h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" type="button">
                        </button>
                    </div>
                    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a aria-current="page" class="nav-link d-flex align-items-center gap-2 active" href="<?= base_url() ?>">
                                    <svg class="bi">
                                        <use xlink:href="#house-fill">
                                        </use>
                                    </svg>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url() ?>productos">
                                    <svg class="bi">
                                        <use xlink:href="#cart">
                                        </use>
                                    </svg>
                                    Productos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url() ?>ventas">
                                    <svg class="bi">
                                        <use xlink:href="#file-earmark">
                                        </use>
                                    </svg>
                                    Ventas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url() ?>apartados">
                                    <svg class="bi">
                                        <use xlink:href="#file-earmark">
                                        </use>
                                    </svg>
                                    Apartados
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url() ?>clientes">
                                    <svg class="bi">
                                        <use xlink:href="#people">
                                        </use>
                                    </svg>
                                    Clientes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url() ?>gastos/">
                                    <svg class="bi">
                                        <use xlink:href="#graph-up">
                                        </use>
                                    </svg>
                                    Gastos
                                </a>
                            </li>
                        </ul>
                        <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                                <span>
                                    Saved reports
                                </span>
                                <a aria-label="Add a new report" class="link-secondary" href="<?= base_url() ?>">
                                    <svg class="bi">
                                        <use xlink:href="#plus-circle">
                                        </use>
                                    </svg>
                                </a>
                            </h6>
                            <ul class="nav flex-column mb-auto">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url() ?>">
                                        <svg class="bi">
                                            <use xlink:href="#file-earmark-text">
                                            </use>
                                        </svg>
                                        Current month
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url() ?>">
                                        <svg class="bi">
                                            <use xlink:href="#file-earmark-text">
                                            </use>
                                        </svg>
                                        Last quarter
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url() ?>">
                                        <svg class="bi">
                                            <use xlink:href="#file-earmark-text">
                                            </use>
                                        </svg>
                                        Social engagement
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url() ?>">
                                        <svg class="bi">
                                            <use xlink:href="#file-earmark-text">
                                            </use>
                                        </svg>
                                        Year-end sale
                                    </a>
                                </li>
                            </ul>
                            <hr class="my-3">
                                <ul class="nav flex-column mb-auto">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url() ?>">
                                            <svg class="bi">
                                                <use xlink:href="#gear-wide-connected">
                                                </use>
                                            </svg>
                                            Settings
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url() ?>">
                                            <svg class="bi">
                                                <use xlink:href="#door-closed">
                                                </use>
                                            </svg>
                                            Sign out
                                        </a>
                                    </li>
                                </ul>
                            </hr> -->
                    </div>
                </div>
            </div>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">