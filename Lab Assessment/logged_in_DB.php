<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Public Home</title>
  <style>
    body {
      width: 70%;
      margin: 10px auto;
    }

    .container {
      border: 1px solid #000000;
      background: #fff;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #000000;
      padding: 10px 20px;
    }

    .logo {
      font-size: 20px;
      font-weight: bold;
    }

  
    header nav a {
      margin: 0 5px;
    }

    main {
      display: flex;
    }

    nav.main {
      width: 20%;
      padding: 20px;
      border-right: 1px solid black;
    }

    nav.main ul {
      padding-left: 10px 0px;
    }

    article {
      flex: 1;
      padding: 20px;
    }

    footer {
      text-align: center;
      border-top: 1px solid #000000;
      margin-top: 20px;
      font-size: 14px;
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
        Loggid in as 
        <a href="">Bob</a> |
        <a href="">Log Out</a>
      </nav>
    </header>

    <main>
      <nav class="main">
        Account:
        <hr>
        <ul>
          <li><a href="./logged_in_DB">Dashboard</a></li>
          <li><a href="./viewProfile.php">View Profile</a></li>
          <li><a href="./editProfile.php">Edit Profile</a></li>
          <li><a href="changepp.php">Change Profile Picture</a></li>
          <li><a href="changePass.php">Change Password</a></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
      </nav>

      <article>
        <h1>Welcome Bob</h1>
      </article>
    </main>

    <footer>
      <p>Copyright © 2017</p>
    </footer>
  </div>

  
</body>
</html>