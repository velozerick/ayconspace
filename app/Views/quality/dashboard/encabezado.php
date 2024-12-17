<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap and font links -->
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables and PDFMake links -->
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.1.5/b-3.1.2/b-colvis-3.1.2/b-html5-3.1.2/b-print-3.1.2/sp-2.3.2/datatables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.1.5/b-3.1.2/b-colvis-3.1.2/b-html5-3.1.2/b-print-3.1.2/sp-2.3.2/datatables.min.js"></script>

    

    <!-- Font Awesome and Bootstrap Icons links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://qty.ayconcursos.space/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap JavaScript bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Quality Defect Database</title>
</head>

<body>
<div class="main-container d-flex"> 
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
                <h1 class="fs-4"> <span
                        class="text-white">Quality Defect Database</span></h1>
                        <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i
                        class="bi bi-layout-sidebar"></i></button>        
                    </div>

    <ul class="nav flex-column px-2">
        <li class="nav-item active"><a href="<?php echo site_url('databases/home'); ?>" class="text-decoration-none px-3 py-2 d-block">
            <i class="bi bi-database-fill"></i> Databases</a></li>
        <li class="nav-item"><a href="<?php echo site_url('dashboard/inicio'); ?>" class="text-decoration-none px-3 py-2 d-block">
            <i class="bi bi-graph-up-arrow"></i> Dashboard</a></li>
                </ul>
                    <ul class="nav">
                <li class="footer-box px-2 pt-3 pb-4 d-flex">
                    <a href="<?= site_url('/login') ?>">
                        <span class="bi bi-box-arrow-right"></span>
                    </a>
                </li>
            </ul>
        
            </div>

            <div class="content">
                <nav class="navbar navbar-expand-md navbar-light bg-light">
                    <div class="container-fluid">
                        <div class="d-flex justify-content-between d-md-none d-block">
                            <button class="btn px-1 py-0 open-btn me-2"><i class="bi bi-layout-sidebar"></i></button>
                            <a class="navbar-brand fs-4" href="#"><span class="bg-dark rounded px-2 py-0 text-white">QD</span></a>
                        </div>
                        
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav mb-2 mb-lg-0">
        <li>
            <?php
            $session = session();
            $user = $session->get('id');
            ?>
            </li>
            <h6 class="welcome-message"><i class="bi bi-person"> </i><?= htmlspecialchars($user) ?></h6>
    </ul>
</div>
                </div>
            </nav>