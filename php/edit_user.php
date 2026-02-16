<?php
require_once("php/session.php");
if (!isset($_SESSION['user_id'])) {
    header("Location: restricted");
    exit();
}

require_once 'connection.php';
require_once 'function.php'; // Include the function to generate matric number
require_once 'check_matric_number.php'; // Include the function to check if matric number exists

$error = [];
$user_id = $_SESSION['user_id'];

// Retrieve user data
$sql = "SELECT * FROM user WHERE user_id = :user_id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    $error[] = "User not found.";
}

$fields = ['first_name', 'last_name', 'middle_name', 'gender', 'address', 'mobile_no', 'department', 'state_origin', 'local_government', 'faculty', 'email', 'dob', 'matric_number'];
foreach ($fields as $field) {
    $$field = isset($user[$field]) ? $user[$field] : '';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = htmlspecialchars(trim(strtoupper($_POST['first_name'])));
    $middle_name = htmlspecialchars(trim(strtoupper($_POST['middle_name'])));
    $last_name = htmlspecialchars(trim(strtoupper($_POST['last_name'])));
    $gender = htmlspecialchars(trim(strtoupper($_POST['gender'])));
    $address = htmlspecialchars(trim(strtoupper($_POST['address'])));
    $state_origin = htmlspecialchars(trim(strtoupper($_POST['state_origin'])));
    $local_government = htmlspecialchars(trim(strtoupper($_POST['local_government'])));
    $mobile_no = htmlspecialchars(trim($_POST['mobile_no']));
    $department = htmlspecialchars(trim(strtoupper($_POST['department'])));
    $faculty = htmlspecialchars(trim(strtoupper($_POST['faculty'])));
    $email = htmlspecialchars(trim($_POST['email']));
    $dob = $_POST['dob'];

    if (empty($first_name)) {
        $error[] = "First name is required.";
    }
    if (empty($last_name)) {
        $error[] = "Last name is required.";
    }

    if (empty($error)) {
        // If matric number is not already set for this user, generate a new one
        if (empty($matric_number)) {
            // Set the department code based on the department name
            if($_SESSION["role"] == "ADMIN") {
                $departmentCode = "STAFF";
            }else{
                $departmentCode = strtoupper(substr($department, 0, 3));
            }
           
            // Set the year to the current year (last two digits)
            $year = date('y');
            $previousYear = $year - 1;
            // Generate a new matriculation number and check if it already exists
            do {
                $matricNumber = generateMatricNumber($departmentCode, $previousYear, $year);
            } while (isMatricNumberExists($pdo, $matricNumber));

            // Update the user's profile with the new matric number
            $sql = "UPDATE user 
                    SET first_name = :first_name, 
                        middle_name = :middle_name, 
                        last_name = :last_name,
                        gender = :gender, 
                        address = :address, 
                        mobile_no = :mobile_no, 
                        department = :department, 
                        faculty = :faculty,  
                        state_origin = :state_origin, 
                        local_government = :local_government, 
                        email = :email, 
                        dob = :dob,
                        matric_number = :matric_number
                    WHERE user_id = :user_id";
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':middle_name', $middle_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':mobile_no', $mobile_no);
            $stmt->bindParam(':department', $department);
            $stmt->bindParam(':faculty', $faculty);
            $stmt->bindParam(':state_origin', $state_origin);
            $stmt->bindParam(':local_government', $local_government);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':dob', $dob);
            $stmt->bindParam(':matric_number', $matricNumber); // Bind the new matric number
            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        } else {
            // Update the user's profile without changing the matric number
            $sql = "UPDATE user 
                    SET first_name = :first_name, 
                        middle_name = :middle_name, 
                        last_name = :last_name,
                        gender = :gender, 
                        address = :address, 
                        mobile_no = :mobile_no, 
                        department = :department, 
                        faculty = :faculty,  
                        state_origin = :state_origin, 
                        local_government = :local_government, 
                        email = :email, 
                        dob = :dob
                    WHERE user_id = :user_id";
            
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':middle_name', $middle_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':mobile_no', $mobile_no);
            $stmt->bindParam(':department', $department);
            $stmt->bindParam(':faculty', $faculty);
            $stmt->bindParam(':state_origin', $state_origin);
            $stmt->bindParam(':local_government', $local_government);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':dob', $dob);
            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        }

        if ($stmt->execute()) {
            $msg = "Profile updated successfully.";
            if (!empty($matricNumber)) {
                $msg .= " Matric Number: " . htmlspecialchars($matricNumber);
            }
        } else {
            $error[] = "Error updating profile: " . $stmt->errorInfo()[2];
        }
    }
}
?>
