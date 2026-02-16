<nav id="sidebar" class="col-md-3 col-lg-2 d-none d-md-block sidebar-color sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
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
        </ul>
    </div>
</nav>
