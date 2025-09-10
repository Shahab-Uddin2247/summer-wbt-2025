<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRATION</title>
  <style>
    .container {
      border: 1px solid #000000;
      background: #fff;
      
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #000000;
      padding: 10px 0;
    }

    .logo {
      font-size: 20px;
      font-weight: bold;
    }

  

    nav a {
      margin: 0 5px;
    }

    main {
      height: 60vh;
    }

    footer {
      text-align: center;
      border-top: 1px solid #000000;
      margin-top: 20px;
      font-size: 14px;
    }

    fieldset{
        width: 40%;
        margin: 50px auto;
        border: 1.5px solid black;
    }

    label {
        display: inline-block;
        width: 120px;
    }
  </style>
</head>

<body>
  <div class="container">
    <header>
      <div class="logo">
        Company
      </div>
      <nav>
        <a href="./index.php">Home</a> |
        <a href="./login.php">Login</a> |
        <a href="./registration.php">Registration</a>
      </nav>
    </header>
    
    <main>
      <fieldset>
        <legend><b>REGISTRATION</b></legend>
        <form action="#" method="post">
          <label for="name">Name :</label>
          <input type="text" id="name" name="name"> <br> <hr>

          <label for="email">Email :</label>
          <input type="email" id="email" name="email"><br><hr>

          <label for="username">User Name :</label>
          <input type="text" id="username" name="username"><br><hr>

          <label for="password">Password :</label>
          <input type="password" id="password" name="password"><br><hr>

          <label for="confirmpassword">Confirm Password :</label>
          <input type="password" id="confirmpassword" name="confirmpassword"><br><hr>

          <label>Gender :</label>
          <input type="radio" name="gender" value="Male"> Male
          <input type="radio" name="gender" value="Female"> Female
          <input type="radio" name="gender" value="Other"> Other
          <br><br>

          <label for="dob">Date of Birth :</label>
          <input type="text" id="dob" name="dob" placeholder="dd/mm/yyyy">
          <br><br>

          <input type="submit" value="Submit">
          <input type="reset" value="Reset">
        </form>
      </fieldset>
    </main>

    
    <footer>
      <p>Copyright © 2017</p>
    </footer>
  </div>
</body>

</html>