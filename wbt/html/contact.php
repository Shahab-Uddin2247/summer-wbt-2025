<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>contact</title>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/contact.css" />
  <style>
    .error {
      color: red;
      font-size: 14px;
    }
  </style>
</head>

<body>

  <header>
    <div class="navigation-bar">
      <a href="../index.html" class="logo">MD. SHAHAB UDDIN</a>
      <nav class="nav-links">
        <a href="../html/education.html">Education</a>
        <a href="../html/accomplishments.html">Accomplishments</a>
        <a href="../html/project.html">Projects</a>
        <a href="../html/contact.php">Contact me</a>
      </nav>
    </div>
  </header>

  <?php
  // Initialize error and input variables
  $firstNameErr = $lastNameErr = $emailErr = $subjectErr = $interestErr = "";
  $firstName = $lastName = $email = $subject = $interest = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate first name
    if (empty($_POST["firstName"])) {
      $firstNameErr = "First name is required";
    } else {
      $firstName = test_input($_POST["firstName"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
        $firstNameErr = "Only letters and spaces allowed";
      }
    }

    // Validate last name
    if (empty($_POST["lastName"])) {
      $lastNameErr = "Last name is required";
    } else {
      $lastName = test_input($_POST["lastName"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
        $lastNameErr = "Only letters and spaces allowed";
      }
    }

    // Validate email
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }

    // Validate subject (checkboxes)
    if (empty($_POST["subject"])) {
      $subjectErr = "Please select at least one option";
    } else {
      $subject = $_POST["subject"]; // array of selected options
    }

    // Validate interested in (radio)
    if (empty($_POST["interest"])) {
      $interestErr = "Please choose one option";
    } else {
      $interest = test_input($_POST["interest"]);
    }
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <h3>Please fill this form to contact me</h3>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <strong>First Name:</strong>
    <input type="text" name="firstName" id="firstName" value="<?php echo htmlspecialchars($firstName); ?>" />
    <span class="error">* <?php echo $firstNameErr; ?></span>
    <br /><br />

    <strong>Last Name:</strong>
    <input type="text" name="lastName" id="lastName" value="<?php echo htmlspecialchars($lastName); ?>" />
    <span class="error">* <?php echo $lastNameErr; ?></span>
    <br /><br />

    <strong>Email:</strong>
    <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" />
    <span class="error">* <?php echo $emailErr; ?></span>
    <br /><br />

    <strong>Subject for contact:</strong><br />
    <input type="checkbox" name="subject[]" value="General Question" <?php if (is_array($subject) && in_array("General Question", $subject)) echo "checked"; ?>>General Question<br />
    <input type="checkbox" name="subject[]" value="Job Opportunity" <?php if (is_array($subject) && in_array("Job Opportunity", $subject)) echo "checked"; ?>>Job Opportunity<br />
    <input type="checkbox" name="subject[]" value="Project Inquiry" <?php if (is_array($subject) && in_array("Project Inquiry", $subject)) echo "checked"; ?>>Project Inquiry<br />
    <input type="checkbox" name="subject[]" value="Internship Opportunity" <?php if (is_array($subject) && in_array("Internship Opportunity", $subject)) echo "checked"; ?>>Internship Opportunity<br />
    <span class="error"><?php echo $subjectErr; ?></span>
    <br /><br />

    <strong>Interested in:</strong><br />
    <input type="radio" name="interest" value="Skills" <?php if ($interest == "Skills") echo "checked"; ?>>Skills<br />
    <input type="radio" name="interest" value="Experience" <?php if ($interest == "Experience") echo "checked"; ?>>Experience<br />
    <input type="radio" name="interest" value="Education or Certifications" <?php if ($interest == "Education or Certifications") echo "checked"; ?>>Education or Certifications<br />
    <span class="error">* <?php echo $interestErr; ?></span>
    <br /><br />

    <input type="submit" id="submitBtn" value="Submit" />
    <input type="reset" id="resetBtn" />
  </form>

  <?php
  // Display user input if no errors
  if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($firstNameErr) && empty($lastNameErr) && empty($emailErr) && empty($subjectErr) && empty($interestErr)) {
    echo "<h2>Your Input:</h2>";
    echo htmlspecialchars($firstName) . "<br>";
    echo htmlspecialchars($lastName) . "<br>";
    echo htmlspecialchars($email) . "<br>";
    echo is_array($subject) ? htmlspecialchars(implode(", ", $subject)) : htmlspecialchars($subject);
    echo "<br>";
    echo htmlspecialchars($interest);
  }
  ?>

  <footer>
    <p>
      <a href="#"><img src="../image/fb.png" alt="Facebook" /></a>
      <a href="#"><img src="../image/lkdn.jpg" alt="LinkedIn" /></a>
      <a href="#"><img src="../image/github.png" alt="GitHub" /></a>
      <a href="#"><img src="../image/gmail.png" alt="Gmail" /></a>
    </p>

    <p>Copy right reserved by the Owner.</p>
  </footer>
</body>

</html>
