<!doctype html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-52115242-14"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-52115242-14');
    </script>
    <meta charset="utf-8">
    <title>Unknown project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Not yet selected">
    <link href="assets/img/favicon.ico" rel="icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>

    <div class="layout layout-nav-side">
        <div class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">

            <!-- <a class="navbar-brand" href="index.html">
                <img alt="Pipeline" src="assets/img/logo.svg" />

            </a> -->
            <a class="media media-member" href="profile.php">
                <img alt="Claire Connors" src="assets/img/avatar-male-1.jpg" class="avatar avatar-lg">
                <div class="media-body">
                    <h6 class="mb-0 H6-filter-by-text text-white" data-filter-by="text">Murtaza JAFARI</h6>
                    <span data-filter-by="text" class="text-body SPAN-filter-by-text">Developer</span>
                </div>
            </a>
            
            <div class="collapse navbar-collapse flex-column" id="navbar-collapse">
                <h5 class="text-large text-muted">Quick Links</h5>
                <ul class="navbar-nav d-lg-block">

                    <li class="nav-item mb-1">
                        <div class="d-flex align-items-center">
                            <i class="material-icons mr-3">event</i>
                            <a class="nav-link text-white" href="events.php">Events</a>
                        </div>
                    </li>
                    <li class="nav-item mb-1">
                        <div class="d-flex align-items-center">
                            <i class="material-icons mr-3">room</i>
                            <a class="nav-link text-white" href="single_event.php">Single Event</a>
                        </div>
                    </li>

                    <li class="nav-item mb-1">
                        <div class="d-flex align-items-center">
                            <i class="material-icons mr-3">room</i>
                            <a class="nav-link text-white" href="preview_page.php">Preview Page</a>
                        </div>
                    </li>
                   
                    <li class="nav-item mb-1">
                        <div class="d-flex align-items-center">
                            <i class="material-icons mr-3">build</i>
                            <a class="nav-link text-white" href="account-setting.php">Account Setting</a>
                        </div>
                    </li>
                </ul>
                <hr>
                
                <div>
                    <form>
                        <div class="input-group input-group-dark input-group-round">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">search</i>
                                </span>
                            </div>
                            <input type="search" class="form-control form-control-dark" placeholder="Search"
                                aria-label="Search app">
                        </div>
                    </form>
                    <div class="dropdown mt-2">
                        <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="newContentButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Add New
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="team.php">Team</a>
                            <a class="dropdown-item" href="project.php">Project</a>
                            <a class="dropdown-item" href="task.php">Task</a>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
        