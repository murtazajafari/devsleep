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

            <a class="navbar-brand" href="index.html">
                <img alt="Pipeline" src="assets/img/logo.svg" />
            </a>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-block d-lg-none ml-2">
                    <div class="dropdown">
                        <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img alt="Image" src="assets/img/avatar-male-4.jpg" class="avatar" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="profile.php" class="dropdown-item">Profile</a>
                            <a href="account-setting.php" class="dropdown-item">Account Settings</a>
                            <a href="login.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse flex-column" id="navbar-collapse">
                <span class="text-large text-muted">Quick Links</span>
                <ul class="navbar-nav d-lg-block">

                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="account-setting.php">Account Setting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="board.php">Board</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chat.php">Chat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="error.php">Error</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="single-project.php">Single Project</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="task.php">Task</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="team.php">Team</a>
                    </li>
                    
                    
                    <li class="nav-item">

                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-2" aria-controls="submenu-2">Authintication</a>
                        <div id="submenu-2" class="collapse">
                            <ul class="nav nav-small flex-column">

                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="signup.php">Sign up</a>
                                </li>

                            </ul>
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
            <div class="d-none d-lg-block">
                <div class="dropup">
                    <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img alt="Image" src="assets/img/avatar-male-4.jpg" class="avatar" />
                    </a>
                    <div class="dropdown-menu">
                        <a href="nav-side-user.html" class="dropdown-item">Profile</a>
                        <a href="utility-account-settings.html" class="dropdown-item">Account Settings</a>
                        <a href="#" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>

        </div>
        