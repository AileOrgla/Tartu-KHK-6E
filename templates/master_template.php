<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= BASE_URL ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title><?= PROJECT_NAME ?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/components/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/components/bootstrap/3.3.0/css/style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
            min-height: 2000px !important;
            padding-top: 70px;
        }
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


</head>

<body>

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li <?= $controller == 'welcome' ? 'class="active"' : '' ?>"><a href="welcome">Avaleht</a></li>
                <li <?= $controller == 'about' ? 'class="active"' : '' ?>"><a href="about">Meist</a></li>
                <li <?= $controller == 'calendar' ? 'class="active"' : '' ?>"><a href="calendar">Kalender</a></li>
                <li <?= $controller == 'gallery' ? 'class="active"' : '' ?>"><a href="gallery">Galerii</a></li>
                <li <?= $controller == 'contact' ? 'class="active"' : '' ?>"><a href="contact">Kontakt</a></li>
                <!--
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                -->
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <? if (!file_exists("views/$controller/{$controller}_$action.php")) error_out('The view <i>views/' . $controller . '/' . $controller . '_' . $action . '.php</i> does not exist. Create that file.'); ?>
    <? @require "views/$controller/{$controller}_$action.php"; ?>

    <div class="footer">
        <div class="row">
            <div class="col-md-3 hidden-sm" style="background-color: rgba(0, 136, 203, 0.74902);">
                Kopli 1, Tartu, Tartumaa, Eesti
            </div>
            <div class="col-md-9">
                © 2014 by Tõnis Vähi.
            </div>
        </div>
    </div>
</div>
<!-- /container -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/components/jquery/1.10.2/jquery-1.10.2.min.js"></script>
<script src="assets/components/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>
