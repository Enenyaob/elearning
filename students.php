<?php
require_once("php/session.php");
require_once("php/secure.php");

require_once 'php/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $department = htmlspecialchars(trim(strtoupper($_POST['department'])));
    $faculty = htmlspecialchars(trim(strtoupper($_POST['faculty'])));

    // Retrieve user data
    $stmt = $pdo->prepare('SELECT * FROM user WHERE department = :department ORDER BY last_name ASC');
    $stmt->execute(['department' => $department]);
    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);

    if (empty($results)) {
        $error = 'No Record Found';
    } else {
        $msg = 'Record Found';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Find Student | NOUN</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #customers {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        #customers tr:hover {
            background-color: #ddd;
        }
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: #fff;
        }
        @media screen and (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }
    </style>
</head>
<body>
<header>
    <?php include("php/layouts/admin_header.php"); ?>
</header>
<div class="container-fluid main-content">
    <div class="row">
        <aside>
            <?php include("php/layouts/aside.php"); ?>
        </aside>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-5 main">
            <div class="container px-3">
                <div class="mb-3 text-center">Edit Profile</div>
                <div class="row">
                    <form class="col-md-12 sign-up-div needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <?php if(!empty($msg)): ?>
                        <div class="mb-1 col-md-10 max-auto alert alert-success" role="alert">
                            <i class="fa fa-check" aria-hidden="true"></i> <strong>Record</strong> <?php echo $msg; ?>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($error)): ?>
                        <div class="mb-1 alert alert-danger" role="alert">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong> Attention <?php echo $error; ?></strong>
                        </div>
                        <?php endif; ?>
                        <div class="form-group row">
                            <div class="mb-3 col-md-5">
                                <select name="faculty" id="inputFaculty" class="form-control form-select" required>
                                    <?php if(strlen($faculty) > 0): ?>
                                    <option value="<?php echo $faculty; ?>"><?php echo $faculty; ?></option>
                                    <?php else: ?>
                                    <option value="">Choose faculty</option>
                                    <?php endif; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select faculty.
                                </div>
                            </div>
                            <div class="mb-3 col-md-5">
                                <select name="department" id="inputDepartment" class="form-control form-select" required>
                                    <?php if(strlen($department) > 0): ?>
                                    <option value="<?php echo $department; ?>"><?php echo $department; ?></option>
                                    <?php else: ?>
                                    <option value="">Choose department</option>
                                    <?php endif; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select department.
                                </div>
                            </div>
                            <div class="mb-3 col-md-2">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                    <?php if (isset($results) && is_array($results)) : ?>   
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="customers">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Department</th>
                                    <th>Sex</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone No.</th>
                                    <th>Date of Birth</th>
                                    <th>Matric No.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($results as $result): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($result['first_name']); ?></td>
                                    <td><?php echo htmlspecialchars($result['last_name']); ?></td>
                                    <td><?php echo htmlspecialchars($result['department']); ?></td>
                                    <td><?php echo htmlspecialchars($result['gender']); ?></td>
                                    <td><?php echo htmlspecialchars($result['email']); ?></td>
                                    <td><?php echo htmlspecialchars($result['address']); ?></td>
                                    <td><?php echo htmlspecialchars($result['mobile_no']); ?></td>
                                    <td><?php echo htmlspecialchars($result['dob']); ?></td>
                                    <td><?php echo htmlspecialchars($result['matric_number']); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </main>
    </div>
</div>
<footer class="fixed-bottom">
    <div class="container-fluid footer2 fixed-bottom">
        <div class="row text-center footer-text2 gx-0">
            <div>©2024 National Open University of Nigeria</div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
<script src="js/validation.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
