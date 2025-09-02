<?php
$errors = [];
$roll = $fname = $lname = $father = $dob = $mobile = $email = $password = $gender = $department = $course = $city = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["roll"])) $errors[] = "Roll number is required";
    else $roll = htmlspecialchars($_POST["roll"]);

    if (empty($_POST["fname"]) || empty($_POST["lname"])) $errors[] = "Full name is required";
    else {
        $fname = htmlspecialchars($_POST["fname"]);
        $lname = htmlspecialchars($_POST["lname"]);
    }

    if (empty($_POST["father"])) $errors[] = "Father's name is required";
    else $father = htmlspecialchars($_POST["father"]);

    if (empty($_POST["dob"])) $errors[] = "Date of birth is required";
    else $dob = $_POST["dob"];

    if (empty($_POST["mobile"])) $errors[] = "Mobile number is required";
    elseif (!preg_match("/^[0-9]{10}$/", $_POST["mobile"])) $errors[] = "Enter valid 10-digit mobile number";
    else $mobile = $_POST["mobile"];

    if (empty($_POST["email"])) $errors[] = "Email is required";
    elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format";
    else $email = $_POST["email"];

    if (empty($_POST["password"])) $errors[] = "Password is required";
    elseif (strlen($_POST["password"]) < 6) $errors[] = "Password must be at least 6 characters";
    else $password = $_POST["password"];

    if (empty($_POST["gender"])) $errors[] = "Gender is required";
    else $gender = $_POST["gender"];

    if (empty($_POST["department"])) $errors[] = "Department is required";
    else $department = implode(", ", $_POST["department"]);

    if (empty($_POST["course"])) $errors[] = "Course is required";
    else $course = $_POST["course"];

    if (empty($_POST["city"])) $errors[] = "City is required";
    else $city = htmlspecialchars($_POST["city"]);

    if (empty($_POST["address"])) $errors[] = "Address is required";
    else $address = htmlspecialchars($_POST["address"]);

    if (empty($errors)) {
        echo "<h2 style='color:green; text-align:center;'>Form submitted successfully!</h2>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial;
            background: #fdd;
        }
        form {
            width: 850px;
            margin: auto;
            background: #fdd;
            padding: 20px;
            border-radius: 10px;
        }
        h2 { text-align: center; }
        .error { color: red; }
        .form-group {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }
        .form-group label {
            width: 180px;
            font-weight: bold;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            flex: 1;
            padding: 8px;
        }

        .dept { align-items: center;
             margin-left: 10px; }
        button {
            background: #f3efef;
            color: #0c0101;
            padding: 10px;
            border: 2px solid black;
            display: block;
            margin: 15px auto;
            cursor: pointer;
        }
       
    </style>
</head>
<body>

<form method="post" action="">
    <h2>Student Registration Form</h2>

    <?php 
    if (!empty($errors)) {
        echo "<div class='error'><ul>";
        foreach ($errors as $e) echo "<li>$e</li>";
        echo "</ul></div>";
    }
    ?>

    <div class="form-group">
        <label>Roll No:</label>
        <input type="text" name="roll" value="<?= $roll ?>">
    </div>

    <div class="form-group">
        <label>Student Name:</label>
        <input type="text" name="fname" placeholder="First Name" value="<?= $fname ?>">
        <input type="text" name="lname" placeholder="Last Name" value="<?= $lname ?>">
    </div>

    <div class="form-group">
        <label>Father's Name:</label>
        <input type="text" name="father" value="<?= $father ?>">
    </div>

    <div class="form-group">
        <label>Date of Birth:</label>
        <input type="date" name="dob" value="<?= $dob ?>">
    </div>

    <div class="form-group">
        <label>Mobile No:</label>
        <input type="text" name="mobile" value="<?= $mobile ?>">
    </div>

    <div class="form-group">
        <label>Email ID:</label>
        <input type="email" name="email" value="<?= $email ?>">
    </div>

    <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password">
    </div>

    <div>
        <label style= " width: 180px; font-weight: bold;">Gender:</label>
        <input type="radio" name="gender" value="Male" class="gender" style= "margin-left: 140px;" <?= ($gender=="Male")?"checked":"" ?>> Male
        <input type="radio" name="gender" value="Female" class="gender" <?= ($gender=="Female")?"checked":"" ?>> Female
    </div>

    <div class="form-group">
        <label>Department:</label>
        <input type="checkbox" name="department[]" value="CSE" class="dept"> CSE
        <input type="checkbox" name="department[]" value="IT" class="dept"> IT
        <input type="checkbox" name="department[]" value="ECE" class="dept"> ECE
        <input type="checkbox" name="department[]" value="Civil" class="dept"> Civil
        <input type="checkbox" name="department[]" value="Mech" class="dept"> Mech
    </div>

    <div class="form-group">
        <label>Course:</label>
        <select name="course">
            <option value="">-- Select Current Course --</option>
            <option value="B.Tech" <?= ($course=="B.Tech")?"selected":"" ?>>B.Tech</option>
            <option value="M.Tech" <?= ($course=="M.Tech")?"selected":"" ?>>M.Tech</option>
            <option value="MBA" <?= ($course=="MBA")?"selected":"" ?>>MBA</option>
        </select>
    </div>

    <div class="form-group">
        <label>Student Photo:</label>
        <input type="file" name="photo">
    </div>

    <div class="form-group">
        <label>City:</label>
        <input type="text" name="city" value="<?= $city ?>">
    </div>

    <div class="form-group">
        <label>Address:</label>
        <textarea name="address" rows=8 ><?= $address ?></textarea>
    </div>

    <button type="submit">Register</button>
</form>

</body>
</html>
