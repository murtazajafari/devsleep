<?php include 'header.php' ?>
        <div class="main-container">

            <div class="navbar bg-white breadcrumb-bar">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Overview</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">App Pages</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Event</li>
                    </ol>
                </nav>

                <div class="dropdown">
                    <button class="btn btn-round" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="material-icons">settings</i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">

                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#team-manage-modal">Edit
                            Event</a>
                        <a class="dropdown-item" href="#">Share</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">Leave</a>

                    </div>
                </div>

            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-xl-10">
                        <div class="page-header">
                            <h1>All events &#x2615;</h1>
                            <p class="lead">Simplify your planning and set yourself up for success.</p>
                            
                        </div>
                        <hr>
                        
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="projects" role="tabpanel"
                                data-filter-list="content-list-body">
                                <div class="content-list">
                                    <div class="row content-list-head">
                                        <div class="col-auto">
                                            <h3>Events</h3>
                                            <button class="btn btn-round" data-toggle="modal"
                                                data-target="#event-add-modal">
                                                <i class="material-icons">add</i>
                                            </button>
                                        </div>
                                        <form class="col-md-auto">
                                            <div class="input-group input-group-round">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">filter_list</i>
                                                    </span>
                                                </div>
                                                <input type="search" class="form-control filter-list-input"
                                                    placeholder="Filter events" aria-label="Filter Events">
                                            </div>
                                        </form>
                                    </div>
                                    <!--end of content list head-->
                                    <div class="content-list-body row">

                                        <div class="col-lg-6">
                                            <div class="card card-project">

                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>

                                                <div class="card-body">
                                                    <div class="dropdown card-options">
                                                        <button class="btn-options" type="button"
                                                            id="event-dropdown-button-1" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">more_vert</i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Share</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-title">
                                                        <a href="single_event.php">
                                                            <h5 data-filter-by="text">Nawroz New Year</h5>
                                                        </a>
                                                    </div>
                                                    <ul class="avatars">

                                                        <li>
                                                            <a href="#" data-toggle="tooltip" title="Peggy">
                                                                <img alt="Peggy Brown" class="avatar"
                                                                    src="assets/img/avatar-female-2.jpg"
                                                                    data-filter-by="alt" />
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#" data-toggle="tooltip" title="Ravi">
                                                                <img alt="Ravi Singh" class="avatar"
                                                                    src="assets/img/avatar-male-3.jpg"
                                                                    data-filter-by="alt" />
                                                            </a>
                                                        </li>

                                                    </ul>
                                                    <div class="card-meta d-flex justify-content-between">
                                                        <!-- <div class="d-flex align-items-center">
                                                            <i class="material-icons mr-1">playlist_add_check</i>
                                                            <span class="text-small">6/10</span>
                                                        </div> -->

                                                        <div class="d-flex align-items-center">
                                                            <i class="material-icons mr-1">room</i>
                                                            <span class="text-small">100 Harris St NSW 2001 Australia</span>
                                                        </div>

                                                        <span class="text-small" data-filter-by="text">20, December 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end of content list body-->
                                </div>
                                <!--end of content list-->
                            </div>
                            <!--end of tab-->
                        </div>
                        <form class="modal fade" id="user-invite-modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Invite Users</h5>
                                        <button type="button" class="close btn btn-round" data-dismiss="modal"
                                            aria-label="Close">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </div>
                                    <!--end of modal head-->
                                    <div class="modal-body">
                                        <p>Send an invite link via email to add members to this team</p>
                                        <div>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control"
                                                    placeholder="Recipient email address"
                                                    aria-label="Recipient email address">
                                            </div>
                                            <div class="text-right text-small mt-2">
                                                <a href="#" role="button">Add another recipient</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end of modal body-->
                                    <div class="modal-footer">
                                        <button role="button" class="btn btn-primary" type="submit">
                                            Invite users
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                        <form class="modal fade" id="event-add-modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">New Event</h5>
                                        <button type="button" class="close btn btn-round" data-dismiss="modal"
                                            aria-label="Close">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </div>
                                    <!--end of modal head-->
                                    
                                    <div class="modal-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="event-add-details"
                                                role="tabpanel">
                                                <h6>General Details</h6>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-3">Name</label>
                                                    <input class="form-control col" type="text"
                                                        placeholder="Event name" name="event-name" />
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3">Description</label>
                                                    <textarea class="form-control col" rows="3"
                                                        placeholder="Event description"
                                                        name="event-description"></textarea>
                                                </div>
                                                

                                                <hr>
                                                <h6>Timeline</h6>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-3">Date</label>
                                                    <input class="form-control col" type="text" name="event-date"
                                                        placeholder="Select a date" data-flatpickr
                                                        data-default-date="2021-04-21" data-alt-input="true" />
                                                </div>
                                                
                                                
                                                <div class="form-group row align-items-center">
                                                    <label class="col-3">Location</label>
                                                    <input class="form-control col" type="text"
                                                        placeholder="Event location" name="event-location" />
                                                </div>
                                                <div class="alert alert-warning text-small" role="alert">
                                                    <span>You can change due dates at any time.</span>
                                                </div>
                                                <hr>
                                                <h6>Visibility</h6>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="visibility-everyone"
                                                                name="visibility" class="custom-control-input" checked>
                                                            <label class="custom-control-label"
                                                                for="visibility-everyone">Everyone</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="visibility-members"
                                                                name="visibility" class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="visibility-members">Members</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="visibility-me" name="visibility"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="visibility-me">Just
                                                                me</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--end of modal body-->
                                    <div class="modal-footer">
                                        <button role="button" class="btn btn-primary" type="submit">
                                            Create Event
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            

        </div>

<?php include 'footer.php'; ?>