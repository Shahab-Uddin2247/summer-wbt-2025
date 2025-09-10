<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
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
      height: 50vh;
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
        <legend> <b>LogIn </b> </legend>
    <form action="" method="post">

      <label for="">User Name : </label>
         
    <input type="text" name="" id=""> <br> <br>
        <label for="">Password : </label>
        <input type="text" name="" id="">
        <hr>
        <input type="checkbox" name="" id=""> Remember me <br> <br>
        <input type="button" value="Submit">  <a href="./forgotPassword.php">Forgot password</a>
      </form>
      </fieldset>
    </main>

    <footer>
      <p>Copyright © 2017</p>
    </footer>
  </div>
</body>

</html>