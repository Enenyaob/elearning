<nav class="navbar navbar-expand-md navbar-light ad-header fixed-top">
        <a class="navbar-brand" href="#">
            WEB-BASED LEARNING SYSTEM
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav d-none d-md-flex">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-user"></i> <?php echo ucfirst($_SESSION['username']) ; ?></a>
                </li>
                <li class="nav-item ml-3">
                    <a class="btn btn-primary" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
            <!-- start -->
            <ul class="navbar-nav d-lg-none">
                <li class="nav-item">
                    <a class="nav-link" id="home-link" href="#dashboard"><i class="fa fa-tachometer"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="lessons-link" href="#services"><i class="fas fa-book"></i> Lessons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="exercises-link" href="#exercises"><i class="fas fa-tasks"></i> Exercises</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="edit-link" href="edit_profile"><i class="fas fa-users"></i> Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
            <!-- end -->
        </div>
    </nav>