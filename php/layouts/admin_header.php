<nav class="navbar navbar-expand-md navbar-light ad-header fixed-top">
    <?php if ($_SESSION['role'] == "ADMIN") : ?>
    <a class="navbar-brand" href="admin_dashboard">
    <?php else: ?>
        <a class="navbar-brand" href="user_dashboard">
    <?php endif; ?>
        <img src="img/Logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-top">
        WEB-BASED LEARNING SYSTEM
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav d-none d-md-flex">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user"></i> <?php echo ucfirst($_SESSION['username']); ?></a>
            </li>
            <li class="nav-item ml-3">
                <a class="btn btn-primary" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
        <!-- start -->
        <ul class="navbar-nav d-lg-none">
            <?php if ($_SESSION['role'] == "ADMIN") : ?>
                <li class="nav-item">
                    <a class="nav-link" id="home-link" href="admin_dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <?php elseif ($_SESSION['role'] == "STUDENT") : ?>
                <li class="nav-item">
                    <a class="nav-link" id="home-link" href="user_dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <?php else: ?>
                <?php endif; ?>

                <?php if ($_SESSION['role'] == "ADMIN") : ?>
                <li class="nav-item">
                    <a class="nav-link" id="lessons-link" href="add_lecture"><i class="fas fa-plus-circle"></i> Add Lectures</a>
                </li>
                <?php elseif ($_SESSION['role'] == "STUDENT") : ?>
                <li class="nav-item">
                   <a class="nav-link" id="lessons-link" href="view_lectures"><i class="fas fa-chalkboard-teacher"></i> Lectures</a>
                </li>
                <?php else: ?>
                <?php endif; ?>

                 <?php if ($_SESSION['role'] == "ADMIN") : ?>
                <li class="nav-item">
                    <a class="nav-link" id="exercises-link" href="add_exercise"><i class="fas fa-plus-square"></i> Add Exercises</a>
                </li>
                <?php elseif ($_SESSION['role'] == "STUDENT") : ?>
                <li class="nav-item">
                   <a class="nav-link" id="exercises-link" href="view_exercises"><i class="fas fa-list-alt"></i> Exercises</a>
                </li>
                <?php else: ?>
                <?php endif; ?>

                <?php if ($_SESSION['role'] == "ADMIN") : ?>
                <li class="nav-item">
                    <a class="nav-link" id="students-link" href="students"><i class="fas fa-users"></i> Students</a>
                </li>
                <?php else : ?>
                <?php endif; ?>
                <?php if ($_SESSION['role'] == "ADMIN") : ?>
                <li class="nav-item">
                    <a class="nav-link" id="create-users-link" href="create_users"><i class="fas fa-user-plus"></i> Create Users</a>
                </li>
                <?php else : ?>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" id="view-profile-link" href="view_profile"><i class="fas fa-user-edit"></i> View Profile</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
        <!-- end -->
    </div>
</nav>
