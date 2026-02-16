<?php
include('php/edit_user.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile | NOUN</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                            <i class="fa fa-check" aria-hidden="true"></i> <strong>Perfect!</strong> <?php echo $msg; ?>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($error)): ?>
                        <div class="mb-1 alert alert-danger" role="alert">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong> Attention!</strong>
                            <ul>
                                <?php foreach($error as $err): ?>
                                <li><?php echo $err; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        <div class="form-group row">
                            <div class="mb-3 col-md-4">
                                <label for="fname" class="col-form-label">First Name:</label>
                                <input type="text" class="form-control" id="fname" name="first_name" value="<?php echo htmlspecialchars($first_name); ?>" required>
                                <div class="invalid-feedback">
                                    Please enter a first name.
                                </div>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="mname" class="col-form-label">Middle Name:</label>
                                <input type="text" class="form-control" id="mname" name="middle_name" value="<?php echo htmlspecialchars($middle_name); ?>">
                                <div class="invalid-feedback">
                                    Please enter a middle name.
                                </div>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="lname" class="col-form-label">Last Name:</label>
                                <input type="text" class="form-control" id="lname" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>" required>
                                <div class="invalid-feedback">
                                    Please enter a last name.
                                </div>
                            </div>

                            <div class="mb-3 col-md-5">
                                <label for="inputFaculty" class="col-form-label">Faculty:</label>
                                <select name="faculty" id="inputFaculty" class="form-control form-select" required>
                                    <?php if(strlen($faculty) > 0): ?>
                                    <option value="<?php echo $faculty; ?>"><?php echo $faculty; ?></option>
                                    <?php else: ?>
                                    <option value="">Choose..</option>
                                    <?php endif; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select faculty.
                                </div>
                            </div>
                            <div class="mb-3 col-md-5">
                                <label for="inputDepartment" class="col-form-label">Department:</label>
                                <select name="department" id="inputDepartment" class="form-control form-select" required>
                                    <?php if(strlen($department) > 0): ?>
                                    <option value="<?php echo $department; ?>"><?php echo $department; ?></option>
                                    <?php else: ?>
                                    <option value="">Choose..</option>
                                    <?php endif; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select department.
                                </div>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="inputGender" class="col-form-label">Gender:</label>
                                <select name="gender" id="inputGender" class="form-control form-select" required>
                                    <?php if(strlen($gender) > 0): ?>
                                    <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                                    <?php else: ?>
                                    <option value="">Choose..</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <?php endif; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select gender.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="col-form-label" for="state">State:</label>
                                <select id="state" class="form-control form-select" required name="state_origin" onchange="updateLGAs()" required>
                                    <?php if(strlen($state_origin) > 0): ?>
                                    <option value="<?php echo $state_origin; ?>"><?php echo $state_origin; ?></option>
                                    <?php else: ?>
                                    <option value="">Choose..</option>
                                    <?php endif; ?>
                                    <option value="abia">Abia</option>
                                    <option value="adamawa">Adamawa</option>
                                    <option value="akwa-ibom">Akwa Ibom</option>
                                    <option value="anambra">Anambra</option>
                                    <option value="bauchi">Bauchi</option>
                                    <option value="bayelsa">Bayelsa</option>
                                    <option value="benue">Benue</option>
                                    <option value="borno">Borno</option>
                                    <option value="cross-river">Cross River</option>
                                    <option value="delta">Delta</option>
                                    <option value="ebonyi">Ebonyi</option>
                                    <option value="edo">Edo</option>
                                    <option value="ekiti">Ekiti</option>
                                    <option value="enugu">Enugu</option>
                                    <option value="gombe">Gombe</option>
                                    <option value="imo">Imo</option>
                                    <option value="jigawa">Jigawa</option>
                                    <option value="kaduna">Kaduna</option>
                                    <option value="kano">Kano</option>
                                    <option value="katsina">Katsina</option>
                                    <option value="kebbi">Kebbi</option>
                                    <option value="kogi">Kogi</option>
                                    <option value="kwara">Kwara</option>
                                    <option value="lagos">Lagos</option>
                                    <option value="nasarawa">Nasarawa</option>
                                    <option value="niger">Niger</option>
                                    <option value="ogun">Ogun</option>
                                    <option value="ondo">Ondo</option>
                                    <option value="osun">Osun</option>
                                    <option value="oyo">Oyo</option>
                                    <option value="plateau">Plateau</option>
                                    <option value="rivers">Rivers</option>
                                    <option value="sokoto">Sokoto</option>
                                    <option value="taraba">Taraba</option>
                                    <option value="yobe">Yobe</option>
                                    <option value="zamfara">Zamfara</option>
                                    <option value="abuja">Abuja</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a state.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="lga">Local Government:</label>
                                <select class="form-control form-select" id="lga" name="local_government" required>
                                    <?php if(strlen($local_government) > 0): ?>
                                    <option value="<?php echo $local_government; ?>"><?php echo $local_government; ?></option>
                                    <?php else: ?>
                                    <option value="">Choose..</option>
                                    <?php endif; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a local government.
                                </div>
                            </div>
                            <div class="mb-3 col-md-7">
                                <label for="Address" class="col-form-label">Address:</label>
                                <input type="text" class="form-control" id="Address" name="address" value="<?php echo htmlspecialchars($address); ?>" required>
                                <div class="invalid-feedback">
                                    Please enter an address.
                                </div>
                            </div>
                            <div class="mb-3 col-md-3">
                                <label for="Number" class="col-form-label">Mobile No:</label>
                                <input type="tel" class="form-control" id="Number" name="mobile_no" value="<?php echo htmlspecialchars($mobile_no); ?>" required>
                                <div class="invalid-feedback">
                                    Please enter a phone number.
                                </div>
                            </div>
                            <div class="mb-3 col-md-5">
                                <label for="inputEmail" class="col-form-label">Email:</label>
                                <input type="email" class="form-control" id="inputEmail" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                                <div class="invalid-feedback">
                                    Please enter an email.
                                </div>
                            </div>
                            <div class="mb-3 col-md-5">
                                <label for="inputUsername" class="col-form-label">Date of Birth:</label>
                                <input type="date" class="form-control" id="inputUsername" name="dob" value="<?php echo htmlspecialchars($dob); ?>" required>
                                <div class="invalid-feedback">
                                    Please enter your date of birth.
                                </div>
                            </div>
                            <div class="mb-3 col-md-10">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
                        </div>
                    </form>
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
<!-- <script src="js/script2.js"></script> -->
<script src="js/validation.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
